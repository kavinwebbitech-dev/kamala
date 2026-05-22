<footer class="bg-brand-dark pt-20 pb-10 border-t border-brand-primary/20 relative overflow-hidden">

    <div
        class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-brand-primary rounded-full blur-[150px] opacity-10 pointer-events-none">
    </div>

    <div class="container max-w-[1200px] mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8 mb-16">

            <!-- Col 1 -->
            <div>
                <a href="{{ route('home') }}" class="flex items-center gap-3 mb-6 group">
                    <div class="w-60 transform group-hover:scale-105 transition-transform">
                        <img src="{{ asset('frontend/assets/images/kamalafooter.webp') }}" alt="Kamala Logo"
                            class="w-full h-full object-contain">
                    </div>
                </a>
                <p class="text-slate-400 text-[15px] leading-relaxed mb-6">
                    We are a data-driven digital marketing agency helping ambitious brands dominate search engines and
                    scale their revenue.
                </p>
                {{-- <div class="flex items-center gap-4">
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-slate-300 hover:bg-brand-primary hover:text-white hover:border-brand-primary transition-all"><i
                            data-lucide="twitter" class="w-4 h-4"></i></a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-slate-300 hover:bg-brand-primary hover:text-white hover:border-brand-primary transition-all"><i
                            data-lucide="linkedin" class="w-4 h-4"></i></a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-slate-300 hover:bg-[#D946EF] hover:text-white hover:border-[#D946EF] transition-all"><i
                            data-lucide="instagram" class="w-4 h-4"></i></a>
                </div> --}}
            </div>

            <!-- Col 2 -->
            <div class="lg:ml-auto">
                <h4 class="text-white font-bold text-lg mb-6">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('home') }}"
                            class="text-slate-400 hover:text-brand-primary transition-colors text-[15px] font-medium">Home</a>
                    </li>
                    <li><a href="{{ route('portfolio') }}"
                            class="text-slate-400 hover:text-brand-primary transition-colors text-[15px] font-medium">
                            Portfolio</a></li>
                    <li><a href="{{ route('blog') }}"
                            class="text-slate-400 hover:text-brand-primary transition-colors text-[15px] font-medium">Our
                            blog</a></li>

                    <li><a href="{{ route('contact') }}"
                            class="text-slate-400 hover:text-brand-primary transition-colors text-[15px] font-medium">Contact
                            Us</a></li>
                </ul>
            </div>

            <!-- Col 3 -->
            <div class="lg:ml-auto">
                <h4 class="text-white font-bold text-lg mb-6">Services</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('search.engine') }}"
                            class="text-slate-400 hover:text-brand-primary transition-colors text-[15px] font-medium">Search
                            Engine Optimization</a></li>
                    <li><a href="{{ route('social.media.marketing') }}"
                            class="text-slate-400 hover:text-brand-primary transition-colors text-[15px] font-medium">Social
                            Media Marketing</a></li>
                    <li><a href="{{ route('digital.marketing') }}"
                            class="text-slate-400 hover:text-brand-primary transition-colors text-[15px] font-medium">Digital
                            Marketing</a></li>
                    <li><a href="{{ route('google.ads.services') }}"
                            class="text-slate-400 hover:text-brand-primary transition-colors text-[15px] font-medium">Google
                            Ads Services</a></li>
                    <li><a href="{{ route('meta.services') }}"
                            class="text-slate-400 hover:text-brand-primary transition-colors text-[15px] font-medium">Meta
                            Ads Services</a></li>
                </ul>
            </div>

            <!-- Col 4 -->
            <div>
                <h4 class="text-white font-bold text-lg mb-6">Contact Info</h4>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <i data-lucide="map-pin" class="w-5 h-5 text-brand-primary shrink-0 mt-0.5"></i>
                        <span class="text-slate-400 text-[15px] leading-relaxed">13/1B, Brooke Bond Layout, Coimbatore
                            - 641002</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i data-lucide="phone" class="w-5 h-5 text-brand-primary shrink-0"></i>
                        <a href="tel:+919789239293"
                            class="text-slate-400 hover:text-brand-primary transition-colors text-[15px]">+91 97892
                            39293</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <i data-lucide="mail" class="w-5 h-5 text-brand-primary shrink-0"></i>
                        <a href="mailto:info@kamalatech.com"
                            class="text-slate-400 hover:text-brand-primary transition-colors text-[15px]">info@kamalatech.com</a>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Copyright -->
        <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="text-slate-500 text-[14px]">© 2026 Kamala Technologies. All Rights Reserved.</p>
            <div class="flex items-center gap-6">
                <a href="#" class="text-slate-500 hover:text-white text-[14px] transition-colors">Privacy
                    Policy</a>
                <a href="#" class="text-slate-500 hover:text-white text-[14px] transition-colors">Terms of
                    Service</a>
            </div>
        </div>
    </div>
</footer>
