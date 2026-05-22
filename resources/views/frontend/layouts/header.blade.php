<style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-12px);
            }
        }
    </style>

    <header class="fixed w-full z-50 top-0 transition-all duration-300 bg-white/90 backdrop-blur-lg" id="header">
        <div class="max-w-[1400px] mx-auto px-6 py-4 flex justify-between items-center">

            <a href="{{ route('home') }}" class="flex items-center gap-2 relative z-10 group">
                <img src="{{ asset('frontend/assets/images/kamala.webp') }}" alt="Logo" class="w-60 object-contain">
                {{-- <span class="text-xl font-bold text-[#1A1A2C]">Kamala Tech</span> --}}
            </a>

            <nav class="hidden lg:flex items-center gap-8 relative z-10">
                <div class="relative group">
                    <a href="{{ route('home') }}" class="text-[15px] font-bold text-[#1A1A2C] flex items-center gap-1.5 hover:text-[#6D4AFF] transition-colors py-4">
                        Home
                    </a> 
                </div> 

                <div class="relative group">
                    <a href="#services" class="text-[15px] font-bold text-[#1A1A2C] flex items-center gap-1.5 hover:text-[#6D4AFF] transition-colors py-4">
                        Services <i data-lucide="chevron-down" class="w-4 h-4 text-[#1A1A2C] group-hover:text-[#6D4AFF] transition-colors"></i>
                    </a>
                    <div class="absolute top-[100%] left-0 w-64 bg-white rounded-2xl shadow-[0_20px_50px_-10px_rgba(109,74,255,0.15)] border border-slate-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 translate-y-4 group-hover:translate-y-0 flex flex-col py-3 px-3 z-50">
                        <a href="{{ route('search.engine') }}" class="px-5 py-2.5 rounded-2xl text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">Search Engine Optimization</a>
                        <a href="{{ route('social.media.marketing') }}" class="px-5 py-2.5 rounded-2xl text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">Social Media Marketing</a>
                        <a href="{{ route('digital.marketing') }}" class="px-5 py-2.5 rounded-2xl text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">Digital Marketing</a>
                        <a href="{{ route('google.ads.services') }}" class="px-5 py-2.5 rounded-2xl text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">Google Ads Services</a>
                        <a href="{{ route('meta.services') }}" class="px-5 py-2.5 rounded-2xl text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">Meta Ads Services</a>
                    </div>
                </div>

                <div class="relative group">
                    <a href="{{ route('portfolio') }}" class="text-[15px] font-bold text-[#1A1A2C] flex items-center gap-1.5 hover:text-[#6D4AFF] transition-colors py-4">
                        Portfolio 
                    </a> 
                </div>

                <div class="relative group">
                    <a href="{{ route('blog') }}" class="text-[15px] font-bold text-[#1A1A2C] flex items-center gap-1.5 hover:text-[#6D4AFF] transition-colors py-4">
                        Blog  
                    </a> 
                </div>

                <a href="{{ route('contact') }}" class="text-[15px] font-bold text-[#1A1A2C] hover:text-[#6D4AFF] transition-colors py-4">Contact Us</a>
            </nav>
            <div class="hidden lg:flex items-center group">
                <a href="{{ route('contact') }}" class="px-8 py-4 text-sm font-bold text-white bg-brand-primary group-hover:bg-[#5b3ce0] rounded-full transition-all tracking-wide">
                     GET STARTED
                </a>
                <a href="#services" class="w-14 h-14 bg-brand-primary group-hover:bg-[#5b3ce0] text-white rounded-full flex items-center justify-center transition-all">
                    <i data-lucide="arrow-up-right" class="w-6 h-6"></i>
                </a>
            </div> 

            <button class="lg:hidden text-[#1A1A2C] p-2" id="mobile-menu-btn">
                <i data-lucide="menu" class="w-7 h-7"></i>
            </button>
        </div>
    </header>

    <div id="mobile-menu" class="fixed inset-0 bg-white z-40 hidden flex-col pt-24 px-6 opacity-0 transition-opacity duration-300 border-b border-slate-100 h-max pb-8 shadow-2xl overflow-y-auto">
        <div class="flex flex-col space-y-2 mt-2">
            <a href="{{ route('home') }}" class="py-3 text-xl font-bold text-[#1A1A2C] hover:text-[#6D4AFF] transition-colors mobile-link border-b border-slate-100 flex justify-between items-center">Home <i data-lucide="chevron-right" class="w-5 h-5"></i></a>
            <a href="#about" class="py-3 text-xl font-bold text-[#1A1A2C] hover:text-[#6D4AFF] transition-colors mobile-link border-b border-slate-100 flex justify-between items-center">Pages <i data-lucide="chevron-right" class="w-5 h-5"></i></a>
            <a href="#services" class="py-3 text-xl font-bold text-[#1A1A2C] hover:text-[#6D4AFF] transition-colors mobile-link border-b border-slate-100 flex justify-between items-center">Services <i data-lucide="chevron-right" class="w-5 h-5"></i></a>
            <a href="{{ route('portfolio') }}" class="py-3 text-xl font-bold text-[#1A1A2C] hover:text-[#6D4AFF] transition-colors mobile-link border-b border-slate-100 flex justify-between items-center">Portfolio <i data-lucide="chevron-right" class="w-5 h-5"></i></a>
            <a href="{{ route('blog') }}" class="py-3 text-xl font-bold text-[#1A1A2C] hover:text-[#6D4AFF] transition-colors mobile-link border-b border-slate-100 flex justify-between items-center">Blog <i data-lucide="chevron-right" class="w-5 h-5"></i></a>
            <a href="{{ route('contact') }}" class="py-3 text-xl font-bold text-[#1A1A2C] hover:text-[#6D4AFF] transition-colors mobile-link">Contact Us</a>
            <a href="{{ route('contact') }}" class="w-full py-4 mt-4 text-center text-[15px] tracking-wide font-bold text-white bg-[#6D4AFF] rounded-full mobile-link">GET STARTED</a>
        </div>
    </div>
