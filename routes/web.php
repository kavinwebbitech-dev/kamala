<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\LandingPageController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\PortfolioCategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SitemapRobotsController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/clear-cache', function () {
    Artisan::call('optimize:clear');
    return 'Cache cleared';
});

Route::get('/math-captcha', function () {
    $num1 = rand(1, 20);
    $num2 = rand(1, 20);

    session(['math_captcha' => $num1 + $num2]);

    return response()->json([
        'question' => "$num1 + $num2 = ?"
    ]);
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/landingpages', 'landingpages')->name('landingpages');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
    Route::get('/search-engine', 'searchengine')->name('search.engine');
    Route::get('/meta-ads-services', 'metaservices')->name('meta.services');
    Route::get('/google-ads-services', 'googleAds')->name('google.ads.services');
    Route::get('/digital-marketing', 'digitalMarketing')->name('digital.marketing');
    Route::get('/social-media-marketing', 'socialMediaMarketing')->name('social.media.marketing');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog-details-new', 'blogDetailsNew')->name('blog.details.new');
    Route::get('/service-details/{id}', 'serviceDetail')->name('service.detail');
    Route::get('/blog/detail/{id}', 'blogDetail')->name('blog.detail');
    Route::post('/enquriy/store', 'enquiryStore')->name('enquiry.store');
});

// Admin routes
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.index');

    // Pages    
    Route::prefix('pages')->name('pages.')->controller(LandingPageController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/datatable', 'datatable')->name('datatable');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::delete('/delete-all', 'deleteAll')->name('deleteAll');
        Route::post('/bulk-upload', 'bulkUpload')->name('bulk.upload');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::put('/{id}/update', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('delete');
    });

    // Settings
    Route::prefix('settings')->name('setting.')->controller(SettingController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/profile', 'updateProfile')->name('profile.update');
        Route::post('/common', 'updateCommon')->name('settings.update');
    });

    // Sitemap & Robots routes under settings prefix
    Route::prefix('sitemap')->name('sitemap.')->controller(SitemapRobotsController::class)->group(function () {
        Route::get('/sitemap-robots', 'index')->name('sitemap-robots.index');
        Route::post('/robots-upload',  'upload')->name('robots.upload');
        Route::get('/sitemap-download', 'downloadSitemap')->name('sitemap.download');
        Route::get('/robots-download', 'downloadRobots')->name('robots.download');
    });

    // Enquiry
    Route::prefix('enquiry')->name('enquiry.')->controller(EnquiryController::class)->group(function () {
        Route::get('/list', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('data.store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::delete('/enquiry-delete/{id}', 'destroy')->name('destory');
    });

    // Service
    Route::prefix('service')->name('service.')->controller(ServiceController::class)->group(function () {
        Route::get('/list', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::delete('/service-delete/{id}', 'destroy')->name('destory');
    });

    // Blogs
    Route::prefix('blog')->name('blog.')->controller(BlogController::class)->group(function () {
        Route::get('/list', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::delete('/delete/{id}', 'destroy')->name('destory');
    });

    // Review
    // Route::prefix('review')->name('review.')->controller(ReviewController::class)->group(function () {
    //     Route::get('/list', 'index')->name('index');
    //     Route::get('/create', 'create')->name('create');
    //     Route::post('/store', 'store')->name('store');
    //     Route::get('/edit/{id}', 'edit')->name('edit');
    //     Route::put('/update/{id}', 'update')->name('update');
    //     Route::delete('/delete/{id}', 'destroy')->name('destory');
    // });

    // Portfolio
    Route::get('portfocategory', [PortfolioCategoryController::class, 'index'])
        ->name('portfolio-category.index');

    Route::get('portfolio-category/create', [PortfolioCategoryController::class, 'create'])
        ->name('portfolio-category.create');

    Route::post('portfolio-category/store', [PortfolioCategoryController::class, 'store'])
        ->name('portfolio-category.store');

    Route::get('portfolio-category/edit/{id}', [PortfolioCategoryController::class, 'edit'])
        ->name('portfolio-category.edit');

    Route::put('portfolio-category/update/{id}', [PortfolioCategoryController::class, 'update'])
        ->name('portfolio-category.update');

    Route::delete('portfolio-category/destroy/{id}', [PortfolioCategoryController::class, 'destroy'])
        ->name('portfolio-category.destroy');


    // ================= Portfolio =================

    Route::get('portfolio', [PortfolioController::class, 'index'])
        ->name('portfolio.index');

    Route::get('portfolio/create', [PortfolioController::class, 'create'])
        ->name('portfolio.create');

    Route::post('portfolio/store', [PortfolioController::class, 'store'])
        ->name('portfolio.store');

    Route::get('portfolio/edit/{id}', [PortfolioController::class, 'edit'])
        ->name('portfolio.edit');

    Route::put('portfolio/update/{id}', [PortfolioController::class, 'update'])
        ->name('portfolio.update');

    Route::delete('portfolio/destroy/{id}', [PortfolioController::class, 'destroy'])
        ->name('portfolio.destroy');

    // Faqs
    Route::prefix('faq')->name('faq.')->controller(FaqController::class)->group(function () {
        Route::get('/list', 'index')->name('index');
        Route::get('/edit', 'edit')->name('edit');
        Route::put('/update', 'update')->name('update');
        Route::post('/delete/{id}', 'destroy')->name('destory');
    });

    // Notification
    Route::prefix('notification')->name('notification.')->controller(NotificationController::class)->group(function () {
        Route::get('/list', 'index')->name('index');
        Route::delete('/delete/{id}', 'destroy')->name('destroy');
    });
});

//Landing Page
Route::get('/{slug}', [HomeController::class, 'landing'])->where('slug', '^(?!admin).*');
