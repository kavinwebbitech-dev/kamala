@extends('frontend.layouts.master')
@section('title', 'Meta Ads Services in Coimbatore | Kamala Technologies')
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
                Meta Ads Services <br class="hidden md:block" />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-primary to-brand-secondary">in
                    Coimbatore</span>
            </h1>

            <div
                class="flex items-center justify-center gap-3 text-[15px] font-bold text-brand-gray bg-[#F8F9FA] w-max mx-auto px-6 py-2.5 rounded-full border border-slate-100 shadow-sm">
                <a href="{{ route('home') }}" class="hover:text-brand-primary transition-colors flex items-center gap-2">
                    <i data-lucide="home" class="w-4 h-4"></i> Home
                </a>
                <i data-lucide="chevron-right" class="w-4 h-4 text-slate-300"></i>
                <span class="text-brand-primary">Meta Ads Services</span>
            </div>
        </div>
    </section>

    <section class="py-24 pt-10 relative overflow-hidden">
        <div class="container max-w-[1200px] mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <div class="relative reveal-up z-10">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-soft group border border-slate-100">
                        <img src="{{ asset('frontend/assets/images/meta.webp') }}"
                            alt="Meta Ads Team"
                            class="w-full h-[500px] object-cover transform group-hover:scale-105 transition-transform duration-700">
                        <div
                            class="absolute inset-0 bg-brand-dark/10 group-hover:bg-transparent transition-colors duration-500">
                        </div>
                    </div>
                </div>

                <div class="reveal-up delay-100">
                    <h2 class="text-[32px] md:text-[40px] font-bold text-brand-dark mb-6 leading-[1.2] tracking-tight">
                        <span class="text-brand-primary">Kamala Technologies</span> Meta Ads Agency Driving Targeted Reach
                        and Higher Sales
                    </h2>
                    <p class="text-brand-gray text-[16px] leading-relaxed mb-6">
                        Kamala Technologies delivers high performing Meta Ads campaigns through precise audience targeting,
                        engaging creatives, and data driven optimization. By turning social engagement into qualified leads
                        and measurable conversions, every campaign maximizes return on ad spend while reducing wasted
                        budget.
                    </p>
                    <p class="text-brand-gray text-[16px] leading-relaxed mb-10">
                        With continuous testing and performance focused execution, Kamala Technologies drives consistent
                        growth, stronger brand visibility, and long term revenue success across competitive social
                        platforms.
                    </p>

                    <a href="tel:+919789239293"
                        class="inline-flex items-center gap-3 px-8 py-4 bg-brand-dark hover:bg-black text-white text-[15px] font-bold rounded-full transition-all shadow-md hover:shadow-lg group">
                        <div class="w-6 h-6 rounded-full bg-white/20 flex items-center justify-center">
                            <i data-lucide="phone" class="w-3.5 h-3.5"></i>
                        </div>
                        +91 9789239293
                        <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-white relative border-t border-slate-100 overflow-hidden">

        <div class="absolute inset-0 z-0 opacity-[0.03]"
            style="background-image: radial-gradient(#6D4AFF 1px, transparent 1px); background-size: 32px 32px;"></div>

        <div class="container max-w-[1200px] mx-auto px-6 relative z-10">

            <div class="text-center max-w-3xl mx-auto mb-20 reveal-up">
                <span
                    class="bg-[#F3F0FF] text-brand-primary font-bold text-[13px] uppercase tracking-[0.15em] px-5 py-2 rounded-full inline-block mb-6 border border-brand-primary/10">
                    Core Services
                </span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-brand-dark mb-6 tracking-tight">
                    DIGITAL STRATEGY & <br /> <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF6600] to-[#D946EF]">CORE
                        SERVICES</span>
                </h2>
                <p class="text-brand-gray text-lg leading-relaxed">
                    At Kamala Technologies, Meta Ads campaigns are designed to connect brands with their ideal audience
                    across Facebook and Instagram. The focus is on creating engaging ads, targeting the right users,
                    optimizing campaign performance, and delivering measurable results that drive conversions.
                </p>
            </div>

            <div class="space-y-8">

                <div
                    class="bg-[#fff0e5] rounded-[2rem] p-8 md:p-12 border border-slate-100 shadow-sm hover:shadow-soft transition-shadow duration-300 reveal-up">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-2 h-10 bg-[#FF6600] rounded-full"></div>
                        <h3 class="text-3xl font-bold text-brand-dark">Meta Ads Campaign Management</h3>
                    </div>
                    <p class="text-brand-gray text-[16px] leading-relaxed mb-8 ml-6">
                        Run highly targeted campaigns across Facebook and Instagram to reach the right audience, increase
                        engagement, and drive conversions for your brand.
                    </p>

                    <h4 class="text-sm font-bold text-brand-dark uppercase tracking-widest mb-5 ml-6">Key Focus Areas:</h4>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 ml-6">
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#FFF0E5] text-[#FF6600] flex items-center justify-center shrink-0 group-hover:bg-[#FF6600] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Audience Research &
                                Segmentation</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#FFF0E5] text-[#FF6600] flex items-center justify-center shrink-0 group-hover:bg-[#FF6600] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Ad Copywriting &
                                Creative Design</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#FFF0E5] text-[#FF6600] flex items-center justify-center shrink-0 group-hover:bg-[#FF6600] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Campaign Setup & Budget
                                Allocation</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#FFF0E5] text-[#FF6600] flex items-center justify-center shrink-0 group-hover:bg-[#FF6600] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Targeting by Interests,
                                Demographics & Behavior</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#FFF0E5] text-[#FF6600] flex items-center justify-center shrink-0 group-hover:bg-[#FF6600] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">A/B Testing for Ads &
                                Creatives</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#FFF0E5] text-[#FF6600] flex items-center justify-center shrink-0 group-hover:bg-[#FF6600] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Performance Tracking &
                                Optimization</span>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-[#f3f0ff] rounded-[2rem] p-8 md:p-12 border border-slate-100 shadow-sm hover:shadow-soft transition-shadow duration-300 reveal-up">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-2 h-10 bg-brand-primary rounded-full"></div>
                        <h3 class="text-3xl font-bold text-brand-dark">Lead Generation Ads</h3>
                    </div>
                    <p class="text-brand-gray text-[16px] leading-relaxed mb-8 ml-6">
                        Generate high-quality leads using Meta lead forms and targeted campaigns designed to convert
                        potential customers into inquiries or sign-ups.
                    </p>

                    <h4 class="text-sm font-bold text-brand-dark uppercase tracking-widest mb-5 ml-6">Key Focus Areas:</h4>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 ml-6">
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#F3F0FF] text-brand-primary flex items-center justify-center shrink-0 group-hover:bg-brand-primary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Optimized Lead Form
                                Creation</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#F3F0FF] text-brand-primary flex items-center justify-center shrink-0 group-hover:bg-brand-primary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Target Audience
                                Selection</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#F3F0FF] text-brand-primary flex items-center justify-center shrink-0 group-hover:bg-brand-primary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Ad Placement & Budget
                                Management</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#F3F0FF] text-brand-primary flex items-center justify-center shrink-0 group-hover:bg-brand-primary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Lead Nurturing Strategy
                                Integration</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#F3F0FF] text-brand-primary flex items-center justify-center shrink-0 group-hover:bg-brand-primary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Conversion Tracking &
                                Reporting</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#F3F0FF] text-brand-primary flex items-center justify-center shrink-0 group-hover:bg-brand-primary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Campaign Performance
                                Optimization</span>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-[#e0f2fe] rounded-[2rem] p-8 md:p-12 border border-slate-100 shadow-sm hover:shadow-soft transition-shadow duration-300 reveal-up">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-2 h-10 bg-[#0A7EFA] rounded-full"></div>
                        <h3 class="text-3xl font-bold text-brand-dark">Remarketing Campaigns</h3>
                    </div>
                    <p class="text-brand-gray text-[16px] leading-relaxed mb-8 ml-6">
                        Reconnect with people who have interacted with your brand on Facebook or Instagram to increase
                        conversions and drive repeat engagement.
                    </p>

                    <h4 class="text-sm font-bold text-brand-dark uppercase tracking-widest mb-5 ml-6">Key Focus Areas:</h4>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 ml-6">
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#0A7EFA]/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#E0F2FE] text-[#0A7EFA] flex items-center justify-center shrink-0 group-hover:bg-[#0A7EFA] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Custom Audience
                                Creation</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#0A7EFA]/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#E0F2FE] text-[#0A7EFA] flex items-center justify-center shrink-0 group-hover:bg-[#0A7EFA] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Dynamic & Static Ads
                                Setup</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#0A7EFA]/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#E0F2FE] text-[#0A7EFA] flex items-center justify-center shrink-0 group-hover:bg-[#0A7EFA] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Ad Frequency & Timing
                                Optimization</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#0A7EFA]/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#E0F2FE] text-[#0A7EFA] flex items-center justify-center shrink-0 group-hover:bg-[#0A7EFA] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Cross-Platform
                                Remarketing</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#0A7EFA]/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#E0F2FE] text-[#0A7EFA] flex items-center justify-center shrink-0 group-hover:bg-[#0A7EFA] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Conversion Tracking &
                                Reporting</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#0A7EFA]/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#E0F2FE] text-[#0A7EFA] flex items-center justify-center shrink-0 group-hover:bg-[#0A7EFA] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Continuous Campaign
                                Optimization</span>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-[#d1fae5] rounded-[2rem] p-8 md:p-12 border border-slate-100 shadow-sm hover:shadow-soft transition-shadow duration-300 reveal-up">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-2 h-10 bg-[#10B981] rounded-full"></div>
                        <h3 class="text-3xl font-bold text-brand-dark">Video & Carousel Ads</h3>
                    </div>
                    <p class="text-brand-gray text-[16px] leading-relaxed mb-8 ml-6">
                        Engage your audience with interactive video and carousel ads on Meta platforms to boost brand
                        awareness, engagement, and website traffic.
                    </p>

                    <h4 class="text-sm font-bold text-brand-dark uppercase tracking-widest mb-5 ml-6">Key Focus Areas:</h4>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 ml-6">
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#10B981]/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#D1FAE5] text-[#10B981] flex items-center justify-center shrink-0 group-hover:bg-[#10B981] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Video Script & Creative
                                Production</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#10B981]/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#D1FAE5] text-[#10B981] flex items-center justify-center shrink-0 group-hover:bg-[#10B981] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Carousel Ad Setup &
                                Design</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#10B981]/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#D1FAE5] text-[#10B981] flex items-center justify-center shrink-0 group-hover:bg-[#10B981] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Target Audience
                                Segmentation</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#10B981]/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#D1FAE5] text-[#10B981] flex items-center justify-center shrink-0 group-hover:bg-[#10B981] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Placement & Budget
                                Optimization</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#10B981]/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#D1FAE5] text-[#10B981] flex items-center justify-center shrink-0 group-hover:bg-[#10B981] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Engagement & View Rate
                                Tracking</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#10B981]/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#D1FAE5] text-[#10B981] flex items-center justify-center shrink-0 group-hover:bg-[#10B981] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Campaign Analysis &
                                Optimization</span>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-[#fdf0f9] rounded-[2rem] p-8 md:p-12 border border-slate-100 shadow-sm hover:shadow-soft transition-shadow duration-300 reveal-up">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-2 h-10 bg-brand-secondary rounded-full"></div>
                        <h3 class="text-3xl font-bold text-brand-dark">Conversion-Focused Ads</h3>
                    </div>
                    <p class="text-brand-gray text-[16px] leading-relaxed mb-8 ml-6">
                        Drive sales, app installs, or other conversions with ads optimized for Meta's algorithm to deliver
                        measurable results for your business goals.
                    </p>

                    <h4 class="text-sm font-bold text-brand-dark uppercase tracking-widest mb-5 ml-6">Key Focus Areas:</h4>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 ml-6">
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-secondary/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#FDF0F9] text-brand-secondary flex items-center justify-center shrink-0 group-hover:bg-brand-secondary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Pixel & Conversion
                                Event Setup</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-secondary/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#FDF0F9] text-brand-secondary flex items-center justify-center shrink-0 group-hover:bg-brand-secondary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Targeting & Retargeting
                                Strategy</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-secondary/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#FDF0F9] text-brand-secondary flex items-center justify-center shrink-0 group-hover:bg-brand-secondary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Ad Copy & Creative
                                Testing</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-secondary/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#FDF0F9] text-brand-secondary flex items-center justify-center shrink-0 group-hover:bg-brand-secondary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Bid & Budget
                                Optimization</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-secondary/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#FDF0F9] text-brand-secondary flex items-center justify-center shrink-0 group-hover:bg-brand-secondary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Campaign Performance
                                Monitoring</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-secondary/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#FDF0F9] text-brand-secondary flex items-center justify-center shrink-0 group-hover:bg-brand-secondary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">ROI Tracking &
                                Reporting</span>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-[#fffbeb] rounded-[2rem] p-8 md:p-12 border border-slate-100 shadow-sm hover:shadow-soft transition-shadow duration-300 reveal-up">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-2 h-10 bg-[#F59E0B] rounded-full"></div>
                        <h3 class="text-3xl font-bold text-brand-dark">Performance Tracking & Reporting</h3>
                    </div>
                    <p class="text-brand-gray text-[16px] leading-relaxed mb-8 ml-6">
                        Analyze Meta Ads performance with detailed reports and dashboards to optimize campaigns, maximize
                        ROI, and improve overall ad effectiveness.
                    </p>

                    <h4 class="text-sm font-bold text-brand-dark uppercase tracking-widest mb-5 ml-6">Key Focus Areas:</h4>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 ml-6">
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#F59E0B]/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#FFFBEB] text-[#F59E0B] flex items-center justify-center shrink-0 group-hover:bg-[#F59E0B] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Campaign Analytics &
                                Dashboard Setup</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#F59E0B]/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#FFFBEB] text-[#F59E0B] flex items-center justify-center shrink-0 group-hover:bg-[#F59E0B] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">KPI Tracking &
                                Reporting</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#F59E0B]/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#FFFBEB] text-[#F59E0B] flex items-center justify-center shrink-0 group-hover:bg-[#F59E0B] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Audience & Segment
                                Analysis</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#F59E0B]/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#FFFBEB] text-[#F59E0B] flex items-center justify-center shrink-0 group-hover:bg-[#F59E0B] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Ad Creative & Copy
                                Testing</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#F59E0B]/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#FFFBEB] text-[#F59E0B] flex items-center justify-center shrink-0 group-hover:bg-[#F59E0B] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Bid & Budget
                                Adjustments</span>
                        </div>
                        <div
                            class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#F59E0B]/30 transition-colors group">
                            <div
                                class="w-7 h-7 rounded-full bg-[#FFFBEB] text-[#F59E0B] flex items-center justify-center shrink-0 group-hover:bg-[#F59E0B] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Continuous Optimization
                                & ROI Improvement</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="py-16 bg-brand-dark border-t border-white/10 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-primary/20 to-transparent opacity-50"></div>
        <div
            class="container max-w-[1200px] mx-auto px-6 relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Ready to rank higher?</h2>
                <p class="text-slate-400 text-lg">Let's build a strategy that drives real revenue.</p>
            </div>
            <div class="flex items-center gap-3 shrink-0">
                <a href="{{ route('contact') }}"
                    class="px-8 py-4 text-[15px] font-bold text-white bg-brand-primary hover:bg-[#5b3ce0] rounded-full transition-all tracking-wide">
                    GET A PROPOSAL
                </a>
                <a href="{{ route('contact') }}"
                    class="w-14 h-14 bg-brand-primary hover:bg-[#5b3ce0] text-white rounded-full flex items-center justify-center transition-all">
                    <i data-lucide="arrow-up-right" class="w-6 h-6"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script>
        // Initialize Icons
        lucide.createIcons();

        // 1. Mobile Menu Toggle
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileLinks = document.querySelectorAll('.mobile-link');
        let menuOpen = false;

        function toggleMenu() {
            menuOpen = !menuOpen;
            if (menuOpen) {
                mobileMenu.classList.remove('hidden');
                setTimeout(() => {
                    mobileMenu.classList.remove('opacity-0');
                    document.body.style.overflow = 'hidden';
                    mobileBtn.innerHTML = '<i data-lucide="x" class="w-6 h-6"></i>';
                    lucide.createIcons();
                }, 10);
            } else {
                mobileMenu.classList.add('opacity-0');
                document.body.style.overflow = 'auto';
                mobileBtn.innerHTML = '<i data-lucide="menu" class="w-6 h-6"></i>';
                lucide.createIcons();
                setTimeout(() => {
                    mobileMenu.classList.add('hidden');
                }, 300);
            }
        }

        mobileBtn.addEventListener('click', toggleMenu);
        mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));

        // 2. Scroll Reveal Animation
        const revealElements = document.querySelectorAll('.reveal-up, .reveal-left, .reveal-right');
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

        // 3. Navbar scroll effect
        const header = document.getElementById('header');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                header.classList.add('shadow-sm', 'border-slate-100');
                header.classList.remove('border-transparent');
            } else {
                header.classList.remove('shadow-sm', 'border-slate-100');
                header.classList.add('border-transparent');
            }
        });

        // 4. Projects Tab Functionality (Pill style matching reference)
        const tabBtns = document.querySelectorAll('.tab-btn');
        const projectCards = document.querySelectorAll('.project-card');

        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active tab styling
                tabBtns.forEach(b => {
                    b.classList.remove('bg-brand-dark', 'text-white');
                    b.classList.add('bg-[#F8F9FA]', 'text-brand-gray');
                });
                btn.classList.add('bg-[#6D4AFF]', 'text-white');
                btn.classList.remove('bg-[#F8F9FA]', 'text-brand-gray');

                // Filter projects
                const filter = btn.getAttribute('data-filter');
                projectCards.forEach(card => {
                    if (filter === 'all' || card.getAttribute('data-category') === filter) {
                        card.style.display = 'block';
                        // Small animation reset
                        card.style.opacity = '0';
                        setTimeout(() => card.style.opacity = '1', 50);
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // 5. FAQ Accordion Functionality (Plus/Minus rotation)
        const faqBtns = document.querySelectorAll('.faq-btn');

        faqBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const content = btn.nextElementSibling;
                const icon = btn.querySelector('i');
                const faqItem = btn.parentElement;
                const iconBg = btn.querySelector('div');
                const isOpen = content.style.maxHeight;

                // Close all others
                document.querySelectorAll('.faq-content').forEach(c => {
                    c.style.maxHeight = null;
                });

                // Reset all icons and active states
                document.querySelectorAll('.faq-btn i').forEach(i => {
                    i.classList.remove('rotate-45');
                });
                document.querySelectorAll('.faq-item').forEach(item => {
                    item.classList.remove('border-brand-primary/50');
                });
                document.querySelectorAll('.faq-btn div').forEach(div => {
                    div.classList.remove('bg-brand-primary', 'text-white');
                    div.classList.add('bg-[#F8F9FA]', 'text-brand-dark');
                });

                if (!isOpen) {
                    content.style.maxHeight = content.scrollHeight + "px";

                    icon.classList.add('rotate-45');
                    faqItem.classList.add('border-brand-primary/50');

                    iconBg.classList.remove('bg-[#F8F9FA]', 'text-brand-dark');
                    iconBg.classList.add('bg-brand-primary', 'text-white');
                }
            });
        });
    </script>
@endsection
