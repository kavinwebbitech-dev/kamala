<section class="services-section" id="services">
    <div class="services-container">
        <div class="section-title text-center wow fadeInUp">
            <span class="sub-title st-one">What We Offer</span>
            <h2 class="font-45">Our Specialized Digital Marketing Services</h2>
            <p class="custom-para mb-5">As a leading digital marketing company in Coimbatore, Kamala Technologies provides a
                complete range of digital marketing solutions tailored to meet all your online business needs and
                deliver measurable results.</p>
        </div>

        <div class="services-grid">
            @foreach ($services as $service)
                <a href="{{ route('service.detail', $service->slug ?? $service->name) }}" class="service-card">
                    <div class="card-glow"></div>

                    <div class="service-content">
                        <div class="service-icon">
                            <img src="{{ asset($service->image ?? 'frontend/assets/images/cardicons/logo.png') }}"
                                alt="{{ $service->name }}">
                        </div>

                        <h3 class="service-name">{{ $service->name }}</h3>
                    </div>

                    <div class="service-action">
                        <span>Learn More</span>
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

<style>
    /* Base Section Styling */
    .services-section {
        padding: 40px 20px;
        background: #ffffff;
        font-family: 'Poppins', sans-serif;
    }

    .services-container {
        max-width: 1240px;
        margin: 0 auto;
    }

    .section-title {
        text-align: center;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }

    .font-45 {
        font-size: clamp(28px, 4vw, 42px);
        font-weight: 800;
        color: #1a1a1a;
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .custom-para {
        color: #666;
        line-height: 1.7;
        font-size: 16px;
    }

    /* Grid Layout */


    .services-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 30px;
    }

    /* CARD DESIGN */
    .service-card {
        position: relative;
        background: #ffffff;
        border: 1px solid #f0f0f0;
        border-radius: 20px;
        padding: 35px 25px;
        text-decoration: none;
        color: #333;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
    }

    .card-glow {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at 100% 0%, rgba(0, 175, 239, 0.1) 0%, transparent 50%);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .service-card:hover {
        transform: translateY(-10px);
        border-color: #00AFEF;
        box-shadow: 0 20px 40px rgba(0, 175, 239, 0.15);
    }

    .service-card:hover .card-glow {
        opacity: 1;
    }

    /* Icon Styling */
    .service-icon {
        width: 60px;
        height: 60px;
        background: #f1faff;
        /* Light tint of #00AFEF */
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 25px;
        transition: all 0.4s ease;
    }

    .service-card:hover .service-icon {
        background: #00AFEF;
        transform: scale(1.1);
    }

    .service-card:hover .service-icon img {
        filter: brightness(0) invert(1);
    }

    .service-icon img {
        width: 32px;
        height: 32px;
        object-fit: contain;
        transition: all 0.4s ease;
    }

    /* Typography Fixes */
    .service-name {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 20px;
        line-height: 1.3;
        color: #1a1a1a;
        transition: color 0.3s ease;
    }

    /* Action Link */
    .service-action {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 15px;
        font-weight: 600;
        color: #00AFEF;
        transition: gap 0.3s ease;
    }

    .service-card:hover .service-action {
        gap: 12px;
    }

    /* Responsive Adjustments */
    @media (max-width: 1200px) {
        .services-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
    }

    @media (max-width: 992px) {
        .services-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 640px) {
        .services-grid {
            grid-template-columns: 1fr;
        }

        .service-card {
            padding: 30px;
        }
    }
</style>
