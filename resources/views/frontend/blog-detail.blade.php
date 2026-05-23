@extends('frontend.layouts.master')
@section('title', $blog->meta_title ?? $blog->title)
@section('meta_description', $blog->meta_description ?? 'Discover expert insights and actionable strategies in our latest blog post on digital marketing, SEO, and social media trends to help your business thrive online.')
@section('meta_keywords', $blog->meta_keyword ?? 'digital marketing, seo, social media')
@section('content')

   <style>
    /* ==========================================================================
   CKEditor / Blog Content Premium Styling
   Scope: .ck-content
   ========================================================================== */

/* Base Typography */
.ck-content {
    color: #64647A; /* brand-gray */
    font-size: 17px;
    line-height: 1.85;
    font-family: 'Plus Jakarta Sans', sans-serif;
}

/* Paragraphs */
.ck-content p {
    margin-bottom: 1.75rem;
}

/* Bold / Strong Text */
.ck-content strong, 
.ck-content b {
    color: #1A1A2C; /* brand-dark */
    font-weight: 700;
}

/* Links */
.ck-content a {
    color: #6D4AFF; /* brand-primary */
    font-weight: 600;
    text-decoration: none;
    border-bottom: 2px solid transparent;
    transition: border-color 0.3s ease;
}
.ck-content a:hover {
    border-bottom-color: #6D4AFF;
}

/* =========================================
   Headings 
   ========================================= */

.ck-content h2, 
.ck-content h3, 
.ck-content h4, 
.ck-content h5, 
.ck-content h6 {
    color: #1A1A2C;
    font-weight: 800;
    line-height: 1.3;
    letter-spacing: -0.02em;
    margin-top: 3rem;
    margin-bottom: 1.25rem;
}

/* H2: Main Section Titles */
.ck-content h2 {
    font-size: 28px;
    position: relative;
    padding-bottom: 0.75rem;
}
@media (min-width: 768px) {
    .ck-content h2 { font-size: 34px; }
}
/* Colorful animated underline for H2 */
.ck-content h2::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 4px;
    width: 60px;
    border-radius: 4px;
    background: linear-gradient(90deg, #6D4AFF, #D946EF); /* Primary to Secondary */
}

/* H3: Sub-section Titles */
.ck-content h3 {
    font-size: 22px;
    padding-left: 1rem;
    border-left: 4px solid #FF6600; /* Orange accent */
}
@media (min-width: 768px) {
    .ck-content h3 { font-size: 26px; }
}

/* H4: Smaller highlight titles */
.ck-content h4 {
    font-size: 19px;
    color: #6D4AFF;
}

/* =========================================
   Lists (Unordered & Ordered)
   ========================================= */

.ck-content ul, 
.ck-content ol {
    margin-bottom: 2rem;
    padding-left: 0;
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

/* Unordered Lists with Custom Checkmarks */
.ck-content ul {
    list-style: none;
}
.ck-content ul li {
    position: relative;
    padding-left: 2.25rem;
}
.ck-content ul li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0.25rem;
    width: 1.25rem;
    height: 1.25rem;
    /* Purple Lucide 'check-circle' SVG */
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%236D4AFF' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M22 11.08V12a10 10 0 1 1-5.93-9.14'/%3E%3Cpolyline points='22 4 12 14.01 9 11.01'/%3E%3C/svg%3E");
    background-size: contain;
    background-repeat: no-repeat;
}

/* Ordered Lists with Premium Number Badges */
.ck-content ol {
    list-style: none;
    counter-reset: custom-counter;
}
.ck-content ol li {
    position: relative;
    padding-left: 3rem;
    counter-increment: custom-counter;
}
.ck-content ol li::before {
    content: counter(custom-counter);
    position: absolute;
    left: 0;
    top: 0;
    width: 2rem;
    height: 2rem;
    background-color: #F3F0FF; /* Light purple */
    color: #6D4AFF; /* Deep purple */
    font-weight: 800;
    font-size: 14px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 10px rgba(109, 74, 255, 0.1);
}

/* If a list item starts with a bold tag, make it a block title */
.ck-content li strong:first-child {
    display: block;
    font-size: 18px;
    margin-bottom: 0.25rem;
    color: #1A1A2C;
}

/* =========================================
   Blockquotes / Callout Boxes
   ========================================= */

.ck-content blockquote {
    position: relative;
    margin: 2.5rem 0;
    padding: 2rem 2rem 2rem 4rem;
    background: linear-gradient(to right, #FAFAFF, #F3F0FF);
    border-radius: 0 24px 24px 0;
    border-left: 6px solid #D946EF; /* Pink accent */
    font-size: 19px;
    font-weight: 500;
    color: #1A1A2C;
    box-shadow: 0 10px 30px -10px rgba(217, 70, 239, 0.1);
}
.ck-content blockquote::before {
    content: '"';
    position: absolute;
    left: 1rem;
    top: 0.5rem;
    font-size: 4rem;
    font-family: Georgia, serif;
    color: rgba(217, 70, 239, 0.2);
    line-height: 1;
}
.ck-content blockquote p {
    margin-bottom: 0;
}

/* =========================================
   Images & Media
   ========================================= */

.ck-content img {
    max-width: 100%;
    height: auto;
    border-radius: 1.5rem;
    margin: 3rem auto;
    display: block;
    box-shadow: 0 20px 50px -10px rgba(0, 0, 0, 0.1);
}

/* Tables (if used in backend) */
.ck-content table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 2rem;
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
}
.ck-content th {
    background-color: #1A1A2C;
    color: #ffffff;
    font-weight: 700;
    text-align: left;
    padding: 1rem;
}
.ck-content td {
    padding: 1rem;
    border-bottom: 1px solid #e2e8f0;
    background-color: #ffffff;
}
.ck-content tr:last-child td {
    border-bottom: none;
}
   </style>

    <section class="relative pt-32 pb-16 overflow-hidden bg-white border-b border-slate-100">

        <div
            class="absolute top-0 right-0 w-[500px] h-[500px] bg-gradient-to-bl from-brand-secondary/10 to-brand-primary/10 rounded-full blur-[80px] -z-10 animate-blob pointer-events-none">
        </div>
        <div class="absolute top-1/4 left-1/4 animate-float opacity-30 pointer-events-none -z-10">
            <svg class="w-12 h-12 text-[#FF6600]" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
            </svg>
        </div>

        <div class="container max-w-[1000px] mx-auto px-6 text-center relative z-10 reveal-up">

            <div class="flex items-center justify-center gap-3 mb-6">
                <a href="{{ route('blog') }}"
                    class="text-[13px] font-bold text-slate-400 hover:text-brand-primary transition-colors">Blog</a>
                <i data-lucide="chevron-right" class="w-4 h-4 text-slate-300"></i>
                <span
                    class="bg-[#F3F0FF] text-brand-primary font-bold text-[12px] uppercase tracking-[0.1em] px-4 py-1.5 rounded-full border border-brand-primary/10">
                    {{ $blog->category->name ?? 'Search Engine Optimization' }}
                </span>
            </div>

            <h1
                class="text-3xl md:text-5xl lg:text-[52px] font-extrabold text-brand-dark mb-8 tracking-tight leading-[1.15]">
                {{ $blog->title }}
            </h1>

            <div
                class="flex flex-wrap items-center justify-center gap-6 text-[14px] font-semibold text-brand-gray border-t border-slate-100 pt-6">
                <div class="flex items-center gap-3">
                    <img src="{{ asset($blog->author->image ?? 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80') }}"
                        alt="Author" class="w-10 h-10 rounded-full object-cover shadow-sm">
                    <span class="text-brand-dark">{{ $blog->author->name ?? 'Sarah Jenkins' }}</span>
                </div>
                <div class="w-1.5 h-1.5 rounded-full bg-slate-200 hidden sm:block"></div>
                <div class="flex items-center gap-2">
                    <i data-lucide="calendar" class="w-4 h-4 text-brand-primary"></i> {{ $blog->created_at->format('M d, Y') }}
                </div>
                <div class="w-1.5 h-1.5 rounded-full bg-slate-200 hidden sm:block"></div>
                <div class="flex items-center gap-2">
                    <i data-lucide="clock" class="w-4 h-4 text-brand-secondary"></i> 8 Min Read
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 relative">
        <div class="absolute inset-0 z-0 opacity-[0.02]"
            style="background-image: radial-gradient(#6D4AFF 1px, transparent 1px); background-size: 24px 24px;">
        </div>

        <div class="container max-w-[1200px] mx-auto px-6 relative z-10">

            <div
                class="w-full h-[300px] md:h-[450px] rounded-[2.5rem] overflow-hidden shadow-soft mb-16 reveal-up border border-slate-100">
                <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="w-full h-[300px] md:h-[450px] object-inherit object-center">
            </div>

            <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-start">

                {{-- Main Content --}}
                <div class="lg:col-span-8">

                    <div class="prose-custom bg-white p-8 md:p-12 rounded-[2rem] shadow-sm border border-slate-100">

                        {{-- Blog Description --}}
                        <div class="ck-content">
                           {!! $blog->description !!}
                        </div>
                        

                        {{-- Tags + Share --}}
                        <div
                            class="mt-12 pt-8 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-6">

                            <div class="flex items-center gap-2 flex-wrap">
                                <span class="text-sm font-bold text-brand-dark">Tags:</span>

                                @if ($blog->meta_keyword)
                                    @foreach (explode(',', $blog->meta_keyword) as $tag)
                                        <span
                                            class="px-3 py-1 bg-[#F8F9FA] border border-slate-200 rounded-lg text-[13px] font-semibold text-brand-gray">
                                            {{ trim($tag) }}
                                        </span>
                                    @endforeach
                                @endif
                            </div>

                            {{-- <div class="flex items-center gap-3">
                                <span class="text-sm font-bold text-brand-dark">Share:</span>

                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::url()) }}"
                                    target="_blank"
                                    class="w-9 h-9 rounded-full bg-[#EBF4FF] text-[#0A7EFA] flex items-center justify-center hover:bg-[#0A7EFA] hover:text-white transition-colors">
                                    <i data-lucide="twitter" class="w-4 h-4"></i>
                                </a>

                                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(Request::url()) }}"
                                    target="_blank"
                                    class="w-9 h-9 rounded-full bg-[#EBF4FF] text-[#0A7EFA] flex items-center justify-center hover:bg-[#0A7EFA] hover:text-white transition-colors">
                                    <i data-lucide="linkedin" class="w-4 h-4"></i>
                                </a>

                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}"
                                    target="_blank"
                                    class="w-9 h-9 rounded-full bg-[#EBF4FF] text-[#0A7EFA] flex items-center justify-center hover:bg-[#0A7EFA] hover:text-white transition-colors">
                                    <i data-lucide="facebook" class="w-4 h-4"></i>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="mt-10 bg-white p-8 rounded-[2rem] shadow-sm border border-slate-100 flex flex-col sm:flex-row items-center sm:items-start gap-6 reveal-up">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Sarah Jenkins" class="w-24 h-24 rounded-2xl object-cover shadow-md shrink-0">
                        <div class="text-center sm:text-left">
                            <h4 class="text-xl font-bold text-brand-dark mb-1">Sarah Jenkins</h4>
                            <p class="text-[13px] font-bold text-brand-primary uppercase tracking-wider mb-3">Head of SEO Strategy</p>
                            <p class="text-brand-gray text-[15px] leading-relaxed mb-4">
                                Sarah has over 8 years of experience analyzing search algorithms and building high-growth organic strategies for enterprise SaaS companies.
                            </p>
                            {{-- <a href="#" class="inline-flex items-center gap-2 text-sm font-bold text-brand-dark hover:text-brand-primary transition-colors">
                                View all posts <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </a> --}}
                        </div>
                    </div>

                </div>

                {{-- Sidebar --}}
                <div class="lg:col-span-4 space-y-8 sticky top-28 reveal-up delay-200">

                    {{-- Popular Articles --}}
                    <div class="bg-white p-8 rounded-[2rem] shadow-soft border border-slate-100">

                        <h3 class="text-lg font-extrabold text-brand-dark mb-6">
                            Popular Articles
                        </h3>

                        <div class="space-y-5">

                            @foreach ($popularBlogs as $item)
                                <a href="{{ route('blog.detail', $item->slug) }}" class="flex items-center gap-4 group">

                                    <img src="{{ asset($item->image) }}" alt="{{ $item->title }}"
                                        class="w-20 h-20 rounded-xl object-cover shadow-sm group-hover:opacity-80 transition-opacity">

                                    <div>

                                        <p class="text-[11px] font-bold text-brand-primary uppercase tracking-wider mb-1">
                                            Blog
                                        </p>

                                        <h4
                                            class="text-[15px] font-bold text-brand-dark group-hover:text-brand-primary transition-colors leading-tight line-clamp-2">

                                            {{ $item->title }}

                                        </h4>

                                    </div>

                                </a>
                            @endforeach

                        </div>
                    </div>

                    {{-- Newsletter --}}
                    <div class="bg-brand-dark rounded-[2rem] p-8 relative overflow-hidden shadow-hover group">

                        <div
                            class="absolute -top-10 -right-10 w-32 h-32 bg-brand-secondary rounded-full mix-blend-screen filter blur-[40px] opacity-60 pointer-events-none">
                        </div>

                        <div
                            class="absolute -bottom-10 -left-10 w-32 h-32 bg-brand-primary rounded-full mix-blend-screen filter blur-[40px] opacity-60 pointer-events-none">
                        </div>

                        <div class="relative z-10 text-center">

                            <div
                                class="w-14 h-14 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center text-white mx-auto mb-5 border border-white/20">
                                <i data-lucide="mail-open" class="w-6 h-6"></i>
                            </div>

                            <h3 class="text-xl font-bold text-white mb-2">
                                Enquiery Now
                            </h3>

                            <p class="text-slate-300 text-[14px] mb-6 leading-relaxed">
                                Get exclusive SEO tips and digital marketing strategies delivered to your inbox.
                            </p>

                            <form> 
                                <a href="{{ route('contact') }}"
                                    class="w-full p-3 bg-brand-primary hover:bg-[#5b3ce0] text-white font-bold rounded-xl transition-all shadow-md transform hover:-translate-y-0.5">

                                    Get Starded

                                  </a>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
           
        </div>
    </section>



    {{-- Related Blogs --}}
    <section class="py-20 bg-white border-t border-slate-100">

        <div class="container max-w-[1200px] mx-auto px-6">

            <div class="flex justify-between items-end mb-10 reveal-up">

                <h2 class="text-3xl font-extrabold text-brand-dark tracking-tight">
                    Related Articles
                </h2>

                <a href="{{ route('blog') }}"
                    class="hidden md:inline-flex items-center gap-2 text-[14px] font-bold text-brand-primary hover:text-brand-secondary transition-colors">

                    View All

                    <i data-lucide="arrow-right" class="w-4 h-4"></i>

                </a>

            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                @foreach ($relatedBlogs as $item)
                    <article
                        class="bg-white p-3 rounded-[2rem] shadow-soft hover:shadow-hover border border-slate-100 transition-all duration-500 group flex flex-col">

                        <a href="{{ route('blog.detail', $item->slug) }}">

                            <div class="relative mb-5">

                                <div class="h-[200px] rounded-[1.5rem] overflow-hidden bg-slate-100 relative">

                                    <img src="{{ asset($item->image) }}" alt="{{ $item->title }}"
                                        class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">

                                </div>

                                <div
                                    class="absolute right-4 -bottom-4 w-10 h-10 bg-brand-dark group-hover:bg-brand-primary text-white rounded-xl shadow-lg flex items-center justify-center transition-all duration-300 z-10 group-hover:-translate-y-1">

                                    <i data-lucide="arrow-right"
                                        class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"></i>

                                </div>

                            </div>

                            <div class="px-4 pb-4 flex-grow flex flex-col">

                                <div class="flex items-center gap-2 text-slate-400 text-[12px] font-semibold mb-2">

                                    <i data-lucide="calendar" class="w-3.5 h-3.5"></i>

                                    {{ $item->created_at->format('M d, Y') }}

                                </div>

                                <h3
                                    class="text-[18px] font-extrabold text-brand-dark leading-snug group-hover:text-brand-primary transition-colors line-clamp-2">

                                    {{ $item->title }}

                                </h3>

                            </div>

                        </a>

                    </article>
                @endforeach

            </div>

        </div>

    </section>

    <script>
        lucide.createIcons();

        const revealElements = document.querySelectorAll('.reveal-up');
        const revealOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -20px 0px"
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
    </script>
@endsection
