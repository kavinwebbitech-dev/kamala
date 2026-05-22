<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Enquiry;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Plan;
use App\Models\Review;
use App\Models\Service;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index(Request $request)
    {

        $ip = $request->ip();
        increaseWebsiteVisits($ip);

        $categories = \App\Models\PortfolioCategory::where('status', 1)
            ->orderBy('priority')
            ->get();
        $portfolios = \App\Models\Portfolio::with('category')
            ->where('status', 1)
            ->orderBy('priority')
            ->get();

        $faqs = Faq::where('status', 1)->get();

        $blogs = Blog::where('status', 1)
            ->latest()
            ->paginate(6);

        return view('frontend.index', compact('categories', 'portfolios', 'faqs', 'blogs'));
    }

    public function faq()
    {
        $faqs = Faq::where('status', 1)->get();
        return view('frontend.faq', compact('faqs'));
    }

    public function new()
    {
        return view('frontend.new');
    }

    public function searchengine()
    {
        return view('frontend.search-engine');
    }

    public function metaservices()
    {
        return view('frontend.meta-ads-services');
    }

    public function socialMediaMarketing()
    {
        return view('frontend.social-media-marketing');
    }

    public function googleAds()
    {
        return view('frontend.google-ads-services');
    }

    public function digitalMarketing()
    {
        return view('frontend.digital-marketing');
    }

    public function contact()
    {
        return view('frontend.contact');
    }



    public function portfolio()
    {
        $categories = \App\Models\PortfolioCategory::where('status', 1)
            ->orderBy('priority')
            ->get();
        $portfolios = \App\Models\Portfolio::with('category')
            ->where('status', 1)
            ->orderBy('priority')
            ->get();

        return view('frontend.portfolio', compact('categories', 'portfolios'));
    }

    public function blog()
    {
        $blogs = Blog::where('status', 1)
            ->latest()
            ->paginate(6);

        return view('frontend.blog', compact('blogs'));
    }


    public function blogDetail($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();

        $popularBlogs = Blog::where('status', 1)
            ->where('id', '!=', $blog->id)
            ->latest()
            ->take(3)
            ->get();

        $relatedBlogs = Blog::where('status', 1)
            ->where('id', '!=', $blog->id)
            ->latest()
            ->take(3)
            ->get();

        return view('frontend.blog-detail', compact(
            'blog',
            'popularBlogs',
            'relatedBlogs'
        ));
    }

    public function blogDetailsNew()
    {
        return view('frontend.blog-details-new');
    }

    public function landingpages()
    {
        return view('frontend.landing-pages.index');
    }

    public function landing(Request $request, $slug)
    {
        $page = Page::where('url_slug', $slug)->first();
        if (!$page) {
            abort(404);
        }
        $ip = $request->ip();
        $services = Service::where('status', 1)->get();
        increaseWebsiteVisits($ip);
        return view('frontend.landing-pages.final-landingpage', compact('services', 'page'));
    }

    public function serviceDetail($slug)
    {
        try {
            $service = Service::where('slug', $slug)->where('status', 1)->first();
            if (!$service) {
                abort(404);
            }
        } catch (\Exception $e) {
            abort(404);
        }

        return view('frontend.service-details', compact('service'));
    }



    public function enquiryStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|digits_between:7,15',
            'subject' => 'required|string|max:255',
            'message' => [
                'required',
                'min:5',
                'max:1000',
                'not_regex:/<[^>]*>/'
            ],
            'captcha' => 'required|numeric'
        ]);
        // Check math captcha
        if ((int)$request->captcha !== session('math_captcha')) {
            return response()->json([
                'status' => false,
                'errors' => [
                    'captcha' => ['Wrong answer']
                ]
            ], 422);
        }

        // clear captcha
        session()->forget('math_captcha');
        Enquiry::create([
            'name'    => $validated['name'],
            'email'   => $validated['email'],
            'phone'   => $validated['phone'],
            'message' => $validated['message'],
            'subject' => $validated['subject'],
            'type'    => $request->type,
        ]);

        storeNotification(
            'New Enquiry Received',
            'You have received a new enquiry',
            'enquiry',
            1
        );

        try {
            $to = "info@kamalatech.com";

            Mail::send([], [], function ($message) use ($validated, $request, $to) {

                $message->to($to)
                    ->from('info@kamalatech.com', 'Kamala Tech')
                    ->replyTo($validated['email'], $validated['name'])
                    ->subject('New Enquiry Received')
                    ->html("
                    <h2>New Enquiry</h2>
                    <p><strong>Name:</strong> {$validated['name']}</p>
                    <p><strong>Email:</strong> {$validated['email']}</p>
                    <p><strong>Phone:</strong> {$validated['phone']}</p>
                    <p><strong>Message:</strong> {$validated['message']}</p>
                    <p><strong>Subject:</strong> {$validated['subject']}</p>
                    <p><strong>Type:</strong> {$request->type}</p>
                ");
            });

            Mail::send([], [], function ($message) use ($validated) {

                $message->to($validated['email'])
                    ->from('info@kamalatech.com', 'Kamala Tech')
                    ->subject('Thank You for Your Enquiry')
                    ->html("
                    <p>Hi {$validated['name']},</p>
                    <p>Thank you for contacting us. We have received your enquiry and will get back to you soon.</p>
                    <br>
                    <p><strong>Your Message:</strong></p>
                    <p>{$validated['message']}</p>
                ");
            });
        } catch (\Throwable $e) {
            Log::error('Mail Error: ' . $e->getMessage());
        }

        return response()->json([
            'status' => true,
            'message' => 'Your enquiry has been submitted successfully!'
        ]);
    }
}
