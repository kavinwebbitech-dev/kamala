<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('meta_title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keyword')">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favi_con.ico') }}" type="image/png">

    <meta name="google-site-verification" content="PRJ9-v51AyPkvuQL6YschnY1DcfF4SYbyplajEroUhg" />

    <meta property="og:site_name" content="No.1 Digital Marketing and SEO Company in Coimbatore">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HXLXG9GLYB"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HXLXG9GLYB');
    </script>

    <!-- Open Graph (SEO + Social) -->
    <meta property="og:title" content="@yield('meta_title')">
    <meta property="og:type" content="website" />
    <meta property="og:description" content="@yield('meta_description', 'Default website description')">
    <meta property="og:image" content="@yield('meta_image', asset('frontend/assets/images/favi_con.ico'))">
    <meta property="og:url" content="{{ url()->current() }}">

    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="Bingbot" content="INDEX,FOLLOW">
    <meta name="googlebot" content="INDEX, FOLLOW">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Custom Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            primary: '#6D4AFF',
                            secondary: '#D946EF',
                            dark: '#1F1738',
                            gray: '#6B7280',
                            bg: '#FAFAFF',
                        }
                    },
                    boxShadow: {
                        'soft': '0 20px 50px -10px rgba(109, 74, 255, 0.08)',
                        'hover': '0 30px 60px -15px rgba(109, 74, 255, 0.15)',
                        'form': '0 25px 60px -10px rgba(109, 74, 255, 0.15)',
                    },
                    animation: {
                        'blob': 'blob 15s infinite alternate',
                        'float': 'float 6s ease-in-out infinite',
                        'float-delayed': 'float 8s ease-in-out 3s infinite',
                        'spin-slow': 'spin 20s linear infinite',
                    },
                    keyframes: {
                        blob: {
                            '0%': {
                                transform: 'translate(0px, 0px) scale(1)'
                            },
                            '50%': {
                                transform: 'translate(30px, -50px) scale(1.1)'
                            },
                            '100%': {
                                transform: 'translate(-30px, 20px) scale(0.95)'
                            },
                        },
                        float: {
                            '0%, 100%': {
                                transform: 'translateY(0)'
                            },
                            '50%': {
                                transform: 'translateY(-15px)'
                            },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        .reveal-up {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .reveal-up.active {
            opacity: 1;
            transform: translateY(0);
        }

        .delay-100 {
            transition-delay: 100ms;
        }

        .delay-200 {
            transition-delay: 200ms;
        }

        input:-webkit-autofill {
            -webkit-box-shadow: 0 0 0 30px #F8F9FA inset !important;
            -webkit-text-fill-color: #1F1738 !important;
        }
    </style>
</head>

<body
    class="bg-brand-bg text-brand-gray font-sans antialiased overflow-x-hidden selection:bg-brand-primary selection:text-white">

    @include('frontend.landing-pages.layouts.header')

    <div class="fixed bottom-8 right-8 z-50 flex flex-col gap-4 items-end font-sans">

        <a href="https://wa.me/919789239293" target="_blank"
            class="group flex items-center bg-[#25D366] rounded-full shadow-[0_10px_25px_rgba(37,211,102,0.35)] hover:shadow-[0_15px_35px_rgba(37,211,102,0.45)] transition-all duration-300 animate-[float_4s_ease-in-out_infinite] hover:-translate-y-1">

            <span
                class="max-w-0 overflow-hidden whitespace-nowrap opacity-0 group-hover:max-w-[160px] group-hover:opacity-100 transition-all duration-500 ease-in-out font-bold text-white text-[15px] pl-0 group-hover:pl-5">
                Chat on WhatsApp
            </span>

            <div class="w-14 h-14 flex items-center justify-center shrink-0 relative">
                <span class="absolute inset-0 rounded-full bg-white opacity-0 group-hover:opacity-20 animate-ping"
                    style="animation-duration: 2s;"></span>

                <svg class="w-7 h-7 text-white relative z-10" fill="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51h-.57c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                </svg>
            </div>
        </a>

        <a href="tel:+919789239293"
            class="group flex items-center bg-gradient-to-r from-[#6D4AFF] to-[#D946EF] rounded-full shadow-[0_10px_25px_rgba(109,74,255,0.35)] hover:shadow-[0_15px_35px_rgba(109,74,255,0.45)] transition-all duration-300 animate-[float_4s_ease-in-out_2s_infinite] hover:-translate-y-1">

            <span
                class="max-w-0 overflow-hidden whitespace-nowrap opacity-0 group-hover:max-w-[140px] group-hover:opacity-100 transition-all duration-500 ease-in-out font-bold text-white text-[15px] pl-0 group-hover:pl-5">
                Call Us Now
            </span>

            <div class="w-14 h-14 flex items-center justify-center shrink-0 relative">
                <span class="absolute inset-0 rounded-full bg-white opacity-0 group-hover:opacity-20 animate-ping"
                    style="animation-duration: 2.5s;"></span>

                <i data-lucide="phone-call"
                    class="w-6 h-6 text-white relative z-10 transform group-hover:-rotate-12 transition-transform duration-300"></i>
            </div>
        </a>

    </div>

    @yield('content')


    @include('frontend.landing-pages.layouts.footer')


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @stack('scripts')

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


</body>

</html>
