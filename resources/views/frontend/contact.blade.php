@extends('frontend.layouts.master')
@section('title', 'Contact Us')
@section('content')


    <section class="relative pt-32 pb-12 overflow-hidden bg-white border-b border-slate-100">

        <div
            class="absolute top-0 right-0 w-[400px] h-[400px] bg-gradient-to-bl from-brand-secondary/15 to-brand-primary/15 rounded-full blur-[80px] -z-10 animate-blob">
        </div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-gradient-to-tr from-brand-primary/10 to-transparent rounded-full blur-[60px] -z-10 animate-blob"
            style="animation-delay: 2s;"></div>

        <div class="absolute top-1/2 left-[10%] animate-float opacity-30 pointer-events-none">
            <svg class="w-10 h-10 text-[#FF6600]" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
            </svg>
        </div>
        <div class="absolute top-1/3 right-[15%] animate-float-delayed opacity-20 pointer-events-none">
            <svg class="w-24 h-24 text-brand-primary animate-spin-slow" viewBox="0 0 100 100" fill="none"
                stroke="currentColor" stroke-width="2">
                <circle cx="50" cy="50" r="40" stroke-dasharray="8 8" />
                <circle cx="50" cy="50" r="25" />
            </svg>
        </div>

        <div class="container max-w-[1200px] mx-auto px-6 text-center relative z-10 reveal-up">
            <span
                class="bg-[#F3F0FF] text-brand-primary font-bold text-[12px] uppercase tracking-[0.15em] px-4 py-1.5 rounded-full inline-block mb-4 border border-brand-primary/10">
                Let's Talk
            </span>
            <h1
                class="text-3xl md:text-5xl lg:text-[54px] font-extrabold text-brand-dark mb-4 tracking-tight leading-[1.1]">
                We'd Love To Hear <br class="hidden md:block" />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-primary to-brand-secondary">From
                    You</span>
            </h1>
            <p class="text-brand-gray text-[16px] leading-relaxed max-w-2xl mx-auto mb-6">
                Whether you have a question about our services, pricing, need a demo, or anything else, our team is ready to
                answer all your questions.
            </p>
            <div
                class="flex items-center justify-center gap-3 text-[15px] font-bold text-brand-gray bg-[#F8F9FA] w-max mx-auto px-6 py-2.5 rounded-full border border-slate-100 shadow-sm">
                <a href="{{ route('home') }}" class="hover:text-brand-primary transition-colors flex items-center gap-2">
                    <i data-lucide="home" class="w-4 h-4"></i> Home
                </a>
                <i data-lucide="chevron-right" class="w-4 h-4 text-slate-300"></i>
                <span class="text-brand-primary">Contact Us</span>
            </div>
        </div>
    </section>

    <section class="py-16 relative overflow-hidden">

        <div class="absolute inset-0 z-0 opacity-[0.03]"
            style="background-image: radial-gradient(#6D4AFF 1px, transparent 1px); background-size: 24px 24px;"></div>

        <div class="container max-w-[1200px] mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-10 lg:gap-12 items-start">

                <div class="lg:col-span-5 space-y-4">

                    <div class="mb-6 reveal-up">
                        <h2 class="text-2xl md:text-3xl font-extrabold text-brand-dark mb-2 tracking-tight">Get In Touch
                        </h2>
                        <p class="text-brand-gray text-[15px] leading-relaxed">
                            Reach out to us directly via phone or email, or drop by our office.
                        </p>
                    </div>

                    <div
                        class="bg-white p-6 rounded-[1.5rem] shadow-sm border border-slate-100 hover:border-brand-primary/20 hover:shadow-soft transition-all duration-300 reveal-up group flex gap-5 items-start">
                        <div
                            class="w-12 h-12 rounded-xl bg-[#F3F0FF] text-brand-primary flex items-center justify-center shrink-0 group-hover:-translate-y-1 group-hover:bg-brand-primary group-hover:text-white transition-all shadow-inner">
                            <i data-lucide="map-pin" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-brand-dark mb-1">Headquarters</h4>
                            <p class="text-brand-gray text-[14px] leading-relaxed">
                                13/1B, Brooke Bond Layout,<br />
                                Krishnasamy Mudaliar Road,<br />
                                Coimbatore – 641002
                            </p>
                        </div>
                    </div>

                    <div
                        class="bg-white p-6 rounded-[1.5rem] shadow-sm border border-slate-100 hover:border-brand-secondary/20 hover:shadow-soft transition-all duration-300 reveal-up delay-100 group flex gap-5 items-start">
                        <div
                            class="w-12 h-12 rounded-xl bg-[#FDF0F9] text-brand-secondary flex items-center justify-center shrink-0 group-hover:-translate-y-1 group-hover:bg-brand-secondary group-hover:text-white transition-all shadow-inner">
                            <i data-lucide="phone-call" class="w-5 h-5"></i>
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

                    <div
                        class="bg-white p-6 rounded-[1.5rem] shadow-sm border border-slate-100 hover:border-[#0A7EFA]/20 hover:shadow-soft transition-all duration-300 reveal-up delay-200 group flex gap-5 items-start">
                        <div
                            class="w-12 h-12 rounded-xl bg-[#E0F2FE] text-[#0A7EFA] flex items-center justify-center shrink-0 group-hover:-translate-y-1 group-hover:bg-[#0A7EFA] group-hover:text-white transition-all shadow-inner">
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

                <div class="lg:col-span-7 reveal-up relative">

                    <div
                        class="absolute inset-0 bg-gradient-to-br from-brand-primary to-brand-secondary rounded-[2rem] blur-xl opacity-15 transform translate-y-2 translate-x-2 -z-10">
                    </div>

                    <div class="bg-white rounded-[2rem] p-8 md:p-10 shadow-soft border border-slate-400 relative z-10">
                        <div class="mb-6">
                            <h3 class="text-[26px] font-extrabold text-brand-dark mb-2 tracking-tight">Send Us a Message
                            </h3>
                            <p class="text-brand-gray text-[14px]">Fill out the form below and we will get back to you
                                shortly.</p>
                        </div>

                        <form id="contact-form" class="space-y-4">
                            <input type="hidden" name="type" value="Contact Us">
                            <div class="grid md:grid-cols-2 gap-4">
                                <!-- Name -->
                                <div class="space-y-1.5">
                                    <label class="text-[12px] font-bold text-brand-dark uppercase tracking-wider ml-1">
                                        Full Name *
                                    </label>

                                    <input type="text" name="name" placeholder="John Doe"
                                        class="w-full bg-[#F8F9FA] border border-slate-400 focus:bg-white focus:border-brand-primary focus:ring-2 focus:ring-brand-primary/10 rounded-xl px-5 py-3 text-[14px] text-brand-dark outline-none transition-all placeholder:text-slate-400">

                                    <span class="error-name text-red-500 text-xs"></span>
                                </div>

                                <!-- Phone -->
                                <div class="space-y-1.5">
                                    <label class="text-[12px] font-bold text-brand-dark uppercase tracking-wider ml-1">
                                        Phone Number *
                                    </label>

                                    <input type="tel" name="phone" placeholder="+91 9876543210"
                                        class="w-full bg-[#F8F9FA] border border-slate-400 focus:bg-white focus:border-brand-primary focus:ring-2 focus:ring-brand-primary/10 rounded-xl px-5 py-3 text-[14px] text-brand-dark outline-none transition-all placeholder:text-slate-400">

                                    <span class="error-phone text-red-500 text-xs"></span>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="space-y-1.5">
                                <label class="text-[12px] font-bold text-brand-dark uppercase tracking-wider ml-1">
                                    Email Address *
                                </label>

                                <input type="email" name="email" placeholder="john@company.com"
                                    class="w-full bg-[#F8F9FA] border border-slate-400 focus:bg-white focus:border-brand-primary focus:ring-2 focus:ring-brand-primary/10 rounded-xl px-5 py-3 text-[14px] text-brand-dark outline-none transition-all placeholder:text-slate-400">

                                <span class="error-email text-red-500 text-xs"></span>
                            </div>

                            <!-- Subject -->
                            <div class="space-y-1.5">
                                <label class="text-[12px] font-bold text-brand-dark uppercase tracking-wider ml-1">
                                    Interested In *
                                </label>

                                <div class="relative">
                                    <select name="subject"
                                        class="w-full bg-[#F8F9FA] border border-slate-400 focus:bg-white focus:border-brand-primary focus:ring-2 focus:ring-brand-primary/10 rounded-xl px-5 py-3 text-[14px] text-brand-dark outline-none transition-all appearance-none cursor-pointer">

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
                            <div class="space-y-1.5">
                                <label class="text-[12px] font-bold text-brand-dark uppercase tracking-wider ml-1">
                                    Your Message *
                                </label>

                                <textarea rows="4" name="message" placeholder="Tell us about your project requirements..."
                                    class="w-full bg-[#F8F9FA] border border-slate-400 focus:bg-white focus:border-brand-primary focus:ring-2 focus:ring-brand-primary/10 rounded-xl px-5 py-3 text-[14px] text-brand-dark outline-none transition-all placeholder:text-slate-400 resize-none"></textarea>

                                <span class="error-message text-red-500 text-xs"></span>
                            </div>

                            <!-- Captcha -->
                            <div class="grid md:grid-cols-2 gap-4">

                                <div class="space-y-1.5">
                                    <label class="text-[12px] font-bold text-brand-dark uppercase tracking-wider ml-1">
                                        Captcha *
                                    </label>

                                    <input type="number" name="captcha" placeholder="Enter Answer"
                                        class="w-full bg-[#F8F9FA] border border-slate-400 focus:bg-white focus:border-brand-primary focus:ring-2 focus:ring-brand-primary/10 rounded-xl px-5 py-3 text-[14px] text-brand-dark outline-none transition-all placeholder:text-slate-400">

                                    <span class="error-captcha text-red-500 text-xs"></span>
                                </div>

                                <div class="space-y-1.5">
                                    <label class="text-[12px] font-bold text-brand-dark uppercase tracking-wider ml-1">
                                        Math Question
                                    </label>

                                    <div class="flex items-center gap-2">
                                        <input type="text" id="math-question" readonly
                                            class="w-full bg-[#F8F9FA] border border-slate-400 rounded-xl px-5 py-3 text-[14px] text-black outline-none">

                                        <button type="button" onclick="loadCaptcha()"
                                            class="px-4 py-3 rounded-xl bg-red-500 hover:bg-red-600 text-white transition">
                                            ↻
                                        </button>
                                    </div>
                                </div>

                            </div>

                            <!-- Submit -->
                            <button type="submit"
                                class="w-full py-4 mt-2 text-[15px] font-bold text-white bg-gradient-to-r from-brand-primary to-brand-secondary hover:from-[#5b3ce0] hover:to-[#c63cdb] rounded-xl transition-all shadow-[0_10px_20px_rgba(109,74,255,0.25)] hover:shadow-[0_15px_25px_rgba(109,74,255,0.35)] flex justify-center items-center gap-2 group transform hover:-translate-y-0.5">

                                Send Message

                                <i data-lucide="send"
                                    class="w-4 h-4 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                            </button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        lucide.createIcons();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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
