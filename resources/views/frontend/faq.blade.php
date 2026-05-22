<section class="py-24 bg-[#F8F9FA] relative">
    <div class="container max-w-[800px] mx-auto px-6">

        <!-- Heading -->
        <div class="text-center mb-16 reveal-up">
            <h4 class="text-brand-primary font-bold tracking-[0.2em] uppercase text-sm mb-4">
                FAQS
            </h4>

            <h2 class="text-4xl font-bold text-brand-dark mb-4 tracking-tight">
                Frequently Asked Questions
            </h2>
        </div>

        <!-- FAQ List -->
        <div class="space-y-4 reveal-up">

            @foreach ($faqs as $index => $faq)
                <div
                    class="faq-item bg-white border border-slate-200 rounded-[1.5rem] overflow-hidden group hover:border-brand-primary/50 transition-all shadow-sm"
                    aria-expanded="false">

                    <!-- Question -->
                    <button
                        class="faq-btn w-full px-8 py-6 text-left flex justify-between items-center focus:outline-none"
                        aria-controls="faq-answer-{{ $index }}"
                        aria-expanded="false"
                        id="faq-question-{{ $index }}">

                        <span class="font-bold text-brand-dark text-lg">
                            {{ $faq->question ?? '' }}
                        </span>

                        <div
                            class="faq-icon-wrapper w-10 h-10 rounded-full bg-[#F8F9FA] flex items-center justify-center shrink-0 group-hover:bg-brand-primary group-hover:text-white transition-colors text-brand-dark">

                            <i data-lucide="plus"
                                class="faq-icon w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>

                    <!-- Answer -->
                    <div id="faq-answer-{{ $index }}"
                        class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out"
                        role="region"
                        aria-labelledby="faq-question-{{ $index }}">

                        <div
                            class="px-8 pb-8 pt-2 text-brand-gray leading-relaxed border-t border-slate-100 mx-8 mt-2">
                            {!! $faq->answer ?? '' !!}
                        </div>

                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach((item) => {

            const btn = item.querySelector('.faq-btn');
            const content = item.querySelector('.faq-content');
            const icon = item.querySelector('.faq-icon');

            btn.addEventListener('click', () => {

                const isOpen = item.getAttribute('aria-expanded') === 'true';

                // Close all
                faqItems.forEach((faq) => {

                    faq.setAttribute('aria-expanded', 'false');

                    faq.querySelector('.faq-btn')
                        .setAttribute('aria-expanded', 'false');

                    faq.querySelector('.faq-content').style.maxHeight = '0px';

                    faq.querySelector('.faq-icon')
                        .classList.remove('rotate-45');
                });

                // Open current
                if (!isOpen) {

                    item.setAttribute('aria-expanded', 'true');

                    btn.setAttribute('aria-expanded', 'true');

                    content.style.maxHeight = content.scrollHeight + 'px';

                    icon.classList.add('rotate-45');
                }
            });

        });

    });
</script>