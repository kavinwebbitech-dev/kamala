<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description', 'Kamala Technologies is a leading digital marketing company in Coimbatore helping 500+ businesses grow with SEO, social media, and creative websites that drive results.')">
    <meta name="keywords" content="@yield('meta_keywords', 'digital marketing company in coimbatore, best digital marketing company coimbatore, seo services coimbatore, online marketing agency coimbatore, ppc company coimbatore')">

    <link rel="canonical" href="{{ url()->current() }}" />
    
    <meta name="google-site-verification" content="PRJ9-v51AyPkvuQL6YschnY1DcfF4SYbyplajEroUhg" />
    <meta property="og:site_name" content="No.1 Digital Marketing and SEO Company in Coimbatore">
    <!-- Google tag (gtag.js) -->
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

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favi_con.ico') }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="{{ asset('frontend/assets/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"
        integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        function loadGTM() {
            if (window.gtmLoaded) return;
            window.gtmLoaded = true;

            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-MGLLPBWT');
        }

        window.addEventListener('scroll', loadGTM, {
            once: true
        });
        window.addEventListener('mousemove', loadGTM, {
            once: true
        });
        window.addEventListener('touchstart', loadGTM, {
            once: true
        });
    </script>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

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

            .delay-300 {
                transition-delay: 300ms;
            }

            /* Hide scrollbar for tabs */
            .no-scrollbar::-webkit-scrollbar {
                display: none;
            }

            .no-scrollbar {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }
        }
    </style>


</head>

<body
    class="bg-[#FAFAFF] text-brand-gray antialiased font-sans overflow-x-hidden selection:bg-brand-primary selection:text-white">

    @include('frontend.layouts.header')

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

    <main id="main-content">
        @yield('content')
    </main>

    @include('frontend.layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        new Swiper(".whySwiper", {
            loop: true,
            autoplay: {
                delay: 2000
            },
            speed: 850,
            spaceBetween: 28,
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                576: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 3
                },
                1200: {
                    slidesPerView: 4
                }
            }
        });
    </script>

    <script>
        const wbSwiper = new Swiper('.mySwiper', {
            slidesPerView: 1,
            spaceBetween: 16,
            loop: true,
            speed: 800,
            grabCursor: true,
            autoplay: {
                delay: 4500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 12
                },
                640: {
                    slidesPerView: 1,
                    spaceBetween: 14
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 16
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 22
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 22
                }
            }
        });
    </script>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) target.scrollIntoView({
                    behavior: "smooth"
                });
            });
        });
    </script>

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

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            lucide.createIcons();

            const tabBtns = document.querySelectorAll('.tab-btn');
            const projectCards = document.querySelectorAll('.project-card');

            const lightbox = document.getElementById('project-lightbox');
            const lightboxImg = document.getElementById('lightbox-img');
            const lightboxTitle = document.getElementById('lightbox-title');
            const lightboxDesc = document.getElementById('lightbox-desc');
            const lightboxContent = document.getElementById('lightbox-content');

            let currentFilter = document.querySelector('.tab-btn.active').dataset.filter;
            let visibleCards = [];
            let currentImageIndex = 0;

            // ================= UPDATE VISIBLE =================

            function updateVisibleCards() {

                visibleCards = Array.from(projectCards).filter(card => {

                    return card.getAttribute('data-category') === currentFilter;

                });

            }

            // ================= FILTER =================

            function applyFilter(filterValue) {

                currentFilter = filterValue;

                updateVisibleCards();

                projectCards.forEach(card => {

                    const category = card.getAttribute('data-category');

                    if (category === filterValue) {

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

                        }, 300);

                    }

                });

            }

            // ================= OPEN LIGHTBOX =================

            function openLightbox(index) {

                currentImageIndex = index;

                const card = visibleCards[currentImageIndex];

                lightboxImg.src = card.querySelector('img').src;

                lightboxTitle.innerText = card.querySelector('h3').innerText;

                lightboxDesc.innerText = card.querySelector('p').innerText;

                document.body.classList.add('lightbox-open');

                lightbox.classList.remove('hidden');

                lightbox.classList.add('flex');

                setTimeout(() => {

                    lightbox.classList.remove('opacity-0');

                    lightboxContent.classList.remove('scale-95');

                    lightboxContent.classList.add('scale-100');

                }, 10);

            }

            // ================= CLOSE =================

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

            // ================= DEFAULT =================

            applyFilter(currentFilter);

            // ================= TAB CLICK =================

            tabBtns.forEach(btn => {

                btn.addEventListener('click', function() {

                    tabBtns.forEach(t => {

                        t.classList.remove('bg-[#6D4AFF]', 'text-white', 'shadow-md',
                            'active');

                        t.classList.add('bg-transparent', 'text-brand-dark');

                    });

                    this.classList.add('bg-[#6D4AFF]', 'text-white', 'shadow-md', 'active');

                    this.classList.remove('bg-transparent', 'text-brand-dark');

                    applyFilter(this.dataset.filter);

                });

            });

            // ================= CARD CLICK =================

            projectCards.forEach(card => {

                card.addEventListener('click', function() {

                    const index = visibleCards.indexOf(this);

                    if (index > -1) {

                        openLightbox(index);

                    }

                });

            });

            // ================= NEXT =================

            document.getElementById('lightbox-next').addEventListener('click', (e) => {

                e.stopPropagation();

                currentImageIndex = (currentImageIndex + 1) % visibleCards.length;

                openLightbox(currentImageIndex);

            });

            // ================= PREV =================

            document.getElementById('lightbox-prev').addEventListener('click', (e) => {

                e.stopPropagation();

                currentImageIndex = (currentImageIndex - 1 + visibleCards.length) % visibleCards.length;

                openLightbox(currentImageIndex);

            });

            // ================= CLOSE =================

            document.getElementById('lightbox-close').addEventListener('click', closeLightbox);

            lightbox.addEventListener('click', (e) => {

                if (e.target === lightbox) {

                    closeLightbox();

                }

            });

        });
    </script>

</body>

</html>
