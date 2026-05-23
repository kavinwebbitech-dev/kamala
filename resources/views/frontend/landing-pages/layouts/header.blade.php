 <header class="fixed w-full z-50 top-0 transition-all duration-300 bg-white/90 backdrop-blur-lg" id="header">
     <div class="max-w-[1400px] mx-auto px-6 py-4 flex justify-between items-center">

         <a href="{{ route('home') }}" class="flex items-center gap-2 relative z-10 group">
             <img src="{{ asset('frontend/assets/images/kamala.webp') }}" alt="Logo" class="w-60 object-contain">
             {{-- <span class="text-xl font-bold text-[#1A1A2C]">Kamala Tech</span> --}}
         </a>

         <nav class="hidden lg:flex items-center gap-8 relative z-10">
             <div class="relative group">
                 <a href="{{ route('home') }}"
                     class="text-[15px] font-bold text-[#1A1A2C] flex items-center gap-1.5 hover:text-[#6D4AFF] transition-colors py-4">
                     Home
                 </a>
             </div>
             <a href="#strategy"
                 class="text-[15px] font-bold text-[#1A1A2C] hover:text-[#6D4AFF] transition-colors py-4">About</a>
             <a href="#faq"
                 class="text-[15px] font-bold text-[#1A1A2C] hover:text-[#6D4AFF] transition-colors py-4">FAQ</a>


             <div class="relative group">
                 <a href="#services"
                     class="text-[15px] font-bold text-[#1A1A2C] flex items-center gap-1.5 hover:text-[#6D4AFF] transition-colors py-4">
                     Services <i data-lucide="chevron-down"
                         class="w-4 h-4 text-[#1A1A2C] group-hover:text-[#6D4AFF] transition-colors"></i>
                 </a>
                 <div
                     class="absolute top-[100%] left-0 w-64 bg-white rounded-2xl shadow-[0_20px_50px_-10px_rgba(109,74,255,0.15)] border border-slate-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 translate-y-4 group-hover:translate-y-0 flex flex-col py-3 px-3 z-50">
                     <a href="{{ route('search.engine') }}"
                         class="px-5 py-2.5 rounded-2xl text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">Search
                         Engine Optimization</a>
                     <a href="{{ route('social.media.marketing') }}"
                         class="px-5 py-2.5 rounded-2xl text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">Social
                         Media Marketing</a>
                     <a href="{{ route('digital.marketing') }}"
                         class="px-5 py-2.5 rounded-2xl text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">Digital
                         Marketing</a>
                     <a href="{{ route('google.ads.services') }}"
                         class="px-5 py-2.5 rounded-2xl text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">Google
                         Ads Services</a>
                     <a href="{{ route('meta.services') }}"
                         class="px-5 py-2.5 rounded-2xl text-sm font-semibold text-[#64647A] hover:text-[#6D4AFF] hover:bg-[#F8F9FA] transition-colors">Meta
                         Ads Services</a>
                 </div>
             </div>

             <div class="relative group">
                 <a href="{{ route('portfolio') }}"
                     class="text-[15px] font-bold text-[#1A1A2C] flex items-center gap-1.5 hover:text-[#6D4AFF] transition-colors py-4">
                     Portfolio
                 </a>
             </div>

             <div class="relative group">
                 <a href="{{ route('blog') }}"
                     class="text-[15px] font-bold text-[#1A1A2C] flex items-center gap-1.5 hover:text-[#6D4AFF] transition-colors py-4">
                     Blog
                 </a>
             </div>
             
             <a href="{{ route('contact') }}"
                 class="text-[15px] font-bold text-[#1A1A2C] hover:text-[#6D4AFF] transition-colors py-4">Contact Us</a>
         </nav>
         <div class="hidden lg:flex items-center group">
             <a href="{{ route('contact') }}"
                 class="px-8 py-4 text-sm font-bold text-white bg-brand-primary group-hover:bg-[#5b3ce0] rounded-full transition-all tracking-wide">
                 GET STARTED
             </a>
             <a href="#services"
                 class="w-14 h-14 bg-brand-primary group-hover:bg-[#5b3ce0] text-white rounded-full flex items-center justify-center transition-all">
                 <i data-lucide="arrow-up-right" class="w-6 h-6"></i>
             </a>
         </div>

         <button class="lg:hidden text-[#1A1A2C] p-2" id="mobile-menu-btn">
             <i data-lucide="menu" class="w-7 h-7"></i>
         </button>
     </div>
 </header>
