<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamala Technologies | SEO & Digital Marketing Agency</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Custom Configuration & Styles -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            primary: '#6D4AFF', // The exact purple from the reference
                            secondary: '#D946EF', // The pink from the gradient
                            dark: '#1A1A2C', // Very dark slate for text
                            gray: '#64647A', // Muted text color
                            light: '#F8F9FA', // Background light
                        },
                        kamala: {
                            leaf: '#82D941',
                            stem: '#006C3A'
                        }
                    },
                    boxShadow: {
                        'soft': '0 20px 50px -10px rgba(109, 74, 255, 0.08)',
                        'floating': '0 30px 60px -15px rgba(109, 74, 255, 0.15)',
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'blob': 'blob 10s infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': {
                                transform: 'translateY(0)'
                            },
                            '50%': {
                                transform: 'translateY(-15px)'
                            },
                        },
                        blob: {
                            '0%': {
                                transform: 'translate(0px, 0px) scale(1)'
                            },
                            '33%': {
                                transform: 'translate(30px, -50px) scale(1.1)'
                            },
                            '66%': {
                                transform: 'translate(-20px, 20px) scale(0.9)'
                            },
                            '100%': {
                                transform: 'translate(0px, 0px) scale(1)'
                            },
                        }
                    },
                    keyframes: {
                        'marquee-left': {
                            '0%': {
                                transform: 'translateX(0)'
                            },
                            '100%': {
                                transform: 'translateX(-50%)'
                            },
                        },
                        'marquee-right': {
                            '0%': {
                                transform: 'translateX(-50%)'
                            },
                            '100%': {
                                transform: 'translateX(0)'
                            },
                        }
                    },
                    animation: {
                        'marquee-left': 'marquee-left 25s linear infinite',
                        'marquee-right': 'marquee-right 25s linear infinite',
                    }
                }
            }
        }
    </script>

    <style type="text/tailwindcss">
        @layer utilities {
            /* Text Gradients */
            .text-gradient-purple-pink {
                @apply bg-clip-text text-transparent bg-gradient-to-r from-brand-primary to-brand-secondary;
            }
            
            /* Scroll Reveal Classes */
            .reveal-up { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
            .reveal-up.active { opacity: 1; transform: translateY(0); }
            
            .delay-100 { transition-delay: 100ms; }
            .delay-200 { transition-delay: 200ms; }
            .delay-300 { transition-delay: 300ms; }

            /* Hide scrollbar for tabs */
            .no-scrollbar::-webkit-scrollbar { display: none; }
            .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        }
    </style>
</head>

<body class="bg-[#FAFAFF] text-brand-gray antialiased font-sans overflow-x-hidden selection:bg-brand-primary selection:text-white">

    <header class="fixed w-full z-50 top-0 transition-all duration-300 bg-white/90 backdrop-blur-lg  " id="header">
        <div class="max-w-[1400px] mx-auto px-6 py-4 flex justify-between items-center">

            <a href="#" class="flex items-center gap-2 relative z-10 group">
                <div class="w-8 h-8 transform group-hover:scale-105 transition-transform duration-300">
                    <svg viewBox="0 0 100 100" class="w-full h-full">
                        <path d="M45 45 C65 20, 95 25, 85 50 C95 75, 65 80, 45 45" fill="#82D941" />
                        <path d="M45 55 C65 80, 95 75, 85 50 C95 25, 65 20, 45 55" fill="#006C3A" class="opacity-90" />
                        <path d="M35 45 C20 30, 5 35, 15 50 C5 65, 20 70, 35 45" fill="#006C3A" />
                        <path d="M35 55 C20 70, 5 65, 15 50 C5 35, 20 30, 35 55" fill="#82D941" class="opacity-90" />
                    </svg>
                </div>
                <span class="text-[26px] font-extrabold text-[#1A1A2C] tracking-tight">Kamala</span>
            </a>

            <nav class="hidden lg:flex items-center gap-8 relative z-10">
                <div class="relative group">
                    <a href="#home" class="text-[15px] font-bold text-[#1A1A2C] flex items-center gap-1.5 hover:text-[#6D4AFF] transition-colors py-4">
                        Home <i data-lucide="chevron-down" class="w-4 h-4 text-[#1A1A2C] group-hover:text-[#6D4AFF] transition-colors"></i>
                    </a>
                    <div class="absolute top-[100%] left-0 w-52 bg-white rounded-2xl shadow-[0_20px_50px_-10px_rgba(109,74,255,0.15)] border border-slate-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 translate-y-4 group-hover:translate-y-0 flex flex-col py-3 z-50">
                        <a href="#" class="px-5 py-2.5 text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">SEO Agency</a>
                        <a href="#" class="px-5 py-2.5 text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">Digital Marketing</a>
                        <a href="#" class="px-5 py-2.5 text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">Web Studio</a>
                    </div>
                </div>

                <div class="relative group">
                    <a href="#about" class="text-[15px] font-bold text-[#1A1A2C] flex items-center gap-1.5 hover:text-[#6D4AFF] transition-colors py-4">
                        Pages <i data-lucide="chevron-down" class="w-4 h-4 text-[#1A1A2C] group-hover:text-[#6D4AFF] transition-colors"></i>
                    </a>
                    <div class="absolute top-[100%] left-0 w-48 bg-white rounded-2xl shadow-[0_20px_50px_-10px_rgba(109,74,255,0.15)] border border-slate-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 translate-y-4 group-hover:translate-y-0 flex flex-col py-3 z-50">
                        <a href="#" class="px-5 py-2.5 text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">About Us</a>
                        <a href="#" class="px-5 py-2.5 text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">Our Team</a>
                        <a href="#" class="px-5 py-2.5 text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">Pricing Plans</a>
                        <a href="#" class="px-5 py-2.5 text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">FAQ</a>
                    </div>
                </div>

                <div class="relative group">
                    <a href="#services" class="text-[15px] font-bold text-[#1A1A2C] flex items-center gap-1.5 hover:text-[#6D4AFF] transition-colors py-4">
                        Services <i data-lucide="chevron-down" class="w-4 h-4 text-[#1A1A2C] group-hover:text-[#6D4AFF] transition-colors"></i>
                    </a>
                    <div class="absolute top-[100%] left-0 w-56 bg-white rounded-2xl shadow-[0_20px_50px_-10px_rgba(109,74,255,0.15)] border border-slate-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 translate-y-4 group-hover:translate-y-0 flex flex-col py-3 z-50">
                        <a href="#" class="px-5 py-2.5 text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">Technical SEO</a>
                        <a href="#" class="px-5 py-2.5 text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">Performance Marketing</a>
                        <a href="#" class="px-5 py-2.5 text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">Web Development</a>
                    </div>
                </div>

                <div class="relative group">
                    <a href="#projects" class="text-[15px] font-bold text-[#1A1A2C] flex items-center gap-1.5 hover:text-[#6D4AFF] transition-colors py-4">
                        Projects <i data-lucide="chevron-down" class="w-4 h-4 text-[#1A1A2C] group-hover:text-[#6D4AFF] transition-colors"></i>
                    </a>
                    <div class="absolute top-[100%] left-0 w-48 bg-white rounded-2xl shadow-[0_20px_50px_-10px_rgba(109,74,255,0.15)] border border-slate-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 translate-y-4 group-hover:translate-y-0 flex flex-col py-3 z-50">
                        <a href="#" class="px-5 py-2.5 text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">Portfolio Grid</a>
                        <a href="#" class="px-5 py-2.5 text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">Case Studies</a>
                        <a href="#" class="px-5 py-2.5 text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">Project Details</a>
                    </div>
                </div>

                <div class="relative group">
                    <a href="#blog" class="text-[15px] font-bold text-[#1A1A2C] flex items-center gap-1.5 hover:text-[#6D4AFF] transition-colors py-4">
                        Blog <i data-lucide="chevron-down" class="w-4 h-4 text-[#1A1A2C] group-hover:text-[#6D4AFF] transition-colors"></i>
                    </a>
                    <div class="absolute top-[100%] left-0 w-48 bg-white rounded-2xl shadow-[0_20px_50px_-10px_rgba(109,74,255,0.15)] border border-slate-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 translate-y-4 group-hover:translate-y-0 flex flex-col py-3 z-50">
                        <a href="#" class="px-5 py-2.5 text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">Blog Standard</a>
                        <a href="#" class="px-5 py-2.5 text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">Blog Grid</a>
                        <a href="#" class="px-5 py-2.5 text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">Single Post</a>
                    </div>
                </div>

                <a href="#contact" class="text-[15px] font-bold text-[#1A1A2C] hover:text-[#6D4AFF] transition-colors py-4">Contact Us</a>
            </nav>

            <div class="hidden lg:flex items-center gap-3 relative z-10">
                <a href="#contact" class="px-8 py-3.5 text-sm font-bold text-white bg-[#6D4AFF] hover:bg-[#5b3ce0] rounded-full transition-all tracking-wide">
                    GET STARTED
                </a>
                <a href="#contact" class="w-12 h-12 bg-[#6D4AFF] hover:bg-[#5b3ce0] text-white rounded-full flex items-center justify-center transition-all">
                    <i data-lucide="arrow-up-right" class="w-5 h-5"></i>
                </a>
            </div>

            <button class="lg:hidden text-[#1A1A2C] p-2" id="mobile-menu-btn">
                <i data-lucide="menu" class="w-7 h-7"></i>
            </button>
        </div>
    </header>

    <div id="mobile-menu" class="fixed inset-0 bg-white z-40 hidden flex-col pt-24 px-6 opacity-0 transition-opacity duration-300 border-b border-slate-100 h-max pb-8 shadow-2xl overflow-y-auto">
        <div class="flex flex-col space-y-2 mt-2">
            <a href="#home" class="py-3 text-xl font-bold text-[#1A1A2C] hover:text-[#6D4AFF] transition-colors mobile-link border-b border-slate-100 flex justify-between items-center">Home <i data-lucide="chevron-right" class="w-5 h-5"></i></a>
            <a href="#about" class="py-3 text-xl font-bold text-[#1A1A2C] hover:text-[#6D4AFF] transition-colors mobile-link border-b border-slate-100 flex justify-between items-center">Pages <i data-lucide="chevron-right" class="w-5 h-5"></i></a>
            <a href="#services" class="py-3 text-xl font-bold text-[#1A1A2C] hover:text-[#6D4AFF] transition-colors mobile-link border-b border-slate-100 flex justify-between items-center">Services <i data-lucide="chevron-right" class="w-5 h-5"></i></a>
            <a href="#projects" class="py-3 text-xl font-bold text-[#1A1A2C] hover:text-[#6D4AFF] transition-colors mobile-link border-b border-slate-100 flex justify-between items-center">Projects <i data-lucide="chevron-right" class="w-5 h-5"></i></a>
            <a href="#blog" class="py-3 text-xl font-bold text-[#1A1A2C] hover:text-[#6D4AFF] transition-colors mobile-link border-b border-slate-100 flex justify-between items-center">Blog <i data-lucide="chevron-right" class="w-5 h-5"></i></a>
            <a href="#contact" class="py-3 text-xl font-bold text-[#1A1A2C] hover:text-[#6D4AFF] transition-colors mobile-link">Contact Us</a>
            <a href="#contact" class="w-full py-4 mt-4 text-center text-[15px] tracking-wide font-bold text-white bg-[#6D4AFF] rounded-full mobile-link">GET STARTED</a>
        </div>
    </div>

    <section class="relative pt-40 pb-10 overflow-hidden bg-white border-b border-slate-100">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-gradient-to-bl from-brand-secondary/10 to-brand-primary/10 rounded-full blur-[100px] -z-10 animate-blob"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-gradient-to-tr from-brand-primary/10 to-transparent rounded-full blur-[80px] -z-10 animate-blob" style="animation-delay: 2s;"></div>

        <div class="container max-w-[1200px] mx-auto px-6 text-center relative z-10 reveal-up">
            <h1 class="text-4xl md:text-5xl lg:text-[56px] font-extrabold text-brand-dark mb-6 tracking-tight leading-[1.15]">
                Search Engine Optimization <br class="hidden md:block" />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-primary to-brand-secondary">Services in Coimbatore</span>
            </h1>

            <div class="flex items-center justify-center gap-3 text-[15px] font-bold text-brand-gray bg-[#F8F9FA] w-max mx-auto px-6 py-2.5 rounded-full border border-slate-100 shadow-sm">
                <a href="#" class="hover:text-brand-primary transition-colors flex items-center gap-2">
                    <i data-lucide="home" class="w-4 h-4"></i> Home
                </a>
                <i data-lucide="chevron-right" class="w-4 h-4 text-slate-300"></i>
                <span class="text-brand-primary">Search Engine Optimization Services</span>
            </div>
        </div>
    </section>

    <section class="py-24 pt-10 relative overflow-hidden">
        <div class="container max-w-[1200px] mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <div class="relative reveal-up z-10">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-soft group border border-slate-100">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="SEO Team" class="w-full h-[500px] object-cover transform group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-brand-dark/10 group-hover:bg-transparent transition-colors duration-500"></div>
                    </div>
                    <div class="absolute -bottom-8 -right-8 bg-white p-6 rounded-2xl shadow-hover animate-float border border-slate-100 hidden md:block">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-[#E0F2FE] flex items-center justify-center text-[#0A7EFA]">
                                <i data-lucide="trending-up" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <p class="text-[12px] font-bold text-slate-400 uppercase tracking-wider">Traffic Growth</p>
                                <p class="text-xl font-extrabold text-brand-dark">+145%</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="reveal-up delay-100">
                    <h2 class="text-[32px] md:text-[40px] font-bold text-brand-dark mb-6 leading-[1.2] tracking-tight">
                        Experience Result Focused SEO Services with <span class="text-brand-primary">Kamala Technologies</span>
                    </h2>
                    <p class="text-brand-gray text-[16px] leading-relaxed mb-6">
                        Kamala Technologies boosts your online visibility with professional SEO services designed to improve search rankings and attract the right audience. From keyword research to on-page optimization and high-quality backlinks, these SEO services are tailored to your business goals.
                    </p>
                    <p class="text-brand-gray text-[16px] leading-relaxed mb-10">
                        SEO helps drive organic traffic, increase credibility, and deliver long-term growth without relying on paid ads. With continuous monitoring and performance improvements, your website stays competitive in search results. Choose smart SEO services to grow your brand, reach more customers, and achieve sustainable digital success.
                    </p>

                    <a href="tel:+919789239293" class="inline-flex items-center gap-3 px-8 py-4 bg-brand-dark hover:bg-black text-white text-[15px] font-bold rounded-full transition-all shadow-md hover:shadow-lg group">
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

        <div class="absolute inset-0 z-0 opacity-[0.03]" style="background-image: radial-gradient(#6D4AFF 1px, transparent 1px); background-size: 32px 32px;"></div>

        <div class="container max-w-[1200px] mx-auto px-6 relative z-10">

            <div class="text-center max-w-3xl mx-auto mb-20 reveal-up">
                <span class="bg-[#F3F0FF] text-brand-primary font-bold text-[13px] uppercase tracking-[0.15em] px-5 py-2 rounded-full inline-block mb-6 border border-brand-primary/10">
                    Core Services
                </span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-brand-dark mb-6 tracking-tight">
                    DIGITAL STRATEGY & <br /> <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF6600] to-[#D946EF]">CORE SERVICES</span>
                </h2>
                <p class="text-brand-gray text-lg leading-relaxed">
                    At Kamala Technologies, we craft personalized digital marketing strategies that align with your brand goals. Our SEO strategies are designed to increase online visibility, drive organic traffic, and deliver measurable results.
                </p>
            </div>

            <div class="space-y-8">

                <div class="bg-[#fff0e5] rounded-[2rem] p-8 md:p-12 border border-slate-100 shadow-sm hover:shadow-soft transition-shadow duration-300 reveal-up">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-2 h-10 bg-[#FF6600] rounded-full"></div>
                        <h3 class="text-3xl font-bold text-brand-dark">On-Page SEO</h3>
                    </div>
                    <p class="text-brand-gray text-[16px] leading-relaxed mb-8 ml-6">
                        Improve your website's search engine visibility by optimizing content, structure, and technical elements to drive more organic traffic and conversions.
                    </p>

                    <h4 class="text-sm font-bold text-brand-dark uppercase tracking-widest mb-5 ml-6">Key Focus Areas:</h4>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 ml-6">
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#FFF0E5] text-[#FF6600] flex items-center justify-center shrink-0 group-hover:bg-[#FF6600] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Keyword Research & Optimization</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#FFF0E5] text-[#FF6600] flex items-center justify-center shrink-0 group-hover:bg-[#FF6600] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Meta Titles & Description</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#FFF0E5] text-[#FF6600] flex items-center justify-center shrink-0 group-hover:bg-[#FF6600] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Header Tag & URL Structure</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#FFF0E5] text-[#FF6600] flex items-center justify-center shrink-0 group-hover:bg-[#FF6600] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Internal Linking Strategy</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#FFF0E5] text-[#FF6600] flex items-center justify-center shrink-0 group-hover:bg-[#FF6600] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Image Optimization & Alt Tags</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#FFF0E5] text-[#FF6600] flex items-center justify-center shrink-0 group-hover:bg-[#FF6600] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Content SEO Audits</span>
                        </div>
                    </div>
                </div>

                <div class="bg-[#f3f0ff] rounded-[2rem] p-8 md:p-12 border border-slate-100 shadow-sm hover:shadow-soft transition-shadow duration-300 reveal-up">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-2 h-10 bg-brand-primary rounded-full"></div>
                        <h3 class="text-3xl font-bold text-brand-dark">Off-Page SEO</h3>
                    </div>
                    <p class="text-brand-gray text-[16px] leading-relaxed mb-8 ml-6">
                        Boost your website authority and rankings through strategic external efforts, increasing credibility, traffic, and brand visibility across the web.
                    </p>

                    <h4 class="text-sm font-bold text-brand-dark uppercase tracking-widest mb-5 ml-6">Key Focus Areas:</h4>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 ml-6">
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#F3F0FF] text-brand-primary flex items-center justify-center shrink-0 group-hover:bg-brand-primary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">High-Quality Backlink Building</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#F3F0FF] text-brand-primary flex items-center justify-center shrink-0 group-hover:bg-brand-primary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Guest Posting & Outreach</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#F3F0FF] text-brand-primary flex items-center justify-center shrink-0 group-hover:bg-brand-primary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Social Bookmarking & Promotion</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#F3F0FF] text-brand-primary flex items-center justify-center shrink-0 group-hover:bg-brand-primary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Brand Mentions & Reputation</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#F3F0FF] text-brand-primary flex items-center justify-center shrink-0 group-hover:bg-brand-primary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Influencer Collaborations</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-primary/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#F3F0FF] text-brand-primary flex items-center justify-center shrink-0 group-hover:bg-brand-primary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Competitor Backlink Analysis</span>
                        </div>
                    </div>
                </div>

                <div class="bg-[#e0f2fe] rounded-[2rem] p-8 md:p-12 border border-slate-100 shadow-sm hover:shadow-soft transition-shadow duration-300 reveal-up">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-2 h-10 bg-[#0A7EFA] rounded-full"></div>
                        <h3 class="text-3xl font-bold text-brand-dark">Technical SEO</h3>
                    </div>
                    <p class="text-brand-gray text-[16px] leading-relaxed mb-8 ml-6">
                        Ensure your website performs flawlessly for both users and search engines with technical optimization that improves crawlability, speed, and security.
                    </p>

                    <h4 class="text-sm font-bold text-brand-dark uppercase tracking-widest mb-5 ml-6">Key Focus Areas:</h4>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 ml-6">
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#0A7EFA]/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#E0F2FE] text-[#0A7EFA] flex items-center justify-center shrink-0 group-hover:bg-[#0A7EFA] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Website Speed & Performance</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#0A7EFA]/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#E0F2FE] text-[#0A7EFA] flex items-center justify-center shrink-0 group-hover:bg-[#0A7EFA] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Mobile-Friendly Design</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#0A7EFA]/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#E0F2FE] text-[#0A7EFA] flex items-center justify-center shrink-0 group-hover:bg-[#0A7EFA] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">XML Sitemap & Robots.txt</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#0A7EFA]/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#E0F2FE] text-[#0A7EFA] flex items-center justify-center shrink-0 group-hover:bg-[#0A7EFA] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Structured Data & Schema</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#0A7EFA]/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#E0F2FE] text-[#0A7EFA] flex items-center justify-center shrink-0 group-hover:bg-[#0A7EFA] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Error Fixing & Crawl Issues</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#0A7EFA]/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#E0F2FE] text-[#0A7EFA] flex items-center justify-center shrink-0 group-hover:bg-[#0A7EFA] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">HTTPS & Security</span>
                        </div>
                    </div>
                </div>

                <div class="bg-[#d1fae5] rounded-[2rem] p-8 md:p-12 border border-slate-100 shadow-sm hover:shadow-soft transition-shadow duration-300 reveal-up">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-2 h-10 bg-[#10B981] rounded-full"></div>
                        <h3 class="text-3xl font-bold text-brand-dark">Local SEO</h3>
                    </div>
                    <p class="text-brand-gray text-[16px] leading-relaxed mb-8 ml-6">
                        Increase your visibility in local search results and attract nearby customers with optimized local listings and targeted strategies for your area.
                    </p>

                    <h4 class="text-sm font-bold text-brand-dark uppercase tracking-widest mb-5 ml-6">Key Focus Areas:</h4>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 ml-6">
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#10B981]/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#D1FAE5] text-[#10B981] flex items-center justify-center shrink-0 group-hover:bg-[#10B981] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Google Business Profile</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#10B981]/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#D1FAE5] text-[#10B981] flex items-center justify-center shrink-0 group-hover:bg-[#10B981] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Local Citations & Directories</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#10B981]/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#D1FAE5] text-[#10B981] flex items-center justify-center shrink-0 group-hover:bg-[#10B981] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Geo-Targeted Content</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#10B981]/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#D1FAE5] text-[#10B981] flex items-center justify-center shrink-0 group-hover:bg-[#10B981] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Review Management</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#10B981]/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#D1FAE5] text-[#10B981] flex items-center justify-center shrink-0 group-hover:bg-[#10B981] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Local Keyword Optimization</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#10B981]/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#D1FAE5] text-[#10B981] flex items-center justify-center shrink-0 group-hover:bg-[#10B981] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Location-Specific Links</span>
                        </div>
                    </div>
                </div>

                <div class="bg-[#fdf0f9] rounded-[2rem] p-8 md:p-12 border border-slate-100 shadow-sm hover:shadow-soft transition-shadow duration-300 reveal-up">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-2 h-10 bg-brand-secondary rounded-full"></div>
                        <h3 class="text-3xl font-bold text-brand-dark">Content SEO</h3>
                    </div>
                    <p class="text-brand-gray text-[16px] leading-relaxed mb-8 ml-6">
                        Create high-quality, engaging content designed to attract, inform, and convert your audience while improving search engine rankings.
                    </p>

                    <h4 class="text-sm font-bold text-brand-dark uppercase tracking-widest mb-5 ml-6">Key Focus Areas:</h4>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 ml-6">
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-secondary/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#FDF0F9] text-brand-secondary flex items-center justify-center shrink-0 group-hover:bg-brand-secondary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Blog & Landing Page Content</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-secondary/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#FDF0F9] text-brand-secondary flex items-center justify-center shrink-0 group-hover:bg-brand-secondary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Keyword-Rich Copywriting</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-secondary/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#FDF0F9] text-brand-secondary flex items-center justify-center shrink-0 group-hover:bg-brand-secondary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Content Gap Analysis</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-secondary/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#FDF0F9] text-brand-secondary flex items-center justify-center shrink-0 group-hover:bg-brand-secondary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Multimedia Optimization</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-secondary/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#FDF0F9] text-brand-secondary flex items-center justify-center shrink-0 group-hover:bg-brand-secondary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Internal Content Linking</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-brand-secondary/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#FDF0F9] text-brand-secondary flex items-center justify-center shrink-0 group-hover:bg-brand-secondary group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Performance Monitoring</span>
                        </div>
                    </div>
                </div>

                <div class="bg-[#fffbeb] rounded-[2rem] p-8 md:p-12 border border-slate-100 shadow-sm hover:shadow-soft transition-shadow duration-300 reveal-up">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-2 h-10 bg-[#F59E0B] rounded-full"></div>
                        <h3 class="text-3xl font-bold text-brand-dark">SEO Analytics & Reporting</h3>
                    </div>
                    <p class="text-brand-gray text-[16px] leading-relaxed mb-8 ml-6">
                        Track, measure, and optimize your SEO performance with detailed analytics and reporting, ensuring continuous improvement and measurable results.
                    </p>

                    <h4 class="text-sm font-bold text-brand-dark uppercase tracking-widest mb-5 ml-6">Key Focus Areas:</h4>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 ml-6">
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#F59E0B]/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#FFFBEB] text-[#F59E0B] flex items-center justify-center shrink-0 group-hover:bg-[#F59E0B] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Website Traffic Analysis</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#F59E0B]/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#FFFBEB] text-[#F59E0B] flex items-center justify-center shrink-0 group-hover:bg-[#F59E0B] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Conversion Tracking</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#F59E0B]/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#FFFBEB] text-[#F59E0B] flex items-center justify-center shrink-0 group-hover:bg-[#F59E0B] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Competitor SEO Analysis</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#F59E0B]/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#FFFBEB] text-[#F59E0B] flex items-center justify-center shrink-0 group-hover:bg-[#F59E0B] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Performance Dashboards</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#F59E0B]/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#FFFBEB] text-[#F59E0B] flex items-center justify-center shrink-0 group-hover:bg-[#F59E0B] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">ROI Measurement</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-[#F59E0B]/30 transition-colors group">
                            <div class="w-7 h-7 rounded-full bg-[#FFFBEB] text-[#F59E0B] flex items-center justify-center shrink-0 group-hover:bg-[#F59E0B] group-hover:text-white transition-colors">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-[14.5px] font-semibold text-brand-dark leading-tight">Continuous Optimization</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="py-16 bg-brand-dark border-t border-white/10 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-primary/20 to-transparent opacity-50"></div>
        <div class="container max-w-[1200px] mx-auto px-6 relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Ready to rank higher?</h2>
                <p class="text-slate-400 text-lg">Let's build a strategy that drives real revenue.</p>
            </div>
            <div class="flex items-center gap-3 shrink-0">
                <a href="#contact" class="px-8 py-4 text-[15px] font-bold text-white bg-brand-primary hover:bg-[#5b3ce0] rounded-full transition-all tracking-wide">
                    GET A PROPOSAL
                </a>
                <a href="#contact" class="w-14 h-14 bg-brand-primary hover:bg-[#5b3ce0] text-white rounded-full flex items-center justify-center transition-all">
                    <i data-lucide="arrow-up-right" class="w-6 h-6"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- 9. Footer (Dark Premium Theme) -->
    <footer class="pt-24 pb-10 bg-[#0B0F19] text-slate-400">
        <div class="container max-w-[1200px] mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 mb-16">
                <!-- Col 1 -->
                <div class="lg:col-span-4">
                    <a href="#" class="flex items-center gap-3 mb-6 group">
                        <div class="w-10 h-10 transform group-hover:scale-105 transition-transform">
                            <svg viewBox="0 0 100 100" class="w-full h-full">
                                <path d="M45 45 C65 20, 95 25, 85 50 C95 75, 65 80, 45 45" fill="#82D941" />
                                <path d="M45 55 C65 80, 95 75, 85 50 C95 25, 65 20, 45 55" fill="#82D941" class="opacity-90" />
                                <path d="M35 45 C20 30, 5 35, 15 50 C5 65, 20 70, 35 45" fill="#82D941" />
                                <path d="M35 55 C20 70, 5 65, 15 50 C5 35, 20 30, 35 55" fill="#82D941" class="opacity-90" />
                            </svg>
                        </div>
                        <span class="text-3xl font-bold text-white tracking-tight">Kamala</span>
                    </a>
                    <p class="text-slate-400 text-base mb-8 leading-relaxed max-w-sm">Providing premium digital marketing, SEO, and web development solutions for ambitious brands worldwide.</p>
                    <div class="flex gap-3">
                        <a href="#" class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center hover:bg-brand-primary hover:text-white transition-all text-white"><i data-lucide="twitter" class="w-5 h-5"></i></a>
                        <a href="#" class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center hover:bg-brand-primary hover:text-white transition-all text-white"><i data-lucide="linkedin" class="w-5 h-5"></i></a>
                        <a href="#" class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center hover:bg-brand-primary hover:text-white transition-all text-white"><i data-lucide="instagram" class="w-5 h-5"></i></a>
                    </div>
                </div>

                <!-- Col 2 -->
                <div class="lg:col-span-2 lg:col-start-6">
                    <h4 class="text-white font-bold mb-6 text-lg">Services</h4>
                    <ul class="space-y-4 text-base">
                        <li><a href="#" class="hover:text-brand-primary transition-colors">Performance Ads</a></li>
                        <li><a href="#" class="hover:text-brand-primary transition-colors">Technical SEO</a></li>
                        <li><a href="#" class="hover:text-brand-primary transition-colors">Web Engineering</a></li>
                        <li><a href="#" class="hover:text-brand-primary transition-colors">UI/UX Design</a></li>
                    </ul>
                </div>

                <!-- Col 3 -->
                <div class="lg:col-span-2">
                    <h4 class="text-white font-bold mb-6 text-lg">Company</h4>
                    <ul class="space-y-4 text-base">
                        <li><a href="#" class="hover:text-brand-primary transition-colors">About Us</a></li>
                        <li><a href="#" class="hover:text-brand-primary transition-colors">Case Studies</a></li>
                        <li><a href="#" class="hover:text-brand-primary transition-colors">Insights & News</a></li>
                        <li><a href="#" class="hover:text-brand-primary transition-colors">Careers</a></li>
                    </ul>
                </div>

                <!-- Col 4 -->
                <div class="lg:col-span-3">
                    <h4 class="text-white font-bold mb-6 text-lg">Newsletter</h4>
                    <p class="text-base mb-6 text-slate-400">Subscribe to receive our latest insights.</p>
                    <form class="flex flex-col gap-4">
                        <div class="relative">
                            <input type="email" placeholder="Email address" class="w-full bg-white/5 border border-white/10 text-white rounded-xl px-5 py-4 focus:outline-none focus:border-brand-primary transition-colors">
                            <button type="button" class="absolute right-2 top-2 bottom-2 bg-brand-primary hover:bg-[#5b3ce0] text-white px-5 rounded-lg transition-colors flex items-center justify-center">
                                <i data-lucide="send" class="w-5 h-5"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-slate-500">
                <p>&copy; 2026 Kamala Technologies. All rights reserved.</p>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

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
</body>

</html>