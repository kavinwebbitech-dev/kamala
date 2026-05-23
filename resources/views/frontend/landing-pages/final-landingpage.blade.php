@extends('frontend.landing-pages.layouts.app')

@section('meta_title', $page->meta_title ?? '')
@section('meta_description', $page->meta_description ?? '')
@section('meta_keyword', $page->meta_keyword ?? '')

@section('content')
    <style>
        /* CKEditor / Rich Text Backend Content Styling */
        .ck-content {
            color: #6B7280;
            /* brand-gray */
        }

        /* Section Main Heading */
        .ck-content h2 {
            font-size: 2.25rem;
            /* 36px */
            font-weight: 800;
            color: #1F1738;
            /* brand-dark */
            line-height: 1.15;
            letter-spacing: -0.025em;
        }

        @media (min-width: 768px) {
            .ck-content h2 {
                font-size: 3rem;
                /* 48px */
            }
        }

        /* Block Heading (e.g., 1. Technical SEO) */
        .ck-content h3 {
            font-size: 1.875rem;
            /* 30px */
            font-weight: 800;
            color: #1F1738;
            margin-bottom: 0.5rem;
        }

        /* Sub-heading/Highlight */
        .ck-content h4 {
            font-size: 19px;
            font-weight: 700;
            color: #6D4AFF;
            /* brand-primary */
            margin-bottom: 1.25rem;
        }

        /* Paragraphs */
        .ck-content p {
            font-size: 17px;
            line-height: 1.75;
            margin-bottom: 1.5rem;
            margin-top: 10px;
        }

        /* Bold Text */
        .ck-content strong {
            color: #1F1738;
            font-weight: 700;
        }

        /* Ordered Lists */
        .ck-content ol {
            list-style-type: decimal;
            padding-left: 1.5rem;
            margin-bottom: 2rem;
            font-size: 17px;
            line-height: 1.75;
        }

        .ck-content ol li {
            margin-bottom: 0.75rem;
            padding-left: 0.5rem;
        }

        /* Unordered Lists (Custom Checkmark Bullets) */
        .ck-content ul {
            list-style: none;
            padding: 0;
            margin-bottom: 2rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .ck-content ul li {
            position: relative;
            padding-left: 2.5rem;
            font-size: 16px;
            line-height: 1.6;
        }

        /* Custom SVG Checkmark for standard <li> */
        .ck-content ul li::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0.15rem;
            width: 1.5rem;
            height: 1.5rem;
            /* Purple Lucide 'check-circle-2' SVG */
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%236D4AFF' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M22 11.08V12a10 10 0 1 1-5.93-9.14'/%3E%3Cpolyline points='22 4 12 14.01 9 11.01'/%3E%3C/svg%3E");
            background-size: contain;
            background-repeat: no-repeat;
        }

        /* Format bold text inside lists to act as titles */
        .ck-content ul li strong {
            display: block;
            font-size: 17px;
            margin-bottom: 0.25rem;
        }
    </style>

    <section id="hero" class="relative pt-28 pb-16 lg:pt-36 lg:pb-20 overflow-hidden bg-white border-b border-slate-100">
        <div
            class="absolute top-0 right-0 w-[500px] h-[500px] bg-gradient-to-bl from-brand-secondary/15 to-brand-primary/15 rounded-full blur-[90px] -z-10 animate-blob pointer-events-none">
        </div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-gradient-to-tr from-brand-primary/15 to-transparent rounded-full blur-[80px] -z-10 animate-blob pointer-events-none"
            style="animation-delay: 2s;"></div>

        <div class="absolute inset-0 z-0 opacity-[0.03] pointer-events-none"
            style="background-image: radial-gradient(#6D4AFF 1px, transparent 1px); background-size: 32px 32px;"></div>

        <div class="container max-w-[1200px] mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-10 lg:gap-12 items-center">

                <!-- Left Content -->
                <div class="lg:col-span-7 reveal-up">
                    <span
                        class="bg-[#F3F0FF] text-brand-primary font-bold text-[12px] uppercase tracking-[0.15em] px-4 py-2 rounded-full inline-flex items-center mb-5 border border-brand-primary/10 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-brand-secondary inline-block mr-2 animate-pulse"></span>
                        No:1 SEO Agency
                    </span>
                    <h1
                        class="text-4xl md:text-5xl lg:text-[56px] font-black text-brand-dark leading-[1.1] tracking-tight mb-5">
                        {!! $page->name ?? '' !!}
                    </h1>

                    <p class="text-brand-gray text-[17px] md:text-lg leading-relaxed mb-8 max-w-xl font-medium">
                        {!! $page->banner_content ?? '' !!}
                    </p>

                    <!-- NEW: Highlight Points with Icons -->
                    <div class="grid sm:grid-cols-2 gap-y-4 gap-x-6">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-xl bg-[#F3F0FF] flex items-center justify-center text-brand-primary shrink-0 shadow-inner">
                                <i data-lucide="bar-chart-2" class="w-5 h-5"></i>
                            </div>
                            <span class="text-[15px] font-bold text-brand-dark">Data-Driven Strategies</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-xl bg-[#FDF0F9] flex items-center justify-center text-brand-secondary shrink-0 shadow-inner">
                                <i data-lucide="target" class="w-5 h-5"></i>
                            </div>
                            <span class="text-[15px] font-bold text-brand-dark">High-Intent Traffic Focus</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-xl bg-[#E0F2FE] flex items-center justify-center text-[#0A7EFA] shrink-0 shadow-inner">
                                <i data-lucide="shield-check" class="w-5 h-5"></i>
                            </div>
                            <span class="text-[15px] font-bold text-brand-dark">100% White-Hat Methods</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-xl bg-[#D1FAE5] flex items-center justify-center text-[#10B981] shrink-0 shadow-inner">
                                <i data-lucide="pie-chart" class="w-5 h-5"></i>
                            </div>
                            <span class="text-[15px] font-bold text-brand-dark">Transparent Reporting</span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5 reveal-up" id="audit-form">

                    <!-- Decorative Form Background Glow -->
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-brand-primary to-brand-secondary rounded-[2.5rem] blur-2xl opacity-30 transform translate-y-4 translate-x-4 -z-10">
                    </div>

                    <div
                        class="bg-white rounded-[2rem] p-2 md:p-4 shadow-[0_20px_60px_-15px_rgba(217,70,239,0.3)] border border-slate-100 relative overflow-hidden group z-10">

                        <!-- Top Gradient Accent Line (Matches Reference Image) -->
                        <div
                            class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-brand-primary via-brand-secondary to-[#FF6600]">
                        </div>

                        <div class="mb-8 text-center mt-1">
                            <h3 class="text-[28px] font-extrabold text-brand-dark mb-3 tracking-tight">Claim Free SEO Audit
                            </h3>
                        </div>

                        <form id="contact-form" class="space-y-5">

                            <input type="hidden" name="type" value="Landing Page">

                            <!-- Name + Phone -->
                            <div class="grid md:grid-cols-2 gap-4">

                                <div class="space-y-2">
                                    <label class="text-[13px] font-bold text-brand-dark uppercase tracking-wider ml-1">
                                        Full Name *
                                    </label>

                                    <input type="text" name="name" placeholder="John Doe"
                                        class="w-full bg-[#F8F9FA] border-2 border-slate-200 focus:bg-white focus:border-brand-primary focus:ring-4 focus:ring-brand-primary/10 rounded-xl px-5 py-3.5 text-[15px] font-medium text-brand-dark outline-none transition-all placeholder:text-slate-400">

                                    <span class="error-name text-red-500 text-xs"></span>
                                </div>

                                <div class="space-y-2">
                                    <label class="text-[13px] font-bold text-brand-dark uppercase tracking-wider ml-1">
                                        Phone Number *
                                    </label>

                                    <input type="tel" name="phone" placeholder="+91 9876543210"
                                        class="w-full bg-[#F8F9FA] border-2 border-slate-200 focus:bg-white focus:border-brand-primary focus:ring-4 focus:ring-brand-primary/10 rounded-xl px-5 py-3.5 text-[15px] font-medium text-brand-dark outline-none transition-all placeholder:text-slate-400">

                                    <span class="error-phone text-red-500 text-xs"></span>
                                </div>

                            </div>
                            <div class="grid md:grid-cols-2 gap-4">
                                <!-- Email -->
                                <div class="space-y-2">
                                    <label class="text-[13px] font-bold text-brand-dark uppercase tracking-wider ml-1">
                                        Email Address *
                                    </label>

                                    <input type="email" name="email" placeholder="john@company.com"
                                        class="w-full bg-[#F8F9FA] border-2 border-slate-200 focus:bg-white focus:border-brand-primary focus:ring-4 focus:ring-brand-primary/10 rounded-xl px-5 py-3.5 text-[15px] font-medium text-brand-dark outline-none transition-all placeholder:text-slate-400">

                                    <span class="error-email text-red-500 text-xs"></span>
                                </div>

                                <!-- Service -->
                                <div class="space-y-2">
                                    <label class="text-[13px] font-bold text-brand-dark uppercase tracking-wider ml-1">
                                        Interested In *
                                    </label>

                                    <div class="relative">

                                        <select name="subject"
                                            class="w-full bg-[#F8F9FA] border-2 border-slate-200 focus:bg-white focus:border-brand-primary focus:ring-4 focus:ring-brand-primary/10 rounded-xl px-5 py-3.5 text-[15px] font-medium text-brand-dark outline-none transition-all appearance-none cursor-pointer">

                                            <option value="" selected disabled>Select a Service</option>
                                            <option value="Search Engine Optimization">Search Engine Optimization</option>
                                            <option value="Social Media Marketing">Social Media Marketing</option>
                                            <option value="Digital Marketing">Digital Marketing</option>
                                            <option value="Meta Ads Services">Meta Ads Services</option>
                                            <option value="Google Ads Services">Google Ads Services</option>


                                        </select>

                                        <i data-lucide="chevron-down"
                                            class="absolute right-4 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400 pointer-events-none"></i>

                                    </div>

                                    <span class="error-subject text-red-500 text-xs"></span>
                                </div>
                            </div>

                            <!-- Message -->
                            <div class="space-y-2">
                                <label class="text-[13px] font-bold text-brand-dark uppercase tracking-wider ml-1">
                                    Your Message *
                                </label>

                                <textarea rows="4" name="message" placeholder="Tell us about your project requirements..."
                                    class="w-full bg-[#F8F9FA] border-2 border-slate-200 focus:bg-white focus:border-brand-primary focus:ring-4 focus:ring-brand-primary/10 rounded-xl px-5 py-3.5 text-[15px] font-medium text-brand-dark outline-none transition-all placeholder:text-slate-400 resize-none"></textarea>

                                <span class="error-message text-red-500 text-xs"></span>
                            </div>

                            <!-- Captcha -->
                            <div class="grid md:grid-cols-2 gap-4">

                                <div class="space-y-2">
                                    <label class="text-[13px] font-bold text-brand-dark uppercase tracking-wider ml-1">
                                        Captcha *
                                    </label>

                                    <input type="number" name="captcha" placeholder="Enter Answer"
                                        class="w-full bg-[#F8F9FA] border-2 border-slate-200 focus:bg-white focus:border-brand-primary focus:ring-4 focus:ring-brand-primary/10 rounded-xl px-5 py-3.5 text-[15px] font-medium text-brand-dark outline-none transition-all placeholder:text-slate-400">

                                    <span class="error-captcha text-red-500 text-xs"></span>
                                </div>

                                <div class="space-y-2">
                                    <label class="text-[13px] font-bold text-brand-dark uppercase tracking-wider ml-1">
                                        Math Question
                                    </label>

                                    <div class="flex items-center gap-2">

                                        <input type="text" id="math-question" readonly
                                            class="w-full bg-[#F8F9FA] border-2 border-slate-200 rounded-xl px-5 py-3.5 text-[15px] font-medium text-black outline-none">

                                        <button type="button" onclick="loadCaptcha()"
                                            class="px-5 py-3.5 rounded-xl bg-red-500 hover:bg-red-600 text-white transition-all shadow-md">
                                            ↻
                                        </button>

                                    </div>
                                </div>

                            </div>

                            <!-- Submit -->
                            <button type="submit"
                                class="w-full py-4 mt-4 text-[16px] font-extrabold text-white bg-gradient-to-r from-brand-primary to-brand-secondary hover:from-[#5b3ce0] hover:to-[#c63cdb] rounded-xl transition-all shadow-[0_10px_25px_rgba(109,74,255,0.3)] hover:shadow-[0_15px_35px_rgba(109,74,255,0.4)] flex justify-center items-center gap-2 transform hover:-translate-y-0.5">

                                Send Message

                                <i data-lucide="send" class="w-5 h-5"></i>
                            </button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. Redesigned Strategy Section (Left Content, Right Sticky Image) -->
    <!-- NOTE: Removed overflow-hidden here so position: sticky can work properly on the right side -->
    <section id="strategy" class="py-24 bg-brand-bg relative">

        <!-- Faint Background Grid -->
        <div class="absolute inset-0 z-0 opacity-[0.03] pointer-events-none"
            style="background-image: radial-gradient(#6D4AFF 1px, transparent 1px); background-size: 32px 32px;"></div>

        <div class="container max-w-[1200px] mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-16 items-start">

                <!-- RIGHT: Sticky Image & Graphics -->
                <div class="lg:col-span-5 relative h-full">
                    <!-- The sticky container -->
                    <div class="lg:sticky lg:top-36 reveal-up delay-200">

                        <!-- Background Glow behind image -->
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-brand-primary to-brand-secondary rounded-full blur-[80px] opacity-20 -z-10">
                        </div>

                        <!-- Premium Image Card -->
                        <div class="bg-white p-3 rounded-[3rem] shadow-soft border border-slate-100 relative group">

                            <!-- Main Image -->
                            <div class="relative">
                                <img src="https://ex-coders.com/php-template/digtek/assets/img/choose-us.png"
                                    alt="Digital Marketing Dashboard"
                                    class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-1000">

                            </div>

                            <!-- Floating Glassmorphism Badge -->
                            <div
                                class="absolute -bottom-8 -left-8 bg-white/90 backdrop-blur-xl p-5 rounded-2xl shadow-hover border border-white/50 animate-float hidden md:flex items-center gap-4 w-max z-20">
                                <div
                                    class="w-12 h-12 rounded-full bg-gradient-to-br from-[#10B981] to-[#059669] flex items-center justify-center text-white shadow-inner">
                                    <i data-lucide="trending-up" class="w-6 h-6"></i>
                                </div>
                                <div>
                                    <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Organic
                                        Growth
                                    </p>
                                    <p class="text-2xl font-black text-brand-dark">+245% <span
                                            class="text-sm font-medium text-brand-gray">YoY</span></p>
                                </div>
                            </div>

                            <!-- Decorative Floating Element -->
                            <div
                                class="absolute -top-6 -right-6 w-20 h-20 bg-brand-secondary rounded-full mix-blend-multiply opacity-50 blur-xl animate-float-delayed pointer-events-none z-20">
                            </div>
                        </div>

                    </div>
                </div>
                <!-- LEFT: Deep Content Area -->
                <div class="lg:col-span-7">

                    <!-- WRAP BACKEND DATA IN "ck-content" -->
                    <div class="ck-content reveal-up">

                        {!! $page->page_content ?? '' !!}

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. FAQ Section -->
    {{-- <section id="faq" class="py-24 bg-white relative border-t border-slate-100 overflow-hidden">
        <div class="container max-w-[900px] mx-auto px-6 relative z-10">

            <div class="text-center mb-16 reveal-up">
                <span
                    class="bg-[#F3F0FF] text-brand-primary font-bold text-[13px] uppercase tracking-[0.15em] px-5 py-2 rounded-full inline-block mb-6 border border-brand-primary/10 shadow-sm">
                    Common Questions
                </span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-[#1F1738] tracking-tight mb-4">Frequently Asked
                    Questions</h2>
                <p class="text-brand-gray text-lg">Everything you need to know about our SEO services.</p>
            </div>

            <div class="space-y-4 reveal-up delay-100">
                <!-- FAQ Item 1 -->
                <div
                    class="faq-item bg-white border border-slate-200 shadow-sm rounded-2xl p-6 md:p-8 cursor-pointer hover:border-brand-primary/30 hover:shadow-soft transition-all duration-300 group active">
                    <div class="flex justify-between items-center gap-4">
                        <h4 class="font-bold text-[#1F1738] text-lg md:text-xl">How long does it take to see SEO results?
                        </h4>
                        <div
                            class="w-10 h-10 rounded-full bg-[#F8F9FA] group-hover:bg-brand-primary group-hover:text-white flex items-center justify-center shrink-0 text-brand-primary faq-icon transition-all duration-300 rotate-45">
                            <i data-lucide="plus" class="w-5 h-5"></i>
                        </div>
                    </div>
                    <div class="faq-content mt-4 text-brand-gray text-[16px] leading-relaxed">
                        <p>SEO is a long-term investment. While technical fixes can show improvements in weeks, significant
                            organic growth and ranking for competitive keywords typically takes 3 to 6 months of consistent
                            strategy implementation.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div
                    class="faq-item bg-white border border-slate-200 shadow-sm rounded-2xl p-6 md:p-8 cursor-pointer hover:border-brand-primary/30 hover:shadow-soft transition-all duration-300 group">
                    <div class="flex justify-between items-center gap-4">
                        <h4 class="font-bold text-[#1F1738] text-lg md:text-xl">Do you guarantee the #1 spot on Google?
                        </h4>
                        <div
                            class="w-10 h-10 rounded-full bg-[#F8F9FA] group-hover:bg-brand-primary group-hover:text-white flex items-center justify-center shrink-0 text-brand-primary faq-icon transition-all duration-300">
                            <i data-lucide="plus" class="w-5 h-5"></i>
                        </div>
                    </div>
                    <div class="faq-content mt-4 text-brand-gray text-[16px] leading-relaxed hidden">
                        <p>No reputable agency can guarantee the #1 spot because Google's algorithms are proprietary.
                            However, we guarantee the execution of a proven, data-driven methodology that consistently
                            generates top-tier rankings.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div
                    class="faq-item bg-white border border-slate-200 shadow-sm rounded-2xl p-6 md:p-8 cursor-pointer hover:border-brand-primary/30 hover:shadow-soft transition-all duration-300 group">
                    <div class="flex justify-between items-center gap-4">
                        <h4 class="font-bold text-[#1F1738] text-lg md:text-xl">What is included in the Free SEO Audit?
                        </h4>
                        <div
                            class="w-10 h-10 rounded-full bg-[#F8F9FA] group-hover:bg-brand-primary group-hover:text-white flex items-center justify-center shrink-0 text-brand-primary faq-icon transition-all duration-300">
                            <i data-lucide="plus" class="w-5 h-5"></i>
                        </div>
                    </div>
                    <div class="faq-content mt-4 text-brand-gray text-[16px] leading-relaxed hidden">
                        <p>Our free audit includes a technical website health check, a review of your current keyword
                            rankings, a backlink profile analysis, and a competitive gap analysis.</p>
                    </div>
                </div>
            </div>

        </div>
    </section> --}}

    <section id="faq" class="py-24 bg-white relative border-t border-slate-100 overflow-hidden">
        <div class="container max-w-[900px] mx-auto px-6 relative z-10">

            <div class="text-center mb-16 reveal-up">
                <span
                    class="bg-[#F3F0FF] text-brand-primary font-bold text-[13px] uppercase tracking-[0.15em] px-5 py-2 rounded-full inline-block mb-6 border border-brand-primary/10 shadow-sm">
                    Common Questions
                </span>

                <h2 class="text-3xl md:text-5xl font-extrabold text-[#1F1738] tracking-tight mb-4">
                    Frequently Asked Questions
                </h2>

                <p class="text-brand-gray text-lg">
                    Everything you need to know about our SEO services.
                </p>
            </div>

            <div class="space-y-4 reveal-up delay-100">

                @php
                    $faqs = json_decode($page->faqs, true);
                @endphp

                @if (isset($page) && !empty($page->faqs) && !empty($faqs))

                    @foreach ($faqs as $faqIndex => $faq)
                        @php
                            $questions = array_map('trim', explode('/ ', $faq['question'] ?? ''));

                            $answers = array_map('trim', explode('/ ', $faq['answer'] ?? ''));
                        @endphp

                        @foreach ($questions as $index => $title)
                            @php
                                $isFirst = $faqIndex == 0 && $index == 0;
                            @endphp

                            <div
                                class="faq-item bg-white border border-slate-200 shadow-sm rounded-2xl p-6 md:p-8 cursor-pointer hover:border-brand-primary/30 hover:shadow-soft transition-all duration-300 group {{ $isFirst ? 'active' : '' }}">

                                <div class="flex justify-between items-center gap-4">

                                    <h4 class="font-bold text-[#1F1738] text-lg md:text-xl">
                                        {{ strip_tags($title) }}
                                    </h4>

                                    <div
                                        class="w-10 h-10 rounded-full bg-[#F8F9FA] group-hover:bg-brand-primary group-hover:text-white flex items-center justify-center shrink-0 text-brand-primary faq-icon transition-all duration-300 {{ $isFirst ? 'rotate-45' : '' }}">
                                        <i data-lucide="plus" class="w-5 h-5"></i>
                                    </div>

                                </div>

                                <div
                                    class="faq-content mt-4 text-brand-gray text-[16px] leading-relaxed {{ $isFirst ? '' : 'hidden' }}">

                                    {!! $answers[$index] ?? '' !!}

                                </div>

                            </div>
                        @endforeach
                    @endforeach
                @else
                    <div class="text-center text-brand-gray">
                        No FAQs available at this time.
                    </div>

                @endif

            </div>

        </div>
    </section>

    <!-- 5. CTA Section (Premium Purple Card style) -->
    <section class="py-24 bg-brand-bg relative overflow-hidden">
        <div class="container max-w-[1200px] mx-auto px-6">

            <div
                class="relative bg-brand-primary rounded-[3rem] p-10 md:p-16 lg:p-20 text-center overflow-hidden shadow-[0_20px_50px_-10px_rgba(109,74,255,0.4)] reveal-up z-10 border border-white/10">

                <!-- Colorful Background Glows -->
                <div
                    class="absolute -top-32 -left-32 w-96 h-96 bg-[#D946EF] rounded-full mix-blend-screen filter blur-[100px] opacity-70 animate-float z-0 pointer-events-none">
                </div>
                <div
                    class="absolute -bottom-32 -right-32 w-96 h-96 bg-[#3B82F6] rounded-full mix-blend-screen filter blur-[100px] opacity-70 animate-float-delayed z-0 pointer-events-none">
                </div>

                <!-- Content -->
                <div class="relative z-10 max-w-3xl mx-auto">
                    <h4 class="text-white/90 font-bold tracking-[0.2em] uppercase text-sm mb-6">
                        LET'S WORK TOGETHER
                    </h4>

                    <h2
                        class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-8 leading-[1.1] tracking-tight">
                        Ready To Dominate Your <br class="hidden md:block" />
                        Market With <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-[#FFD028] to-[#FF6600]">Smart
                            SEO?</span>
                    </h2>

                    <p class="text-white/80 text-lg md:text-[19px] mb-12 leading-relaxed max-w-2xl mx-auto">
                        Get a free, comprehensive audit of your digital presence and a custom strategy roadmap from our
                        elite team of marketing experts.
                    </p>

                    <div class="flex flex-wrap justify-center items-center gap-4">
                        <div class="flex items-center gap-3">
                            <a href="#audit-form"
                                class="px-9 py-4 text-[15px] font-bold text-brand-primary bg-white hover:bg-[#F8F9FA] rounded-full transition-all tracking-wide shadow-lg hover:-translate-y-1">
                                GET A FREE AUDIT
                            </a>
                            <a href="#audit-form"
                                class="w-14 h-14 bg-white hover:bg-[#F8F9FA] text-brand-primary rounded-full flex items-center justify-center transition-all shadow-lg hover:-translate-y-1">
                                <i data-lucide="arrow-up-right" class="w-6 h-6"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        function loadCaptcha() {
            $.get("{{ url('/math-captcha') }}", function(data) {
                $('#math-question').val(data.question);
            });
        }

        $(document).ready(function() {

            loadCaptcha();

            // Remove error while typing
            $('#contact-form input, #contact-form textarea, #contact-form select').on('input change', function() {

                let fieldName = $(this).attr('name');

                $('.error-' + fieldName).text('');
                $(this).removeClass('border-red-500');
            });

            // Submit Form
            $('#contact-form').on('submit', function(e) {

                e.preventDefault();

                let $form = $(this);
                let $btn = $form.find('button[type="submit"]');

                $('.text-red-500').text('');

                let name = $('[name="name"]').val().trim();
                let email = $('[name="email"]').val().trim();
                let phone = $('[name="phone"]').val().trim();
                let subject = $('[name="subject"]').val();
                let message = $('[name="message"]').val().trim();
                let captcha = $('[name="captcha"]').val().trim();

                let isValid = true;

                // Name
                let namePattern = /^[A-Za-z\s]+$/;

                if (name === "") {
                    $('.error-name').text('Name is required');
                    isValid = false;
                } else if (!namePattern.test(name)) {
                    $('.error-name').text('Only letters allowed');
                    isValid = false;
                }

                // Email
                if (!/^\S+@\S+\.\S+$/.test(email)) {
                    $('.error-email').text('Enter valid email');
                    isValid = false;
                }

                // Phone
                if (!/^\d{10}$/.test(phone)) {
                    $('.error-phone').text('Phone must be 10 digits');
                    isValid = false;
                }

                // Subject
                if (!subject) {
                    $('.error-subject').text('Please select service');
                    isValid = false;
                }

                // Message
                if (message.length < 5) {
                    $('.error-message').text('Message must be at least 5 characters');
                    isValid = false;
                }

                if (captcha.trim() === "") {

                    $('.error-captcha').text('Captcha is required');
                    isValid = false;

                } else {

                    $('.error-captcha').text('');

                }

                if (!isValid) return;

                // Button Loading
                $btn.prop('disabled', true).html('Sending...');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ route('enquiry.store') }}",
                    type: "POST",
                    data: $form.serialize(),

                    success: function(response) {

                        Swal.fire({
                            icon: 'success',
                            title: 'Message Sent!',
                            text: 'We will contact you soon.'
                        });

                        $form[0].reset();

                        loadCaptcha();
                    },

                    error: function(xhr) {

                        $('.error-captcha').text('');

                        if (xhr.status === 422) {

                            let errors = xhr.responseJSON.errors;

                            if (errors.name)
                                $('.error-name').text(errors.name[0]);

                            if (errors.email)
                                $('.error-email').text(errors.email[0]);

                            if (errors.phone)
                                $('.error-phone').text(errors.phone[0]);

                            if (errors.subject)
                                $('.error-subject').text(errors.subject[0]);

                            if (errors.message)
                                $('.error-message').text(errors.message[0]);

                            if (errors.captcha) {

                                $('.error-captcha').text(errors.captcha[0]);

                                $('[name="captcha"]').val('');

                            }
                        }

                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Please fix the errors'
                        });

                        loadCaptcha();
                    },

                    complete: function() {

                        $btn.prop('disabled', false).html(`
                        Send Message
                        <i data-lucide="send"
                        class="w-4 h-4 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                    `);

                        lucide.createIcons();
                    }
                });

            });

        });
    </script>
    <script>
        lucide.createIcons();

        // Navbar Scroll Effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                navbar.classList.add('shadow-md', 'bg-white/95');
                navbar.classList.remove('bg-white/80');
            } else {
                navbar.classList.remove('shadow-md', 'bg-white/95');
                navbar.classList.add('bg-white/80');
            }
        });

        // Scroll Reveal Animation
        const revealElements = document.querySelectorAll('.reveal-up');
        const revealOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px"
        };
        const revealOnScroll = new IntersectionObserver(function(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target);
                }
            });
        }, revealOptions);
        revealElements.forEach(el => revealOnScroll.observe(el));

        // FAQ Accordion Logic
        const faqItems = document.querySelectorAll('.faq-item');
        faqItems.forEach(item => {
            item.addEventListener('click', () => {
                const content = item.querySelector('.faq-content');
                const icon = item.querySelector('.faq-icon');
                const isHidden = content.classList.contains('hidden');

                // Close all others
                faqItems.forEach(otherItem => {
                    otherItem.querySelector('.faq-content').classList.add('hidden');
                    const otherIcon = otherItem.querySelector('.faq-icon');
                    otherIcon.classList.remove('rotate-45', 'bg-brand-primary', 'text-white');
                    otherIcon.classList.add('bg-[#F8F9FA]', 'text-brand-primary');
                });

                // Open clicked if it was hidden
                if (isHidden) {
                    content.classList.remove('hidden');
                    icon.classList.add('rotate-45', 'bg-brand-primary', 'text-white');
                    icon.classList.remove('bg-[#F8F9FA]', 'text-brand-primary');
                }
            });
        });
    </script>

@endsection
