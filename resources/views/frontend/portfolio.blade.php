@extends('frontend.layouts.master')
@section('title', 'Our Portfolio')
@section('meta_title', 'Our Portfolio')
@section('meta_description', 'Explore our latest projects and see how we help businesses grow.')
@section('meta_keywords', 'portfolio, projects, case studies')

@section('content')
    <section class="relative pt-40 pb-10 overflow-hidden bg-white border-b border-slate-100">
        <div
            class="absolute top-0 right-0 w-[600px] h-[600px] bg-gradient-to-bl from-brand-secondary/10 to-brand-primary/10 rounded-full blur-[100px] -z-10 animate-blob">
        </div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-gradient-to-tr from-brand-primary/10 to-transparent rounded-full blur-[80px] -z-10 animate-blob"
            style="animation-delay: 2s;"></div>

        <div class="container max-w-[1200px] mx-auto px-6 text-center relative z-10 reveal-up">
            <h1
                class="text-4xl md:text-5xl lg:text-[56px] font-extrabold text-brand-dark mb-6 tracking-tight leading-[1.15]">
                Our <br class="hidden md:block" />
                <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-brand-primary to-brand-secondary">Portfolio</span>
            </h1>

            <div
                class="flex items-center justify-center gap-3 text-[15px] font-bold text-brand-gray bg-[#F8F9FA] w-max mx-auto px-6 py-2.5 rounded-full border border-slate-100 shadow-sm">
                <a href="{{ route('home') }}" class="hover:text-brand-primary transition-colors flex items-center gap-2">
                    <i data-lucide="home" class="w-4 h-4"></i> Home
                </a>
                <i data-lucide="chevron-right" class="w-4 h-4 text-slate-300"></i>
                <span class="text-brand-primary">Our Portfolio</span>
            </div>
        </div>
    </section>
    <section id="projects" class="py-24 bg-white relative">

        <div class="container max-w-[1400px] mx-auto px-6">

            <!-- Heading -->

            <div class="flex flex-col md:flex-row justify-between items-end mb-12">

                <div class="max-w-2xl">

                    <h4 class="text-[#6D4AFF] font-bold tracking-[0.2em] uppercase text-sm mb-4">
                        LATEST PROJECTS
                    </h4>

                    <h2 class="text-4xl md:text-5xl font-bold text-[#1F1738] mb-4 tracking-tight">
                        Our Portfolio
                    </h2>

                </div>

                <!-- Category Buttons -->

                <div class="flex mt-6 md:mt-0 gap-2 overflow-x-auto no-scrollbar items-center">

                    @foreach ($categories as $key => $category)
                        <button
                            class="tab-btn px-6 py-3 rounded-[10px] font-bold text-[15px]
                        transition-all whitespace-nowrap
                        {{ $key == 0 ? 'bg-[#6D4AFF] text-white shadow-md active' : 'text-brand-dark bg-transparent' }}"
                            data-filter="{{ $category->slug }}">

                            {{ $category->name }}

                        </button>
                    @endforeach

                </div>

            </div>

            <!-- Portfolio Grid -->

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 transition-all duration-500">

                @foreach ($portfolios as $key => $portfolio)
                    <div class="project-card group cursor-pointer
                    {{ $portfolio->category->slug != $categories->first()->slug ? 'hidden-state' : '' }}"
                        data-category="{{ $portfolio->category->slug }}"
                        {{ $portfolio->category->slug != $categories->first()->slug ? 'style=display:none;' : '' }}>

                        <div
                            class="group bg-white rounded-[2rem] p-4 shadow-sm hover:shadow-hover border border-slate-100 transition-all duration-500 flex flex-col h-full cursor-pointer">

                            <!-- Image -->

                            <div class="relative h-[300px] rounded-[1.5rem] overflow-hidden mb-5 bg-slate-100">

                                <img src="{{ asset($portfolio->image) }}" alt="{{ $portfolio->title }}"
                                    class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">

                                <div
                                    class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                </div>

                                <!-- Category -->

                                <div class="absolute top-4 left-4">

                                    <span
                                        class="bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-full text-[11px] font-bold text-[#1F1738] uppercase tracking-wider shadow-sm">

                                        {{ $portfolio->category->name }}

                                    </span>

                                </div>

                                <!-- Icon -->

                                <div
                                    class="absolute bottom-4 right-4 w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#6D4AFF] shadow-lg transform translate-y-10 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-out">

                                    <i data-lucide="maximize-2" class="w-5 h-5"></i>

                                </div>

                            </div>

                            <!-- Content -->

                            <div class="px-3 pb-2 flex-grow flex flex-col justify-center">

                                <h3
                                    class="text-[22px] font-bold text-[#1F1738] mb-2 group-hover:text-[#6D4AFF] transition-colors">

                                    {{ $portfolio->title }}

                                </h3>

                                <p class="text-gray-500 text-[15px] leading-relaxed">

                                    {{ \Illuminate\Support\Str::limit($portfolio->description, 100) }}

                                </p>

                            </div>

                        </div>

                    </div>
                @endforeach

            </div>

        </div>

        <!-- LIGHTBOX -->

        <div id="project-lightbox"
            class="fixed inset-0 z-[100] hidden items-center justify-center bg-[#1F1738]/95 backdrop-blur-md opacity-0 transition-opacity duration-300">

            <button id="lightbox-close"
                class="absolute top-6 right-6 w-12 h-12 bg-white/10 hover:bg-[#6D4AFF] rounded-full flex items-center justify-center text-white transition-all z-50">

                <i data-lucide="x" class="w-6 h-6"></i>

            </button>

            <button id="lightbox-prev"
                class="absolute left-4 md:left-10 top-1/2 -translate-y-1/2 w-14 h-14 bg-white/10 hover:bg-[#6D4AFF] rounded-full flex items-center justify-center text-white transition-all z-50">

                <i data-lucide="chevron-left" class="w-8 h-8"></i>

            </button>

            <button id="lightbox-next"
                class="absolute right-4 md:right-10 top-1/2 -translate-y-1/2 w-14 h-14 bg-white/10 hover:bg-[#6D4AFF] rounded-full flex items-center justify-center text-white transition-all z-50">

                <i data-lucide="chevron-right" class="w-8 h-8"></i>

            </button>

            <div id="lightbox-content"
                class="relative max-w-5xl w-full mx-4 flex flex-col items-center transform scale-95 transition-transform duration-500">

                <img id="lightbox-img" src=""
                    class="max-h-[70vh] w-auto max-w-full object-contain rounded-2xl mb-6">

                <div
                    class="text-center bg-white/10 backdrop-blur-xl border border-white/20 p-6 rounded-2xl w-full max-w-3xl">

                    <h3 id="lightbox-title" class="text-2xl md:text-3xl font-extrabold text-white mb-2"></h3>

                    <p id="lightbox-desc" class="text-slate-300 text-[15px] md:text-[16px] leading-relaxed"></p>

                </div>

            </div>

        </div>

    </section>

    <style>
        .project-card {
            transition: opacity .4s ease, transform .4s ease;
        }

        .project-card.hidden-state {
            opacity: 0;
            transform: scale(.95);
        }

        body.lightbox-open {
            overflow: hidden;
        }
    </style>

  
@endsection
