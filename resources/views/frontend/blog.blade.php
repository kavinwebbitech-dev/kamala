  @extends('frontend.layouts.master')
  @section('title', 'No.1 Digital Marketing and SEO Company in Coimbatore')
  @section('content')


      <section class="relative pt-40 pb-24 overflow-hidden">

          <div
              class="absolute top-0 right-0 w-[500px] h-[500px] bg-gradient-to-bl from-brand-secondary/10 to-brand-primary/10 rounded-full blur-[80px] -z-10 animate-blob pointer-events-none">
          </div>
          <div class="absolute top-1/4 left-0 w-[400px] h-[400px] bg-gradient-to-tr from-brand-primary/10 to-transparent rounded-full blur-[80px] -z-10 animate-blob pointer-events-none"
              style="animation-delay: 2s;"></div>

          <div class="absolute inset-0 z-0 opacity-[0.03] pointer-events-none"
              style="background-image: radial-gradient(#6D4AFF 1px, transparent 1px); background-size: 24px 24px;"></div>

          <div class="container max-w-[1200px] mx-auto px-6 relative z-10">

              <div class="text-center max-w-3xl mx-auto mb-16 reveal-up">
                  <span
                      class="bg-white text-brand-primary font-bold text-[13px] uppercase tracking-[0.15em] px-5 py-2 rounded-full inline-flex items-center gap-2 mb-6 border border-slate-200 shadow-sm">
                      <span class="w-2 h-2 rounded-full bg-brand-secondary animate-pulse"></span>
                      Our News & Blog
                  </span>

                  <h1 class="text-4xl md:text-5xl font-extrabold text-brand-dark mb-4 tracking-tight leading-[1.2]">
                      Get Every Single Update <br />
                      <span
                          class="text-transparent bg-clip-text bg-gradient-to-r from-brand-primary to-brand-secondary">Latest
                          News & Tips</span>
                  </h1>
              </div>

              {{-- <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 gap-y-12">

                  <article
                      class="bg-white p-3 rounded-[2rem] shadow-soft hover:shadow-hover border border-slate-100 transition-all duration-500 group flex flex-col reveal-up">

                      <div class="relative mb-6">
                          <div class="h-[220px] rounded-[1.5rem] overflow-hidden bg-slate-100 relative">
                              <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                  alt="Digital Marketing"
                                  class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                              <div
                                  class="absolute inset-0 bg-brand-dark/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                              </div>
                          </div>

                          <div
                              class="absolute right-5 -bottom-5 w-12 h-12 bg-brand-dark group-hover:bg-brand-primary text-white rounded-xl shadow-lg group-hover:shadow-glow flex items-center justify-center transition-all duration-300 z-10 group-hover:-translate-y-1">
                              <i data-lucide="arrow-right"
                                  class="w-5 h-5 transform group-hover:translate-x-1 transition-transform"></i>
                          </div>
                      </div>

                      <div class="px-4 pb-5 flex-grow flex flex-col">
                          <div class="flex items-center gap-2 text-slate-400 text-[13px] font-semibold mb-3">
                              <i data-lucide="calendar" class="w-4 h-4"></i> Mar 02, 2026
                          </div>
                          <h3
                              class="text-[20px] font-extrabold text-brand-dark leading-snug group-hover:text-brand-primary transition-colors line-clamp-2">
                              Coimbatore's Top 10 Digital Marketing Companies
                          </h3>
                      </div>
                  </article>

                  <article
                      class="bg-white p-3 rounded-[2rem] shadow-soft hover:shadow-hover border border-slate-100 transition-all duration-500 group flex flex-col reveal-up delay-100">
                      <div class="relative mb-6">
                          <div class="h-[220px] rounded-[1.5rem] overflow-hidden bg-slate-100 relative">
                              <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                  alt="SEO Mistakes"
                                  class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                              <div
                                  class="absolute inset-0 bg-brand-dark/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                              </div>
                          </div>
                          <div
                              class="absolute right-5 -bottom-5 w-12 h-12 bg-brand-dark group-hover:bg-brand-primary text-white rounded-xl shadow-lg group-hover:shadow-glow flex items-center justify-center transition-all duration-300 z-10 group-hover:-translate-y-1">
                              <i data-lucide="arrow-right"
                                  class="w-5 h-5 transform group-hover:translate-x-1 transition-transform"></i>
                          </div>
                      </div>
                      <div class="px-4 pb-5 flex-grow flex flex-col">
                          <div class="flex items-center gap-2 text-slate-400 text-[13px] font-semibold mb-3">
                              <i data-lucide="calendar" class="w-4 h-4"></i> Mar 11, 2026
                          </div>
                          <h3
                              class="text-[20px] font-extrabold text-brand-dark leading-snug group-hover:text-brand-primary transition-colors line-clamp-2">
                              10 SEO Mistakes Causing Ranking Drops After Updates
                          </h3>
                      </div>
                  </article>

                  <article
                      class="bg-white p-3 rounded-[2rem] shadow-soft hover:shadow-hover border border-slate-100 transition-all duration-500 group flex flex-col reveal-up delay-200">
                      <div class="relative mb-6">
                          <div class="h-[220px] rounded-[1.5rem] overflow-hidden bg-slate-100 relative">
                              <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                  alt="Branding Companies"
                                  class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                              <div
                                  class="absolute inset-0 bg-brand-dark/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                              </div>
                          </div>
                          <div
                              class="absolute right-5 -bottom-5 w-12 h-12 bg-brand-dark group-hover:bg-brand-primary text-white rounded-xl shadow-lg group-hover:shadow-glow flex items-center justify-center transition-all duration-300 z-10 group-hover:-translate-y-1">
                              <i data-lucide="arrow-right"
                                  class="w-5 h-5 transform group-hover:translate-x-1 transition-transform"></i>
                          </div>
                      </div>
                      <div class="px-4 pb-5 flex-grow flex flex-col">
                          <div class="flex items-center gap-2 text-slate-400 text-[13px] font-semibold mb-3">
                              <i data-lucide="calendar" class="w-4 h-4"></i> Mar 19, 2026
                          </div>
                          <h3
                              class="text-[20px] font-extrabold text-brand-dark leading-snug group-hover:text-brand-primary transition-colors line-clamp-2">
                              Top 10 Branding Companies in Coimbatore 2026
                          </h3>
                      </div>
                  </article>

                  <article
                      class="bg-white p-3 rounded-[2rem] shadow-soft hover:shadow-hover border border-slate-100 transition-all duration-500 group flex flex-col reveal-up">
                      <div class="relative mb-6">
                          <div class="h-[220px] rounded-[1.5rem] overflow-hidden bg-slate-100 relative">
                              <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                  alt="E-commerce SEO"
                                  class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                              <div
                                  class="absolute inset-0 bg-brand-dark/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                              </div>
                          </div>
                          <div
                              class="absolute right-5 -bottom-5 w-12 h-12 bg-brand-dark group-hover:bg-brand-primary text-white rounded-xl shadow-lg group-hover:shadow-glow flex items-center justify-center transition-all duration-300 z-10 group-hover:-translate-y-1">
                              <i data-lucide="arrow-right"
                                  class="w-5 h-5 transform group-hover:translate-x-1 transition-transform"></i>
                          </div>
                      </div>
                      <div class="px-4 pb-5 flex-grow flex flex-col">
                          <div class="flex items-center gap-2 text-slate-400 text-[13px] font-semibold mb-3">
                              <i data-lucide="calendar" class="w-4 h-4"></i> Mar 24, 2026
                          </div>
                          <h3
                              class="text-[20px] font-extrabold text-brand-dark leading-snug group-hover:text-brand-primary transition-colors line-clamp-2">
                              Top 10 E-commerce SEO Companies for Scaling Fast
                          </h3>
                      </div>
                  </article>

                  <article
                      class="bg-white p-3 rounded-[2rem] shadow-soft hover:shadow-hover border border-slate-100 transition-all duration-500 group flex flex-col reveal-up delay-100">
                      <div class="relative mb-6">
                          <div class="h-[220px] rounded-[1.5rem] overflow-hidden bg-slate-100 relative">
                              <img src="https://images.unsplash.com/photo-1507238692062-71100af37bb3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                  alt="GEO Success"
                                  class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                              <div
                                  class="absolute inset-0 bg-brand-dark/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                              </div>
                          </div>
                          <div
                              class="absolute right-5 -bottom-5 w-12 h-12 bg-brand-dark group-hover:bg-brand-primary text-white rounded-xl shadow-lg group-hover:shadow-glow flex items-center justify-center transition-all duration-300 z-10 group-hover:-translate-y-1">
                              <i data-lucide="arrow-right"
                                  class="w-5 h-5 transform group-hover:translate-x-1 transition-transform"></i>
                          </div>
                      </div>
                      <div class="px-4 pb-5 flex-grow flex flex-col">
                          <div class="flex items-center gap-2 text-slate-400 text-[13px] font-semibold mb-3">
                              <i data-lucide="calendar" class="w-4 h-4"></i> Mar 26, 2026
                          </div>
                          <h3
                              class="text-[20px] font-extrabold text-brand-dark leading-snug group-hover:text-brand-primary transition-colors line-clamp-2">
                              10 Tips to Optimize Your Content for GEO Success
                          </h3>
                      </div>
                  </article>

                  <article
                      class="bg-white p-3 rounded-[2rem] shadow-soft hover:shadow-hover border border-slate-100 transition-all duration-500 group flex flex-col reveal-up delay-200">
                      <div class="relative mb-6">
                          <div class="h-[220px] rounded-[1.5rem] overflow-hidden bg-slate-100 relative">
                              <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                  alt="AEO vs SEO"
                                  class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                              <div
                                  class="absolute inset-0 bg-brand-dark/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                              </div>
                          </div>
                          <div
                              class="absolute right-5 -bottom-5 w-12 h-12 bg-brand-dark group-hover:bg-brand-primary text-white rounded-xl shadow-lg group-hover:shadow-glow flex items-center justify-center transition-all duration-300 z-10 group-hover:-translate-y-1">
                              <i data-lucide="arrow-right"
                                  class="w-5 h-5 transform group-hover:translate-x-1 transition-transform"></i>
                          </div>
                      </div>
                      <div class="px-4 pb-5 flex-grow flex flex-col">
                          <div class="flex items-center gap-2 text-slate-400 text-[13px] font-semibold mb-3">
                              <i data-lucide="calendar" class="w-4 h-4"></i> Mar 26, 2026
                          </div>
                          <h3
                              class="text-[20px] font-extrabold text-brand-dark leading-snug group-hover:text-brand-primary transition-colors line-clamp-2">
                              AEO vs SEO: What's the Real Difference in 2026?
                          </h3>
                      </div>
                  </article>

              </div> --}}
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

              <div class="mt-20 flex items-center justify-center gap-3 reveal-up">
                  @if ($blogs->hasPages())
                      <div class="mt-20">
                          {{ $blogs->links() }}
                      </div>
                  @endif
              </div>

          </div>
      </section>

  @endsection
