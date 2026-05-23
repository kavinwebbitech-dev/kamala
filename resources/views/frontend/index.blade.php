@extends('frontend.layouts.master')
@section('title', 'No.1 Digital Marketing and SEO Company in Coimbatore')
@section('content')

    <div>

        <!-- 1. Hero Section (100% matched to reference styling, right side form) -->
        <div class="pt-24 px-4 lg:px-8 bg-white">
            <section id="home"
                class="relative py-20 lg:py-28 bg-gradient-to-br from-[#F8F9FE] via-[#F6F7FD] to-[#FDF4FB] overflow-hidden flex items-center z-10 rounded-[2.5rem] border border-slate-100/50 shadow-sm">

                <!-- Subtle Radial Gradients from Reference -->
                <div
                    class="absolute top-[-20%] left-[-10%] w-[600px] h-[600px] bg-brand-primary/5 rounded-full blur-[100px] pointer-events-none">
                </div>
                <div
                    class="absolute bottom-[-10%] right-[10%] w-[600px] h-[600px] bg-brand-secondary/5 rounded-full blur-[100px] pointer-events-none">
                </div>

                <!-- Faint Background Line Graphic (Mimicking the reference's faint line graph) -->
                <svg class="absolute top-[30%] left-0 w-full h-[300px] pointer-events-none opacity-40 z-0"
                    preserveAspectRatio="none" viewBox="0 0 1000 300" fill="none">
                    <path d="M-50 250 L200 250 L350 150 L550 220 L750 80 L1050 50" stroke="#E2E8F0" stroke-width="2"
                        stroke-linejoin="round" />
                </svg>

                <div class="container max-w-[1400px] mx-auto px-6 relative z-10">
                    <div class="grid lg:grid-cols-12 gap-12 lg:gap-2 items-center">

                        <!-- Left: Hero Content (Matched exactly to reference) -->
                        <div class="lg:col-span-7">
                            <!-- Subtitle -->
                            <h4
                                class="text-brand-primary font-bold tracking-[0.2em] uppercase text-sm mb-6 flex items-center gap-4">
                                GO FOR ADVERTISING
                            </h4>

                            <!-- Main Headline -->
                            <h1
                                class="text-[3.5rem] lg:text-[4.5rem] font-bold text-brand-dark leading-[1.1] mb-6 tracking-tight">
                                Achieve <span class="text-gradient-purple-pink">Top Search</span> <br />
                                Rankings With Our <br />
                                SEO Services
                            </h1>

                            <!-- Paragraph -->
                            <p class="text-lg text-brand-gray mb-10 max-w-xl leading-relaxed">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised.
                            </p>

                            <!-- Buttons (Matched exactly to reference) -->
                            <div class="flex flex-wrap items-center gap-6">
                                <div class="flex items-center group">
                                    <a href="#services"
                                        class="px-8 py-4 text-sm font-bold text-white bg-brand-primary group-hover:bg-[#5b3ce0] rounded-full transition-all tracking-wide">
                                        EXPLORE MORE
                                    </a>
                                    <a href="#services"
                                        class="w-14 h-14 bg-brand-primary group-hover:bg-[#5b3ce0] text-white rounded-full flex items-center justify-center transition-all">
                                        <i data-lucide="arrow-up-right" class="w-6 h-6"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Right: Premium Lead Capture Form (Replaced Illustration as requested) -->
                        <div class="lg:col-span-5 relative mt-12 lg:mt-0 w-full">

                            <!-- Floating abstract decoration behind form -->
                            <div
                                class="absolute -top-10 -right-10 w-32 h-32 bg-gradient-to-br from-brand-primary/20 to-brand-secondary/20 rounded-full blur-[40px]">
                            </div>

                            <img src="https://ex-coders.com/php-template/digtek/assets/img/hero/hero-image-3.png"
                                alt="">

                            <!-- Floating floating badge -->
                            <div
                                class="absolute -bottom-6 -left-6 bg-white p-4 rounded-2xl shadow-floating border border-slate-100 flex items-center gap-3 animate-float z-20">
                                <div
                                    class="w-10 h-10 rounded-full bg-[#F3F0FF] flex items-center justify-center text-brand-primary">
                                    <i data-lucide="trending-up" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <div class="text-[11px] font-bold text-slate-400 uppercase">Avg Traffic Increase</div>
                                    <div class="text-sm font-bold text-brand-dark">+145.2%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <!-- 2. About Section (Clean White) -->
        <section id="about" class="py-24 bg-white relative">
            <div class="container max-w-[1200px] mx-auto px-6">
                <div class="grid lg:grid-cols-2 gap-16 items-center">

                    <!-- Left: Photography Collage -->
                    <div class="relative reveal-up">
                        <div class="relative z-10">
                            <img src="https://ex-coders.com/php-template/digtek/assets/img/choose-us.png" alt="Working"
                                class="w-full">
                        </div>
                        <!-- decorative dots -->
                        <div
                            class="absolute -left-8 -bottom-8 w-32 h-32 bg-[radial-gradient(#6D4AFF_2px,transparent_2px)] [background-size:16px_16px] opacity-20">
                        </div>
                    </div>

                    <!-- Right: Content -->
                    <div class="reveal-up delay-200">
                        <h4 class="text-brand-primary font-bold tracking-[0.2em] uppercase text-sm mb-4">
                            ABOUT OUR AGENCY
                        </h4>
                        <h2 class="text-4xl md:text-5xl font-bold text-brand-dark mb-6 leading-[1.2] tracking-tight">
                            We are a passionate team of <span class="text-brand-primary">digital experts.</span>
                        </h2>
                        <p class="text-brand-gray text-lg mb-8 leading-relaxed">
                            Kamala Technologies brings together elite technical engineering with robust digital marketing.
                            We focus on creating ecosystems that don't just look good, but perform exceptionally well in
                            search algorithms and user conversions.
                        </p>

                        <div class="space-y-6 mb-10">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-[#F3F0FF] flex items-center justify-center text-brand-primary shrink-0">
                                    <i data-lucide="check" class="w-6 h-6"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-brand-dark text-xl mb-1">Data-Driven Strategies</h4>
                                    <p class="text-brand-gray text-sm leading-relaxed">Every decision is backed by
                                        analytics, ensuring your marketing budget generates maximum ROI.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-[#FDF0F9] flex items-center justify-center text-brand-secondary shrink-0">
                                    <i data-lucide="check" class="w-6 h-6"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-brand-dark text-xl mb-1">Elite Technical Execution</h4>
                                    <p class="text-brand-gray text-sm leading-relaxed">Our roots as a Tech Institute mean
                                        our code, platforms, and SEO architectures are flawless.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <script src="https://unpkg.com/lucide@latest"></script>

        <style>
            /* Custom animation for background blobs */
            @keyframes blob-float {

                0%,
                100% {
                    transform: translate(0, 0) scale(1);
                }

                50% {
                    transform: translate(30px, -50px) scale(1.1);
                }
            }

            .animate-blob {
                animation: blob-float 15s infinite alternate;
            }

            .animation-delay-2000 {
                animation-delay: 2s;
            }
        </style>

        <section id="services" class="py-24 pb-10 bg-[#FAFAFF] relative overflow-hidden z-10">
            <div
                class="absolute top-1/4 -left-32 w-96 h-96 bg-gradient-to-br from-[#6D4AFF]/10 to-[#D946EF]/10 rounded-full blur-3xl animate-blob -z-10">
            </div>
            <div
                class="absolute bottom-1/4 -right-32 w-96 h-96 bg-gradient-to-br from-[#3B82F6]/10 to-[#D946EF]/10 rounded-full blur-3xl animate-blob animation-delay-2000 -z-10">
            </div>

            <div class="container max-w-[1400px] mx-auto px-6 relative">

                <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-14 gap-6">
                    <div class="max-w-full">
                        <h4 class="text-brand-primary font-bold tracking-[0.2em] uppercase text-sm mb-4">
                            Our Services
                        </h4>
                        <h2 class="text-4xl md:text-[50px] font-bold text-[#1F1738] leading-[1.1] tracking-tighter">
                            Integrate <span
                                class="bg-clip-text text-transparent bg-gradient-to-r from-[#6D4AFF] to-[#D946EF]">Smart
                                SEO</span>
                            To Scale Your Business
                        </h2>
                    </div>
                    <div class="flex items-center gap-3 shrink-0">
                        <a href="#services"
                            class="px-8 py-4 text-[15px] font-bold text-white bg-gradient-to-r from-[#6D4AFF] to-[#5b3ce0] rounded-full transition-all tracking-wide shadow-lg shadow-[#6D4AFF]/30 hover:shadow-xl hover:shadow-[#6D4AFF]/40 hover:-translate-y-0.5 relative overflow-hidden group">
                            <span class="relative z-10">EXPLORE ALL SERVICES</span>
                            <span
                                class="absolute inset-0 bg-gradient-to-r from-[#D946EF] to-[#6D4AFF] opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        </a>
                    </div>
                </div>

                <div class="flex flex-wrap justify-center gap-8">

                    <div
                        class="group w-full md:w-[calc(50%-1rem)] lg:w-[calc(33.333%-1.35rem)] bg-white rounded-[2rem] p-3 shadow-soft hover:shadow-2xl transition-all duration-500 border border-slate-100 hover:border-transparent relative overflow-hidden">


                        <div
                            class="relative bg-white rounded-[1.8rem] p-8 lg:p-10 h-full flex flex-col items-start text-left">
                            <div class="h-40 w-full mb-8 flex items-center justify-center relative">
                                <div
                                    class="absolute inset-0 bg-[#F3F0FF] rounded-full scale-90 group-hover:scale-100 group-hover:bg-[#E0E7FF]/50 transition-all duration-500">
                                </div>
                                <img src="https://ex-coders.com/php-template/digtek/assets/img/service/01.png"
                                    alt="SEO"
                                    class="relative h-full object-contain mix-blend-multiply transform group-hover:scale-110 group-hover:-rotate-3 transition-transform duration-500" />
                            </div>

                            <h3 class="text-2xl font-bold text-[#1F1738] mb-4 leading-snug tracking-tight">
                                Search Engine Optimization
                            </h3>

                            <p class="text-[#6B7280] text-[16px] leading-relaxed mb-10 flex-grow">
                                Collaboratively formulate principle capital doing progressively evolve user-centric
                                patterns.
                            </p>

                            <a href="{{ route('search.engine') }}"
                                class="w-full flex justify-between items-center group/btn py-3 px-6 bg-[#F8F9FA] rounded-xl hover:bg-gradient-to-r hover:from-[#6D4AFF] hover:to-[#5b3ce0] transition-all duration-300">
                                <span
                                    class="text-[15px] font-bold text-[#64647A] group-hover/btn:text-white transition-colors">Read
                                    Details</span>
                                <div
                                    class="w-9 h-9 bg-white text-[#6D4AFF] rounded-full flex items-center justify-center shadow-md transform group-hover/btn:rotate-45 transition-transform">
                                    <i data-lucide="arrow-right" class="w-5 h-5"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div
                        class="group w-full md:w-[calc(50%-1rem)] lg:w-[calc(33.333%-1.35rem)] bg-white rounded-[2rem] p-3 shadow-soft hover:shadow-2xl transition-all duration-500 border border-slate-100 hover:border-transparent relative overflow-hidden">

                        <div
                            class="relative bg-white rounded-[1.8rem] p-8 lg:p-10 h-full flex flex-col items-start text-left">
                            <div class="h-40 w-full mb-8 flex items-center justify-center relative">
                                <div
                                    class="absolute inset-0 bg-[#FDF0F9] rounded-full scale-90 group-hover:scale-100 transition-all duration-500">
                                </div>
                                <img src="https://ex-coders.com/php-template/digtek/assets/img/service/02.png"
                                    alt="Social Media"
                                    class="relative h-full object-contain mix-blend-multiply transform group-hover:scale-110 group-hover:-rotate-3 transition-transform duration-500" />
                            </div>
                            <h3 class="text-2xl font-bold text-[#1F1738] mb-4 leading-snug tracking-tight">
                                Social Media Marketing
                            </h3>
                            <p class="text-[#6B7280] text-[16px] leading-relaxed mb-10 flex-grow">
                                Formulate principle capital doing progressively evolve user via distinct social channels.
                            </p>
                            <a href="{{ route('social.media.marketing') }}"
                                class="w-full flex justify-between items-center group/btn py-3 px-6 bg-[#F8F9FA] rounded-xl hover:bg-gradient-to-r hover:from-[#6D4AFF] hover:to-[#5b3ce0] transition-all duration-300">
                                <span
                                    class="text-[15px] font-bold text-[#64647A] group-hover/btn:text-white transition-colors">Read
                                    Details</span>
                                <div
                                    class="w-9 h-9 bg-white text-[#6D4AFF] rounded-full flex items-center justify-center shadow-md transform group-hover/btn:rotate-45 transition-transform">
                                    <i data-lucide="arrow-right" class="w-5 h-5"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div
                        class="group w-full md:w-[calc(50%-1rem)] lg:w-[calc(33.333%-1.35rem)] bg-white rounded-[2rem] p-3 shadow-soft hover:shadow-2xl transition-all duration-500 border border-slate-100 hover:border-transparent relative overflow-hidden">

                        <div
                            class="relative bg-white rounded-[1.8rem] p-8 lg:p-10 h-full flex flex-col items-start text-left">
                            <div class="h-40 w-full mb-8 flex items-center justify-center relative">
                                <div
                                    class="absolute inset-0 bg-[#E0F2FE] rounded-full scale-90 group-hover:scale-100 transition-all duration-500">
                                </div>
                                <img src="https://ex-coders.com/php-template/digtek/assets/img/service/03.png"
                                    alt="Digital Marketing"
                                    class="relative h-full object-contain mix-blend-multiply transform group-hover:scale-110 group-hover:-rotate-3 transition-transform duration-500" />
                            </div>
                            <h3 class="text-2xl font-bold text-[#1F1738] mb-4 leading-snug tracking-tight">
                                Digital Marketing
                            </h3>
                            <p class="text-[#6B7280] text-[16px] leading-relaxed mb-10 flex-grow">
                                Broad digital strategies encompassing multi-channel approaches for maximum visibility.
                            </p>
                            <a href="{{ route('digital.marketing') }}"
                                class="w-full flex justify-between items-center group/btn py-3 px-6 bg-[#F8F9FA] rounded-xl hover:bg-gradient-to-r hover:from-[#6D4AFF] hover:to-[#5b3ce0] transition-all duration-300">
                                <span
                                    class="text-[15px] font-bold text-[#64647A] group-hover/btn:text-white transition-colors">Read
                                    Details</span>
                                <div
                                    class="w-9 h-9 bg-white text-[#6D4AFF] rounded-full flex items-center justify-center shadow-md transform group-hover/btn:rotate-45 transition-transform">
                                    <i data-lucide="arrow-right" class="w-5 h-5"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div
                        class="group w-full md:w-[calc(50%-1rem)] bg-white rounded-[2rem] p-3 shadow-soft hover:shadow-2xl transition-all duration-500 border border-slate-100 hover:border-transparent relative overflow-hidden">

                        <div
                            class="relative bg-white rounded-[1.8rem] p-8 lg:p-10 h-full flex flex-col sm:flex-row items-center sm:items-start text-center sm:text-left gap-8">
                            <div class="h-full w-32 shrink-0 flex items-center justify-center relative">
                                <div
                                    class="absolute inset-0 bg-[#FFFBEB] rounded-full group-hover:scale-110 transition-all duration-500">
                                </div>
                                <img src="https://ex-coders.com/php-template/digtek/assets/img/service/03.png"
                                    alt="Google Ads"
                                    class="relative h-24 object-contain mix-blend-multiply group-hover:rotate-12 transition-transform" />
                            </div>
                            <div class="flex-grow">
                                <h3 class="text-2xl font-bold text-[#1F1738] mb-3 tracking-tight">Google Ads Services</h3>
                                <p class="text-[#6B7280] text-[16px] leading-relaxed mb-6">Targeted advertising campaigns
                                    that place your brand directly in front of active searchers.</p>
                                <a href="{{ route('google.ads.services') }}"
                                    class="w-full flex justify-between items-center group/btn py-3 px-6 bg-[#F8F9FA] rounded-xl hover:bg-gradient-to-r hover:from-[#6D4AFF] hover:to-[#5b3ce0] transition-all duration-300">
                                    <span
                                        class="text-[15px] font-bold text-[#64647A] group-hover/btn:text-white transition-colors">Read
                                        Details</span>
                                    <div
                                        class="w-9 h-9 bg-white text-[#6D4AFF] rounded-full flex items-center justify-center shadow-md transform group-hover/btn:rotate-45 transition-transform">
                                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div
                        class="group w-full md:w-[calc(50%-1rem)] bg-white rounded-[2rem] p-3 shadow-soft hover:shadow-2xl transition-all duration-500 border border-slate-100 hover:border-transparent relative overflow-hidden">

                        <div
                            class="relative bg-white rounded-[1.8rem] p-8 lg:p-10 h-full flex flex-col sm:flex-row items-center sm:items-start text-center sm:text-left gap-8">
                            <div class="h-full w-32 shrink-0 flex items-center justify-center relative">
                                <div
                                    class="absolute inset-0 bg-[#ECFDF5] rounded-full group-hover:scale-110 transition-all duration-500">
                                </div>
                                <img src="https://ex-coders.com/php-template/digtek/assets/img/service/03.png"
                                    alt="Meta Ads"
                                    class="relative h-24 object-contain mix-blend-multiply group-hover:rotate-12 transition-transform" />
                            </div>
                            <div class="flex-grow">
                                <h3 class="text-2xl font-bold text-[#1F1738] mb-3 tracking-tight">Meta Ads Services</h3>
                                <p class="text-[#6B7280] text-[16px] leading-relaxed mb-6">Leverage Facebook and
                                    Instagram's powerful targeting to reach precisely defined audiences.</p>
                                <a href="{{ route('meta.services') }}"
                                    class="w-full flex justify-between items-center group/btn py-3 px-6 bg-[#F8F9FA] rounded-xl hover:bg-gradient-to-r hover:from-[#6D4AFF] hover:to-[#5b3ce0] transition-all duration-300">
                                    <span
                                        class="text-[15px] font-bold text-[#64647A] group-hover/btn:text-white transition-colors">Read
                                        Details</span>
                                    <div
                                        class="w-9 h-9 bg-white text-[#6D4AFF] rounded-full flex items-center justify-center shadow-md transform group-hover/btn:rotate-45 transition-transform">
                                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="relative w-full h-[300px] flex items-center justify-center overflow-hidden bg-white">

            <div
                class="absolute w-[110%] h-[75px] bg-[#6D4AFF] rotate-[-2.5deg] flex items-center z-0 shadow-lg scale-105">
                <div class="flex animate-marquee-right whitespace-nowrap w-max">

                    <div class="flex shrink-0 items-center">
                        <span class="text-[28px] font-black text-white tracking-wide ml-6">THE BEST SOLUTION</span>
                        <svg class="w-7 h-7 text-[#FF6600] mx-6 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                        </svg>
                        <span class="text-[28px] font-black text-white tracking-wide">THE BEST SOLUTION</span>
                        <svg class="w-7 h-7 text-[#FF6600] mx-6 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                        </svg>
                        <span class="text-[28px] font-black text-white tracking-wide">THE BEST SOLUTION</span>
                        <svg class="w-7 h-7 text-[#FF6600] mx-6 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                        </svg>
                        <span class="text-[28px] font-black text-white tracking-wide">THE BEST SOLUTION</span>
                        <svg class="w-7 h-7 text-[#FF6600] mx-6 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                        </svg>
                        <span class="text-[28px] font-black text-white tracking-wide">THE BEST SOLUTION</span>
                        <svg class="w-7 h-7 text-[#FF6600] mx-6 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                        </svg>
                    </div>

                    <div class="flex shrink-0 items-center">
                        <span class="text-[28px] font-black text-white tracking-wide ml-6">THE BEST SOLUTION</span>
                        <svg class="w-7 h-7 text-[#FF6600] mx-6 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                        </svg>
                        <span class="text-[28px] font-black text-white tracking-wide">THE BEST SOLUTION</span>
                        <svg class="w-7 h-7 text-[#FF6600] mx-6 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                        </svg>
                        <span class="text-[28px] font-black text-white tracking-wide">THE BEST SOLUTION</span>
                        <svg class="w-7 h-7 text-[#FF6600] mx-6 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                        </svg>
                        <span class="text-[28px] font-black text-white tracking-wide">THE BEST SOLUTION</span>
                        <svg class="w-7 h-7 text-[#FF6600] mx-6 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                        </svg>
                        <span class="text-[28px] font-black text-white tracking-wide">THE BEST SOLUTION</span>
                        <svg class="w-7 h-7 text-[#FF6600] mx-6 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                        </svg>
                    </div>

                </div>
            </div>

            <div
                class="absolute w-[110%] h-[75px] bg-[#110A1F] rotate-[2.5deg] flex items-center z-10 shadow-2xl scale-105">
                <div class="flex animate-marquee-left whitespace-nowrap w-max">

                    <div class="flex shrink-0 items-center">
                        <span class="text-[28px] font-black text-white tracking-wide ml-6">THE BEST SOLUTION</span>
                        <svg class="w-7 h-7 text-[#FF6600] mx-6 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                        </svg>
                        <span class="text-[28px] font-black text-white tracking-wide">THE BEST SOLUTION</span>
                        <svg class="w-7 h-7 text-[#FF6600] mx-6 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                        </svg>
                        <span class="text-[28px] font-black text-white tracking-wide">THE BEST SOLUTION</span>
                        <svg class="w-7 h-7 text-[#FF6600] mx-6 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                        </svg>
                        <span class="text-[28px] font-black text-white tracking-wide">THE BEST SOLUTION</span>
                        <svg class="w-7 h-7 text-[#FF6600] mx-6 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                        </svg>
                        <span class="text-[28px] font-black text-white tracking-wide">THE BEST SOLUTION</span>
                        <svg class="w-7 h-7 text-[#FF6600] mx-6 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                        </svg>
                    </div>

                    <div class="flex shrink-0 items-center">
                        <span class="text-[28px] font-black text-white tracking-wide ml-6">THE BEST SOLUTION</span>
                        <svg class="w-7 h-7 text-[#FF6600] mx-6 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                        </svg>
                        <span class="text-[28px] font-black text-white tracking-wide">THE BEST SOLUTION</span>
                        <svg class="w-7 h-7 text-[#FF6600] mx-6 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                        </svg>
                        <span class="text-[28px] font-black text-white tracking-wide">THE BEST SOLUTION</span>
                        <svg class="w-7 h-7 text-[#FF6600] mx-6 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                        </svg>
                        <span class="text-[28px] font-black text-white tracking-wide">THE BEST SOLUTION</span>
                        <svg class="w-7 h-7 text-[#FF6600] mx-6 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                        </svg>
                        <span class="text-[28px] font-black text-white tracking-wide">THE BEST SOLUTION</span>
                        <svg class="w-7 h-7 text-[#FF6600] mx-6 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                        </svg>
                    </div>

                </div>
            </div>

        </section>

        <script>
            lucide.createIcons();
        </script>

        <section id="why-choose-us" class="py-24 pt-0 bg-white relative overflow-hidden">
            <div class="container max-w-[1400px] mx-auto px-6">
                <div class="grid lg:grid-cols-2 gap-16 lg:gap-20 items-center">

                    <div class="relative w-full lg:mx-0">

                        <div
                            class="absolute inset-0 bg-gradient-to-br from-[#6D4AFF] to-[#432CBA] transform -rotate-6 rounded-[3rem] rounded-tr-[8rem] rounded-bl-[8rem] scale-105 -z-10 opacity-90">
                        </div>

                        <div class="relative w-full h-full ">
                            <img src="https://unifato.com/seox/assets/img/about/about8-image.png" alt="Marketing Expert"
                                class="w-full h-full object-cover">
                        </div>

                        <div
                            class="absolute -right-8 bottom-16 bg-white p-6 rounded-2xl shadow-floating w-48 animate-[float_6s_ease-in-out_infinite]">
                            <h4 class="text-[#1F1738] font-bold text-sm mb-4">Sales Stats</h4>
                            <div class="w-20 h-20 rounded-full mx-auto mb-5 relative"
                                style="background: conic-gradient(#FFD028 0% 25%, #6D4AFF 25% 100%);">
                                <div
                                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-6 h-6 bg-white rounded-full">
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="h-2 w-full bg-slate-100 rounded-full">
                                    <div class="h-full bg-[#6D4AFF] w-[75%] rounded-full"></div>
                                </div>
                                <div class="h-2 w-full bg-slate-100 rounded-full">
                                    <div class="h-full bg-[#FFD028] w-[40%] rounded-full"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative">
                        <h4 class="text-brand-primary font-bold tracking-[0.2em] uppercase text-sm mb-4">
                            Why Choose Us
                        </h4>
                        <h2 class="text-4xl md:text-5xl font-bold text-brand-dark mb-6 leading-[1.2] tracking-tight">
                            We are a passionate team of <span class="text-brand-primary">digital experts.</span>
                        </h2>
                        <p class="text-[#6B7280] text-[16px] leading-relaxed mb-10 max-w-[500px]">
                            At our core, we are a results-driven SEO and digital marketing agency committed to helping
                            businesses grow online. With a team of skilled strategists, designers, and marketers, we craft
                            tailored solutions that boost visibility.
                        </p>

                        <div class="grid sm:grid-cols-2 gap-y-5 gap-x-6 mb-10">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-5 h-5 rounded-full bg-[#6D4AFF] flex items-center justify-center text-white shrink-0">
                                    <i data-lucide="check" class="w-3 h-3" stroke-width="3"></i>
                                </div>
                                <span class="text-[#6B7280] font-medium text-[15px]">Smart Strategy</span>
                            </div>

                            <div class="flex items-center gap-3">
                                <div
                                    class="w-5 h-5 rounded-full bg-[#6D4AFF] flex items-center justify-center text-white shrink-0">
                                    <i data-lucide="check" class="w-3 h-3" stroke-width="3"></i>
                                </div>
                                <span class="text-[#6B7280] font-medium text-[15px]">On-Time Delivery</span>
                            </div>

                            <div class="flex items-center gap-3">
                                <div
                                    class="w-5 h-5 rounded-full bg-[#6D4AFF] flex items-center justify-center text-white shrink-0">
                                    <i data-lucide="check" class="w-3 h-3" stroke-width="3"></i>
                                </div>
                                <span class="text-[#6B7280] font-medium text-[15px]">Advanced Technology</span>
                            </div>

                            <div class="flex items-center gap-3">
                                <div
                                    class="w-5 h-5 rounded-full bg-[#6D4AFF] flex items-center justify-center text-white shrink-0">
                                    <i data-lucide="check" class="w-3 h-3" stroke-width="3"></i>
                                </div>
                                <span class="text-[#6B7280] font-medium text-[15px]">Real-time Tracking</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <style>
            @keyframes float {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-15px);
                }
            }
        </style>

        <section class="py-24 relative overflow-hidden">
            <div class="container max-w-[1200px] mx-auto px-6">

                <div
                    class="relative bg-brand-primary rounded-[3rem] p-10 md:p-16 lg:p-20 text-center overflow-hidden shadow-soft reveal-up z-10">

                    <div
                        class="absolute -top-32 -left-32 w-96 h-96 bg-[#D946EF] rounded-full mix-blend-screen filter blur-[100px] opacity-70 animate-float z-0 pointer-events-none">
                    </div>
                    <div
                        class="absolute -bottom-32 -right-32 w-96 h-96 bg-[#3B82F6] rounded-full mix-blend-screen filter blur-[100px] opacity-70 animate-float-delayed z-0 pointer-events-none">
                    </div>

                    <svg class="absolute top-12 left-16 w-10 h-10 text-[#FF6600] animate-[spin_12s_linear_infinite] z-0 opacity-80"
                        viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                    </svg>
                    <svg class="absolute bottom-16 right-20 w-8 h-8 text-[#FFD028] animate-float z-0 opacity-80"
                        viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                    </svg>
                    <svg class="absolute top-20 right-32 w-6 h-6 text-white/40 animate-float-delayed z-0"
                        viewBox="0 0 24 24" fill="currentColor">
                        <circle cx="12" cy="12" r="12" />
                    </svg>

                    <svg class="absolute inset-0 w-full h-full object-cover opacity-10 z-0 pointer-events-none"
                        preserveAspectRatio="none" viewBox="0 0 1000 300" fill="none">
                        <path d="M-50 150 C 200 50, 400 250, 600 150 C 800 50, 1000 200, 1100 150 L 1100 350 L -50 350 Z"
                            fill="white" />
                    </svg>

                    <div class="relative z-10 max-w-3xl mx-auto">
                        <h4 class="text-white/90 font-bold tracking-[0.2em] uppercase text-sm mb-6">
                            LET'S WORK TOGETHER
                        </h4>

                        <h2
                            class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-8 leading-[1.1] tracking-tight">
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
                                <a href="#contact"
                                    class="px-9 py-4 text-[15px] font-bold text-brand-primary bg-white hover:bg-[#F8F9FA] rounded-full transition-all tracking-wide shadow-lg hover:-translate-y-1">
                                    GET A FREE AUDIT
                                </a>
                                <a href="#contact"
                                    class="w-14 h-14 bg-white hover:bg-[#F8F9FA] text-brand-primary rounded-full flex items-center justify-center transition-all shadow-lg hover:-translate-y-1">
                                    <i data-lucide="arrow-up-right" class="w-6 h-6"></i>
                                </a>
                            </div>
                            <a href="#contact"
                                class="px-9 py-4 text-[15px] font-bold text-white bg-transparent border-2 border-white/30 hover:border-white hover:bg-white/10 rounded-full transition-all tracking-wide">
                                CONTACT US
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- <section id="projects" class="py-24 bg-white relative">
        <div class="container max-w-[1400px] mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 reveal-up">
                <div class="max-w-2xl">
                    <h4 class="text-brand-primary font-bold tracking-[0.2em] uppercase text-sm mb-4">LATEST PROJECTS</h4>
                    <h2 class="text-4xl md:text-5xl font-bold text-brand-dark mb-4 tracking-tight">Our Portfolio</h2>
                </div>

                <div class="flex mt-6 md:mt-0 gap-2 overflow-x-auto no-scrollbar items-center">
                    <button class="tab-btn active px-6 py-3 rounded-[10px] font-bold text-[15px] bg-[#6D4AFF] text-white transition-all whitespace-nowrap shadow-md" data-filter="web-design">Web Design</button>
                    <button class="tab-btn px-6 py-3 rounded-[10px] font-bold text-[15px] text-brand-dark bg-transparent hover:text-brand-primary transition-all whitespace-nowrap" data-filter="brochure">Brochure</button>
                    <button class="tab-btn px-6 py-3 rounded-[10px] font-bold text-[15px] text-brand-dark bg-transparent hover:text-brand-primary transition-all whitespace-nowrap" data-filter="mobile-app">Mobile App</button>
                    <button class="tab-btn px-6 py-3 rounded-[10px] font-bold text-[15px] text-brand-dark bg-transparent hover:text-brand-primary transition-all whitespace-nowrap" data-filter="logos">Logos</button>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 transition-all duration-500" id="project-grid">

                <div class="project-card reveal-up delay-100 group cursor-pointer" data-category="web-design">
                    <div class="group bg-white rounded-[2rem] p-4 shadow-sm hover:shadow-hover border border-slate-100 transition-all duration-500 flex flex-col h-full cursor-pointer">
                        <div class="relative h-[300px] rounded-[1.5rem] overflow-hidden mb-5 bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="FinTech Analytics Hub" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-brand-dark/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute top-4 left-4">
                                <span class="bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-full text-[11px] font-bold text-[#1F1738] uppercase tracking-wider shadow-sm">Web Design</span>
                            </div>
                            <div class="absolute bottom-4 right-4 w-12 h-12 bg-white rounded-full flex items-center justify-center text-brand-primary shadow-lg transform translate-y-10 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-out">
                                <i data-lucide="maximize-2" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <div class="px-3 pb-2 flex-grow flex flex-col justify-center">
                            <h3 class="text-[22px] font-bold text-[#1F1738] mb-2 group-hover:text-brand-primary transition-colors">FinTech Analytics Hub</h3>
                            <p class="text-brand-gray text-[15px] leading-relaxed">Custom UI/UX design scaling to 1M+ active users.</p>
                        </div>
                    </div>
                </div>

                <div class="project-card reveal-up delay-200 group cursor-pointer" data-category="web-design">
                    <div class="group bg-white rounded-[2rem] p-4 shadow-sm hover:shadow-hover border border-slate-100 transition-all duration-500 flex flex-col h-full cursor-pointer">
                        <div class="relative h-[300px] rounded-[1.5rem] overflow-hidden mb-5 bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1507238692062-71100af37bb3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="E-Commerce Redesign" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-brand-dark/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute top-4 left-4">
                                <span class="bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-full text-[11px] font-bold text-[#1F1738] uppercase tracking-wider shadow-sm">Web Design</span>
                            </div>
                            <div class="absolute bottom-4 right-4 w-12 h-12 bg-white rounded-full flex items-center justify-center text-brand-primary shadow-lg transform translate-y-10 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-out">
                                <i data-lucide="maximize-2" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <div class="px-3 pb-2 flex-grow flex flex-col justify-center">
                            <h3 class="text-[22px] font-bold text-[#1F1738] mb-2 group-hover:text-brand-primary transition-colors">E-Commerce Redesign</h3>
                            <p class="text-brand-gray text-[15px] leading-relaxed">Modernized layout driving 30% higher conversion rates.</p>
                        </div>
                    </div>
                </div>

                <div class="project-card reveal-up delay-100 group cursor-pointer hidden-state" data-category="brochure" style="display: none;">
                    <div class="group bg-white rounded-[2rem] p-4 shadow-sm hover:shadow-hover border border-slate-100 transition-all duration-500 flex flex-col h-full cursor-pointer">
                        <div class="relative h-[300px] rounded-[1.5rem] overflow-hidden mb-5 bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1586075010923-2dd4570fb338?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="EcoWear Corporate Profile" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-brand-dark/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute top-4 left-4">
                                <span class="bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-full text-[11px] font-bold text-[#1F1738] uppercase tracking-wider shadow-sm">Brochure</span>
                            </div>
                            <div class="absolute bottom-4 right-4 w-12 h-12 bg-white rounded-full flex items-center justify-center text-brand-primary shadow-lg transform translate-y-10 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-out">
                                <i data-lucide="maximize-2" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <div class="px-3 pb-2 flex-grow flex flex-col justify-center">
                            <h3 class="text-[22px] font-bold text-[#1F1738] mb-2 group-hover:text-brand-primary transition-colors">EcoWear Corporate Profile</h3>
                            <p class="text-brand-gray text-[15px] leading-relaxed">Premium print design for sustainable fashion brand.</p>
                        </div>
                    </div>
                </div>

                <div class="project-card reveal-up delay-100 group cursor-pointer hidden-state" data-category="mobile-app" style="display: none;">
                    <div class="group bg-white rounded-[2rem] p-4 shadow-sm hover:shadow-hover border border-slate-100 transition-all duration-500 flex flex-col h-full cursor-pointer">
                        <div class="relative h-[300px] rounded-[1.5rem] overflow-hidden mb-5 bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="HealthSync iOS App" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-brand-dark/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute top-4 left-4">
                                <span class="bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-full text-[11px] font-bold text-[#1F1738] uppercase tracking-wider shadow-sm">Mobile App</span>
                            </div>
                            <div class="absolute bottom-4 right-4 w-12 h-12 bg-white rounded-full flex items-center justify-center text-brand-primary shadow-lg transform translate-y-10 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-out">
                                <i data-lucide="maximize-2" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <div class="px-3 pb-2 flex-grow flex flex-col justify-center">
                            <h3 class="text-[22px] font-bold text-[#1F1738] mb-2 group-hover:text-brand-primary transition-colors">HealthSync iOS App</h3>
                            <p class="text-brand-gray text-[15px] leading-relaxed">Fitness tracking mobile application UI/UX.</p>
                        </div>
                    </div>
                </div>

                <div class="project-card reveal-up delay-100 group cursor-pointer hidden-state" data-category="logos" style="display: none;">
                    <div class="group bg-white rounded-[2rem] p-4 shadow-sm hover:shadow-hover border border-slate-100 transition-all duration-500 flex flex-col h-full cursor-pointer">
                        <div class="relative h-[300px] rounded-[1.5rem] overflow-hidden mb-5 bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1626785774573-4b799315345d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Vertex Branding Identity" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-brand-dark/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute top-4 left-4">
                                <span class="bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-full text-[11px] font-bold text-[#1F1738] uppercase tracking-wider shadow-sm">Logos</span>
                            </div>
                            <div class="absolute bottom-4 right-4 w-12 h-12 bg-white rounded-full flex items-center justify-center text-brand-primary shadow-lg transform translate-y-10 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-out">
                                <i data-lucide="maximize-2" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <div class="px-3 pb-2 flex-grow flex flex-col justify-center">
                            <h3 class="text-[22px] font-bold text-[#1F1738] mb-2 group-hover:text-brand-primary transition-colors">Vertex Branding Identity</h3>
                            <p class="text-brand-gray text-[15px] leading-relaxed">Modern logo mark and brand guidelines for AI startup.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div id="project-lightbox" class="fixed inset-0 z-[100] hidden items-center justify-center bg-[#1F1738]/95 backdrop-blur-md opacity-0 transition-opacity duration-300">

                <button id="lightbox-close" class="absolute top-6 right-6 w-12 h-12 bg-white/10 hover:bg-brand-primary rounded-full flex items-center justify-center text-white transition-all z-50">
                    <i data-lucide="x" class="w-6 h-6"></i>
                </button>

                <button id="lightbox-prev" class="absolute left-4 md:left-10 top-1/2 -translate-y-1/2 w-14 h-14 bg-white/10 hover:bg-brand-primary rounded-full flex items-center justify-center text-white transition-all z-50 transform hover:scale-110">
                    <i data-lucide="chevron-left" class="w-8 h-8 -ml-1"></i>
                </button>

                <button id="lightbox-next" class="absolute right-4 md:right-10 top-1/2 -translate-y-1/2 w-14 h-14 bg-white/10 hover:bg-brand-primary rounded-full flex items-center justify-center text-white transition-all z-50 transform hover:scale-110">
                    <i data-lucide="chevron-right" class="w-8 h-8 -mr-1"></i>
                </button>

                <div class="relative max-w-5xl w-full mx-4 flex flex-col items-center transform scale-95 transition-transform duration-500 ease-out" id="lightbox-content">
                    <img id="lightbox-img" src="" alt="Project Image" class="max-h-[70vh] w-auto max-w-full object-contain rounded-2xl shadow-[0_30px_60px_rgba(0,0,0,0.5)] mb-6 select-none">

                    <div class="text-center bg-white/10 backdrop-blur-xl border border-white/20 p-6 rounded-2xl w-full max-w-3xl mx-auto shadow-2xl">
                        <h3 id="lightbox-title" class="text-2xl md:text-3xl font-extrabold text-white mb-2 tracking-tight"></h3>
                        <p id="lightbox-desc" class="text-slate-300 text-[15px] md:text-[16px] leading-relaxed"></p>
                    </div>
                </div>
            </div>

            <style>
                .project-card {
                    transition: opacity 0.4s ease, transform 0.4s ease;
                }

                .project-card.hidden-state {
                    opacity: 0;
                    transform: scale(0.95);
                }

                /* Prevent body scroll when lightbox is open */
                body.lightbox-open {
                    overflow: hidden;
                }
            </style>

            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    lucide.createIcons();

                    // 1. DOM Elements
                    const tabBtns = document.querySelectorAll('.tab-btn');
                    const projectCards = document.querySelectorAll('.project-card');

                    const lightbox = document.getElementById('project-lightbox');
                    const lightboxImg = document.getElementById('lightbox-img');
                    const lightboxTitle = document.getElementById('lightbox-title');
                    const lightboxDesc = document.getElementById('lightbox-desc');
                    const lightboxContent = document.getElementById('lightbox-content');

                    // 2. State Management
                    // Automatically find which tab is active initially
                    const initialActiveBtn = document.querySelector('.tab-btn.active');
                    let currentFilter = initialActiveBtn ? initialActiveBtn.getAttribute('data-filter') : 'web-design';
                    let visibleCards = [];
                    let currentImageIndex = 0;

                    // 3. Helper Functions

                    // Update the array of cards currently visible based on active tab
                    function updateVisibleCards() {
                        const allCards = Array.from(document.querySelectorAll('.project-card'));
                        visibleCards = allCards.filter(card => card.getAttribute('data-category') === currentFilter);
                    }

                    // Apply visual filtering to the grid
                    function applyFilter(filterValue) {
                        currentFilter = filterValue;
                        updateVisibleCards();

                        projectCards.forEach(card => {
                            const category = card.getAttribute('data-category');
                            if (filterValue === category) {
                                card.style.display = 'block';
                                setTimeout(() => card.classList.remove('hidden-state'), 50);
                            } else {
                                card.classList.add('hidden-state');
                                setTimeout(() => {
                                    if (card.classList.contains('hidden-state')) card.style.display = 'none';
                                }, 400);
                            }
                        });
                    }

                    // Setup Lightbox Data and Animate In
                    function openLightbox(index) {
                        currentImageIndex = index;
                        const card = visibleCards[currentImageIndex];

                        // Extract data from the clicked card
                        const imgSrc = card.querySelector('img').src;
                        const title = card.querySelector('h3').innerText;
                        const desc = card.querySelector('p').innerText;

                        // Fade out current content slightly for smooth image swap
                        lightboxContent.style.opacity = '0.5';

                        setTimeout(() => {
                            // Set Lightbox Data
                            lightboxImg.src = imgSrc;
                            lightboxTitle.innerText = title;
                            lightboxDesc.innerText = desc;
                            lightboxContent.style.opacity = '1';
                        }, 150);

                        // If lightbox is already open, skip the entrance animation
                        if (lightbox.classList.contains('hidden')) {
                            document.body.classList.add('lightbox-open');
                            lightbox.classList.remove('hidden');
                            lightbox.classList.add('flex');

                            // Trigger entrance animation
                            setTimeout(() => {
                                lightbox.classList.remove('opacity-0');
                                lightboxContent.classList.remove('scale-95');
                                lightboxContent.classList.add('scale-100');
                            }, 10);
                        }
                    }

                    function closeLightbox() {
                        document.body.classList.remove('lightbox-open');
                        lightbox.classList.add('opacity-0');
                        lightboxContent.classList.remove('scale-100');
                        lightboxContent.classList.add('scale-95');

                        setTimeout(() => {
                            lightbox.classList.add('hidden');
                            lightbox.classList.remove('flex');
                        }, 300);
                    }


                    // 4. Event Listeners

                    // Initialize visible cards array on load
                    applyFilter(currentFilter);

                    // Tab Clicking
                    tabBtns.forEach(btn => {
                        btn.addEventListener('click', function() {
                            // Update Button Styles
                            tabBtns.forEach(t => {
                                t.classList.remove('bg-[#6D4AFF]', 'text-white', 'shadow-md', 'active');
                                t.classList.add('bg-transparent', 'text-brand-dark');
                            });
                            this.classList.add('bg-[#6D4AFF]', 'text-white', 'shadow-md', 'active');
                            this.classList.remove('bg-transparent', 'text-brand-dark');

                            // Apply Filter
                            applyFilter(this.getAttribute('data-filter'));
                        });
                    });

                    // Card Clicking to Open Lightbox
                    projectCards.forEach(card => {
                        card.addEventListener('click', function() {
                            const category = this.getAttribute('data-category');

                            // Only open if the card belongs to the active tab
                            if (category === currentFilter) {
                                // Find exactly which position this card holds in the visible array
                                const index = visibleCards.indexOf(this);
                                if (index > -1) openLightbox(index);
                            }
                        });
                    });

                    // Lightbox Navigation
                    document.getElementById('lightbox-next').addEventListener('click', (e) => {
                        e.stopPropagation();
                        if (visibleCards.length <= 1) return; // Don't slide if only 1 item
                        const newIndex = (currentImageIndex + 1) % visibleCards.length;
                        openLightbox(newIndex);
                    });

                    document.getElementById('lightbox-prev').addEventListener('click', (e) => {
                        e.stopPropagation();
                        if (visibleCards.length <= 1) return; // Don't slide if only 1 item
                        const newIndex = (currentImageIndex - 1 + visibleCards.length) % visibleCards.length;
                        openLightbox(newIndex);
                    });

                    // Lightbox Closing Options
                    document.getElementById('lightbox-close').addEventListener('click', closeLightbox);

                    // Close on clicking outside content
                    lightbox.addEventListener('click', (e) => {
                        if (e.target === lightbox) closeLightbox();
                    });

                    // Close/Nav on Keyboard Esc/Arrows
                    document.addEventListener('keydown', (e) => {
                        if (!lightbox.classList.contains('hidden')) {
                            if (e.key === 'Escape') closeLightbox();
                            if (e.key === 'ArrowRight' && visibleCards.length > 1) {
                                openLightbox((currentImageIndex + 1) % visibleCards.length);
                            }
                            if (e.key === 'ArrowLeft' && visibleCards.length > 1) {
                                openLightbox((currentImageIndex - 1 + visibleCards.length) % visibleCards.length);
                            }
                        }
                    });
                });
            </script>

            <div class="text-center mt-12">
                <a href="#" class="inline-flex items-center justify-center px-8 py-4 text-sm font-bold text-brand-dark border-2 border-brand-dark hover:bg-brand-dark hover:text-white rounded-full transition-all">
                    VIEW ALL PROJECTS
                </a>
            </div>
        </div>
    </section> --}}

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
                transition: opacity 0.4s ease, transform 0.4s ease;
            }

            .project-card.hidden-state {
                opacity: 0;
                transform: scale(0.95);
            }
        </style>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const tabBtns = document.querySelectorAll('.tab-btn');
                const projectCards = document.querySelectorAll('.project-card');

                // Set initial state based on the first tab
                const initialFilter = document.querySelector('.tab-btn.active').getAttribute('data-filter');

                // Function to filter projects
                function filterProjects(filterValue) {
                    projectCards.forEach(card => {
                        const category = card.getAttribute('data-category');

                        if (filterValue === category) {
                            card.style.display = 'block';
                            setTimeout(() => {
                                card.classList.remove('hidden-state');
                            }, 50);
                        } else {
                            card.classList.add('hidden-state');
                            setTimeout(() => {
                                if (card.classList.contains('hidden-state')) {
                                    card.style.display = 'none';
                                }
                            }, 400);
                        }
                    });
                }

                // Apply initial filter
                filterProjects(initialFilter);

                // Tab Click Events
                tabBtns.forEach(btn => {
                    btn.addEventListener('click', function() {

                        // 1. Update Tab Styling
                        tabBtns.forEach(t => {
                            // Reset all tabs to inactive style
                            t.classList.remove('bg-[#6D4AFF]', 'text-white', 'shadow-md',
                                'active');
                            t.classList.add('bg-transparent', 'text-brand-dark');
                        });

                        // Set clicked tab to active style
                        this.classList.add('bg-[#6D4AFF]', 'text-white', 'shadow-md', 'active');
                        this.classList.remove('bg-transparent', 'text-brand-dark');

                        // 2. Trigger Filter
                        const filter = this.getAttribute('data-filter');
                        filterProjects(filter);
                    });
                });
            });
        </script>


        <!-- 6. FAQ Section -->
        {{-- <section class="py-24 bg-white relative bg-[#F8F9FA]">
            <div class="container max-w-[800px] mx-auto px-6">
                <div class="text-center mb-16 reveal-up">
                    <h4 class="text-brand-primary font-bold tracking-[0.2em] uppercase text-sm mb-4">FAQS</h4>
                    <h2 class="text-4xl font-bold text-brand-dark mb-4 tracking-tight">Frequently Asked Questions</h2>
                </div>

                <div class="space-y-4 reveal-up">
                    <!-- FAQ Item 1 -->
                    <div
                        class="faq-item bg-white border border-slate-200 rounded-[1.5rem] overflow-hidden group hover:border-brand-primary/50 transition-colors shadow-sm">
                        <button
                            class="faq-btn w-full px-8 py-6 text-left flex justify-between items-center focus:outline-none">
                            <span class="font-bold text-brand-dark text-lg">What services does your agency provide?</span>
                            <div
                                class="w-10 h-10 rounded-full bg-[#F8F9FA] flex items-center justify-center shrink-0 group-hover:bg-brand-primary group-hover:text-white transition-colors text-brand-dark">
                                <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <p class="px-8 pb-8 pt-2 text-brand-gray leading-relaxed border-t border-slate-100 mx-8 mt-2">
                                We are a full-service digital agency. Our core offerings include Performance Marketing (PPC,
                                Social Ads), Technical SEO, Custom Web/App Development, UI/UX Design, and overall Digital
                                Strategy.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div
                        class="faq-item bg-white border border-slate-200 rounded-[1.5rem] overflow-hidden group hover:border-brand-primary/50 transition-colors shadow-sm">
                        <button
                            class="faq-btn w-full px-8 py-6 text-left flex justify-between items-center focus:outline-none">
                            <span class="font-bold text-brand-dark text-lg">How do you measure SEO success?</span>
                            <div
                                class="w-10 h-10 rounded-full bg-[#F8F9FA] flex items-center justify-center shrink-0 group-hover:bg-brand-primary group-hover:text-white transition-colors text-brand-dark">
                                <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <p class="px-8 pb-8 pt-2 text-brand-gray leading-relaxed border-t border-slate-100 mx-8 mt-2">
                                We measure success through organic traffic growth, keyword rankings for high-intent search
                                terms, and most importantly, the number of qualified leads or conversions generated from
                                organic search.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div
                        class="faq-item bg-white border border-slate-200 rounded-[1.5rem] overflow-hidden group hover:border-brand-primary/50 transition-colors shadow-sm">
                        <button
                            class="faq-btn w-full px-8 py-6 text-left flex justify-between items-center focus:outline-none">
                            <span class="font-bold text-brand-dark text-lg">How long does a typical project take?</span>
                            <div
                                class="w-10 h-10 rounded-full bg-[#F8F9FA] flex items-center justify-center shrink-0 group-hover:bg-brand-primary group-hover:text-white transition-colors text-brand-dark">
                                <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <p class="px-8 pb-8 pt-2 text-brand-gray leading-relaxed border-t border-slate-100 mx-8 mt-2">
                                A standard high-performance marketing website typically takes 6 to 8 weeks from discovery to
                                launch. Complex web applications generally range from 3 to 6 months depending on
                                functionality requirements.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        @include('frontend.faq')


        <section id="contact" class="py-24  relative border-t border-slate-200">
            <div class="container max-w-[1200px] mx-auto px-6 relative z-10">
                <div class="grid lg:grid-cols-2 gap-16 items-start">

                    <!-- Left: Contact Info -->
                    <div class="reveal-left">
                        <h4 class="text-brand-primary font-bold tracking-[0.2em] uppercase text-sm mb-4">CONTACT US</h4>
                        <h2 class="text-4xl md:text-5xl font-bold text-brand-dark mb-6 tracking-tight">Ready to get <span
                                class="text-brand-primary">started?</span></h2>
                        <p class="text-brand-gray text-lg mb-10 max-w-md">Reach out directly or fill out the form. Our
                            strategy team usually responds within hours.</p>

                        <div class="space-y-6">
                            <!-- Info Card -->
                            <div
                                class="bg-white p-6 rounded-2xl border border-slate-100 flex items-center gap-6 shadow-sm hover:shadow-md transition-shadow">
                                <div
                                    class="w-16 h-16 bg-[#F3F0FF] rounded-full flex items-center justify-center text-brand-primary shrink-0">
                                    <i data-lucide="map-pin" class="w-7 h-7"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-brand-dark text-lg mb-1">Headquarters</h4>
                                    <p class="text-brand-gray text-sm">13/1B, Brooke Bond Layout,<br>
                                        Krishnasamy Mudaliar Road,<br>
                                        Coimbatore – 641002</p>
                                </div>
                            </div>

                            <!-- Info Card -->
                            <div
                                class="bg-white p-6 rounded-2xl border border-slate-100 flex items-center gap-6 shadow-sm hover:shadow-md transition-shadow">
                                <div
                                    class="w-16 h-16 bg-[#F3F0FF] rounded-full flex items-center justify-center text-brand-primary shrink-0">

                                    <i data-lucide="phone-call" class="w-7 h-7"></i>
                                </div>
                                <div>
                                    <h4 class="text-lg font-bold text-brand-dark mb-1">Contact Numbers</h4>
                                    <div class="space-y-0.5">
                                        <a href="tel:+919789239293"
                                            class="block text-brand-gray text-[14px] hover:text-brand-secondary transition-colors font-semibold">Sales:
                                            +91 97892 39293</a>
                                        <a href="tel:+918124249066"
                                            class="block text-brand-gray text-[14px] hover:text-brand-secondary transition-colors font-semibold">Job:
                                            +91 81242 49066</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Info Card -->
                            <div
                                class="bg-white p-6 rounded-2xl border border-slate-100 flex items-center gap-6 shadow-sm hover:shadow-md transition-shadow">
                                <div
                                    class="w-16 h-16 bg-[#F3F0FF] rounded-full flex items-center justify-center text-brand-primary shrink-0">
                                    <i data-lucide="mail" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <h4 class="text-lg font-bold text-brand-dark mb-1">Email Addresses</h4>
                                    <div class="space-y-0.5">
                                        <a href="mailto:info@kamalatech.com"
                                            class="block text-brand-gray text-[14px] hover:text-[#0A7EFA] transition-colors font-semibold">info@kamalatech.com</a>
                                        <a href="mailto:support@kamalatech.com"
                                            class="block text-brand-gray text-[14px] hover:text-[#0A7EFA] transition-colors font-semibold">support@kamalatech.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Professional Form -->
                    <div class="relative reveal-right">
                        <div class="bg-white p-6 md:p-6 rounded-[2rem] shadow-soft border border-slate-500 relative z-10">
                            <h3 class="text-3xl font-bold text-brand-dark mb-10">Send a Message</h3>

                            <form id="contact-form" class="space-y-6">

                                <!-- Name + Phone -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                                    <!-- Name -->
                                    <div>
                                        <input type="text" name="name"
                                            class="w-full bg-[#F8F9FA] border border-slate-400 focus:bg-white focus:border-brand-primary focus:ring-2 focus:ring-brand-primary/10 rounded-xl px-5 py-4 text-sm text-brand-dark outline-none transition-all placeholder:text-slate-400"
                                            placeholder="Full Name">

                                        <span class="error-name text-red-500 text-xs mt-1 block"></span>
                                    </div>

                                    <!-- Phone -->
                                    <div>
                                        <input type="tel" name="phone"
                                            class="w-full bg-[#F8F9FA] border border-slate-400 focus:bg-white focus:border-brand-primary focus:ring-2 focus:ring-brand-primary/10 rounded-xl px-5 py-4 text-sm text-brand-dark outline-none transition-all placeholder:text-slate-400"
                                            placeholder="Phone Number">

                                        <span class="error-phone text-red-500 text-xs mt-1 block"></span>
                                    </div>

                                </div>

                                <!-- Email -->
                                <div>
                                    <input type="email" name="email"
                                        class="w-full bg-[#F8F9FA] border border-slate-400 focus:bg-white focus:border-brand-primary focus:ring-2 focus:ring-brand-primary/10 rounded-xl px-5 py-4 text-sm text-brand-dark outline-none transition-all placeholder:text-slate-400"
                                        placeholder="Email Address">

                                    <span class="error-email text-red-500 text-xs mt-1 block"></span>
                                </div>

                                <!-- Subject -->
                                <div>
                                    <div>
                                        <select name="subject"
                                            class="w-full bg-[#F8F9FA] border border-slate-400 focus:bg-white focus:border-brand-primary focus:ring-2 focus:ring-brand-primary/10 rounded-xl px-5 py-4 text-sm text-brand-dark outline-none transition-all placeholder:text-slate-400"
                                            placeholder="Service">
                                            <option value="" selected disabled>Select a Service</option>
                                            <option value="Search Engine Optimization">Search Engine Optimization</option>
                                            <option value="Social Media Marketing">Social Media Marketing</option>
                                            <option value="Digital Marketing">Digital Marketing</option>
                                            <option value="Meta Ads Services">Meta Ads Services</option>
                                            <option value="Google Ads Services">Google Ads Services</option>
                                        </select>

                                        <i data-lucide="chevron-down"
                                            class="absolute right-4 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400 pointer-events-none"></i>
                                    </div>

                                    <span class="error-subject text-red-500 text-xs"></span>
                                </div>

                                <!-- Message -->
                                <div>
                                    <textarea rows="4" name="message"
                                        class="w-full bg-[#F8F9FA] border border-slate-400 focus:bg-white focus:border-brand-primary focus:ring-2 focus:ring-brand-primary/10 rounded-xl px-5 py-4 text-sm text-brand-dark outline-none transition-all placeholder:text-slate-400 resize-none"
                                        placeholder="Write your message..."></textarea>

                                    <span class="error-message text-red-500 text-xs mt-1 block"></span>
                                </div>

                                <!-- Captcha -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                                    <!-- Answer -->
                                    <div>
                                        <input type="number" name="captcha"
                                            class="w-full bg-[#F8F9FA] border border-slate-400 focus:bg-white focus:border-brand-primary focus:ring-2 focus:ring-brand-primary/10 rounded-xl px-5 py-4 text-sm text-brand-dark outline-none transition-all placeholder:text-slate-400"
                                            placeholder="Enter Captcha Answer">

                                        <span class="error-captcha text-red-500 text-xs mt-1 block"></span>
                                    </div>

                                    <!-- Question -->
                                    <div class="flex items-center gap-3">

                                        <input type="text" id="math-question" readonly
                                            class="w-full bg-[#F8F9FA] border border-slate-400 rounded-xl px-5 py-4 text-sm text-black outline-none">

                                        <button type="button" onclick="loadCaptcha()"
                                            class="w-14 h-14 bg-red-500 hover:bg-red-600 text-white rounded-full flex items-center justify-center transition-all">
                                            ↻
                                        </button>

                                    </div>

                                </div>

                                <!-- Buttons -->
                                <div class="flex items-center justify-center gap-3">

                                    <button type="submit"
                                        class="px-8 py-4 text-sm font-bold text-white bg-brand-primary hover:bg-[#5b3ce0] rounded-full transition-all flex items-center justify-center">
                                        SEND MESSAGE
                                    </button>

                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- 5. Blog Section -->
        <section id="blog" class="py-24 bg-[#F8F9FA] relative border-b border-slate-100">
            <div class="container max-w-[1400px] mx-auto px-6">
                <div class="text-center mb-16 reveal-up">
                    <h4 class="text-brand-primary font-bold tracking-[0.2em] uppercase text-sm mb-4">OUR BLOG</h4>
                    <h2 class="text-4xl md:text-5xl font-bold text-brand-dark mb-4 tracking-tight">Latest News & Articles
                    </h2>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 gap-y-12">

                    @forelse ($blogs as $blog)
                        <article
                            class="bg-white p-3 rounded-[2rem] shadow-soft hover:shadow-hover border border-slate-100 transition-all duration-500 group flex flex-col reveal-up">

                            <div class="relative mb-6">

                                <a href="{{ route('blog.detail', $blog->slug) }}">

                                    <div class="h-[220px] rounded-[1.5rem] overflow-hidden bg-slate-100 relative">

                                        <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}"
                                            class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">

                                        <div
                                            class="absolute inset-0 bg-brand-dark/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        </div>

                                    </div>

                                </a>

                                <a href="{{ route('blog.detail', $blog->slug) }}"
                                    class="absolute right-5 -bottom-5 w-12 h-12 bg-brand-dark group-hover:bg-brand-primary text-white rounded-xl shadow-lg group-hover:shadow-glow flex items-center justify-center transition-all duration-300 z-10 group-hover:-translate-y-1">

                                    <i data-lucide="arrow-right"
                                        class="w-5 h-5 transform group-hover:translate-x-1 transition-transform"></i>

                                </a>
                            </div>

                            <div class="px-4 pb-5 flex-grow flex flex-col">

                                <div class="flex items-center gap-2 text-slate-400 text-[13px] font-semibold mb-3">
                                    <i data-lucide="calendar" class="w-4 h-4"></i>

                                    {{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}
                                </div>

                                <a href="{{ route('blog.detail', $blog->slug) }}">

                                    <h3
                                        class="text-[20px] font-extrabold text-brand-dark leading-snug group-hover:text-brand-primary transition-colors line-clamp-2">

                                        {{ $blog->title }}

                                    </h3>

                                </a>

                            </div>
                        </article>
                    @empty

                        <div class="col-span-3 text-center text-gray-500">
                            No Blogs Found
                        </div>
                    @endforelse

                </div>
            </div>
        </section>

        <!-- 8. Map Section (Full Width) -->
        {{-- <section class="h-[450px] w-full relative overflow-hidden bg-slate-200">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.1660568505463!2d76.95587077509201!3d11.010801489152543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8591fc2b091d3%3A0xae8a5f0b335f380a!2sWebbitech!5e1!3m2!1sen!2sin!4v1778502338121!5m2!1sen!2sin"   height="600" style="border:0;width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section> --}}


    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
@endsection
