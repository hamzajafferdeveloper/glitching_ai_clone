@extends('layout.app')

<link rel="stylesheet" href="{{ asset('/assets/css/custom/welcome.css') }}">

@section('content')
    <section class="welcome-section mb-7">
        <div class="landing-section">
            <img class="index-light" src="{{ asset('assets/images/index-light.webp') }}" alt="index-light">
            <img class="index-particles" src="{{ asset('assets/images/index-particles.webp') }}" alt="particles">
            <div class="welcome-content">
                <img src="{{ asset('/storage/images/shopify-partner-green.webp') }}" alt="Tursted By Sopify Partner" width="180"
                    height="35" decoding="async" loading="lazy" />
                <h1 class="heading-h1">Start <span class="gradient-text">Dropshipping</span> with AI - Get Your Sale Or Your
                    Money Back</h1>
                <p>The only AI-powered platform that helps beginners launch their</p>
                <p>dropshipping business step by step — from product to profit</p>
                <div class="d-flex align-items-center justify-content-center gap-2">
                    <hr style="height: 1px; background-color: #34497a; width: 110px; border-radius: 9999px;">
                    <div class="d-flex justify-content-center align-items-center"
                        style="height: 20px; width: 20px; border: 1px solid #34497a; border-radius: 2px;">
                        <div style="height: 10px; width: 10px; background-color: #34497a; border-radius: 50%;"></div>
                    </div>
                    <hr style="height: 1px; background-color: #34497a; width: 110px; border-radius: 9999px;">
                </div>

                <div
                    class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-3 gap-lg-4 my-4 px-3 px-lg-0">

                    <!-- Item 1 -->
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-check-lg text-white fs-5"></i>
                        <span class="text-white tick-text">
                            AI-powered tools to find products, ads, and competitors
                        </span>
                    </div>

                    <!-- Item 2 -->
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-check-lg text-white fs-5"></i>
                        <span class="text-white tick-text">
                            Your store built and ready to launch
                        </span>
                    </div>

                    <!-- Item 3 -->
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-check-lg text-white fs-5"></i>
                        <span class="text-white tick-text">
                            Step-by-step guidance to get your first sale
                        </span>
                    </div>

                </div>

                <div class="d-flex flex-column flex-md-row gap-3 justify-content-center align-items-center w-100 p-4">
                    <a href="{{ route('auth.sign-up') }}"
                        class="btn welcome-action-btn btn-primary d-flex justify-content-center align-items-center">
                        Get Started
                    </a>
                    <button type="button" id="googleSignupBtn"
                        class="btn btn-primary signup-with-google welcome-action-btn d-flex align-items-center justify-content-center position-relative overflow-hidden text-white">
                        <!-- Icon -->
                        <img src="{{ asset('assets/icons/google.svg') }}" alt="google-logo" width="20" height="20">
                        <!-- Text -->
                        Sign Up With Google
                    </button>

                </div>

                <div class="text-center my-4">
                    <img src="{{ asset('/storage/images/showcase/lander-product-glitch-2.webp') }}" alt="showcase"
                        class="img-fluid rounded shadow" />
                </div>

            </div>
        </div>
        <div>
            <h1 class="heading-h2">
                Imagine Having A Dropshipping Store <br />
                Without the Hard Work
            </h1>
            <div class="before-after-section">
                <!-- Before -->
                <div class="p-5 text-light flex-fill" style="background:#0d1a33;">
                    <div class="d-flex align-items-center mb-4">
                        <div class="me-2 bg-secondary p-2" style="border-radius: 2px">
                            <i class="bi bi-exclamation-triangle-fill"></i>
                        </div>
                        <h3 class="m-0 fw-bold">Before</h3>
                    </div>

                    <ul class="list-unstyled mb-0">
                        <li class="d-flex mb-3">
                            <span class="before-cross text-dark"><i class="bi bi-x"></i></span>
                            Spending hours guessing which product to sell.
                        </li>
                        <li class="d-flex mb-3">
                            <span class="before-cross text-dark"><i class="bi bi-x"></i></span>
                            Building a website without knowing where to start.
                        </li>
                        <li class="d-flex">
                            <span class="before-cross text-dark"><i class="bi bi-x"></i></span>
                            Struggling to find ads that actually convert.
                        </li>
                    </ul>
                </div>

                <!-- After -->
                <div class="p-5 text-light flex-fill"
                    style="background: radial-gradient(circle at 50% 0%, rgba(255, 255, 255, 0.1) 0%, transparent 60%), rgb(37, 99, 235);">

                    <div class="d-flex align-items-center mb-4">
                        <div class="me-2 bg-light text-dark p-2 rounded">
                            🚀
                        </div>
                        <h3 class="m-0 fw-bold">After</h3>
                    </div>

                    <ul class="list-unstyled mb-0">
                        <li class="d-flex mb-3">
                            <span class="me-2 fs-5"><i class="bi bi-clock-fill"></i></span>
                            AI picks your winning product in minutes.
                        </li>
                        <li class="d-flex mb-3">
                            <span class="me-2 fs-5"><i class="bi bi-share-fill"></i></span>
                            Your store, ads, and visuals are ready to go.
                        </li>
                        <li class="d-flex">
                            <span class="me-2 fs-5"><i class="bi bi-patch-check-fill"></i></span>
                            You get sales or we give your money back.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="how-we-work my-5">
            <h1 class="header-h1">
                How Glitching Works
                — Step by Step
            </h1>

        </div>
        <div class="guarantee-your-success my-5">
            <h1 class="header-h1 px-2">
                Features That Guarantee Your Success
            </h1>
            <div class="text-center my-4">
                <img src="/storage/images/features-that-guarantee-your-success.png" alt="showcase"
                    class="img-fluid rounded shadow" />
            </div>
        </div>
        <div class="why-choose-us d-flex flex-column flex-lg-row align-items-center justify-content-between my-5 p-2 gap-4">

            <div class="mb-3 ps-3 ps-lg-0 mb-lg-0 w-100">
                <h1 class="header-h1 fw-bold">
                    Why Choose Glitching?
                </h1>
                <p>
                    Other dropshipping tools just give you features. <br />
                    Glitching gives you a business that works.
                </p>
                <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-3">
                        <span class="why-choose-us-check"><i class="bi bi-check"></i></span>
                        Proven Success: Real strategies that take products from $0 to $1,000 in days.
                    </li>
                    <li class="d-flex mb-3">
                        <span class="why-choose-us-check"><i class="bi bi-check"></i></span>
                        Done-for-You Setup: Website, ads, and tools ready for launch.
                    </li>
                    <li class="d-flex">
                        <span class="why-choose-us-check"><i class="bi bi-check"></i></span>
                        Risk-Free Guarantee: Get your first sale, or your money back.
                    </li>
                </ul>
            </div>

            <div class="text-center w-100">
                <img src="{{ asset('/storage/images/join-now.webp') }}" alt="join-now" class="img-fluid w-75 w-md-50 w-lg-100"
                    style="border: 1px solid #34497A;" />
            </div>

        </div>

        <div class="hear-from-our-customers my-5">
            <h1 class="header-h1 px-2">
                Hear From Our Customers
            </h1>
            <div class="p-4">
                <div class="row g-4 align-items-center text-light p-4"
                    style="background-color: #17223C; border: 1px solid #34497A;">

                    <!-- Image -->
                    <div class="col-12 col-lg-3 d-flex justify-content-center">
                        <div class="overflow-hidden rounded-1 responsive-img-wrapper">
                            <img src="https://www.glitching.ai/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fjeffrey.56983ae4.jpg&w=3840&q=75"
                                class="img-fluid rounded-3 w-100 h-100" alt="testimonial-user">
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="col-12 col-lg-9">
                        <p class="fs-5 mb-4">
                            I thought dropshipping was saturated, dead, and just too hard.
                            With this course, I jumped from nothing to consistent sales in
                            under a month. Their AI tools saved me countless hours.
                        </p>

                        <!-- Dots -->
                        <div class="d-flex gap-2 mb-3">
                            <span class="bg-light rounded-circle" style="width: 8px; height: 8px;"></span>
                            <span class="bg-secondary rounded-circle" style="width: 8px; height: 8px;"></span>
                            <span class="bg-secondary rounded-circle" style="width: 8px; height: 8px;"></span>
                        </div>

                        <!-- Name -->
                        <h6 class="fw-bold mb-0">Jacob D.</h6>
                        <small class="text-muted">E-commerce Owner – 1 Year</small>

                        <!-- Slider arrows -->
                        <div class="d-flex justify-content-lg-end justify-content-start gap-2 mt-4">
                            <button class="btn btn-outline-light px-3">
                                <i class="bi bi-chevron-left"></i>
                            </button>
                            <button class="btn btn-light px-3">
                                <i class="bi bi-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="ready-to-launch text-center">
            <img src="{{ asset('/storage/images/shopify-partner-green.webp') }}" alt="Tursted By Sopify Partner" width="180"
                height="35" decoding="async" loading="lazy" />
            <h1 class="header-h1">
                Ready To Launch Your <br /> Dropshipping Business With AI?
            </h1>
            <p>Stop guessing and start selling. Glithing give to everything you need to launch, grow and succeed.</p>
            <div class="d-flex flex-column flex-md-row gap-3 justify-content-center align-items-center w-100 p-4">
                <a href="{{ route('auth.sign-up') }}"
                    class="btn ready-to-launch-action-btn d-flex justify-content-center align-items-center">
                    Get Started
                </a>
                <button type="button" id="googleSignupBtn"
                    class="btn btn-primary welcome-action-btn signup-with-google d-flex align-items-center justify-content-center position-relative overflow-hidden text-white">
                    <!-- Icon -->
                    <img src="{{ asset('assets/icons/google.svg') }}" alt="google-logo" width="20" height="20">
                    <!-- Text -->
                    Sign Up With Google
                </button>
            </div>
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill text-white">

                <!-- Avatars -->
                <div class="d-flex">
                    <img src="https://www.glitching.ai/_next/image?url=%2Fguy.jpg&w=48&q=75" class="rounded-circle"
                        style="width:28px; height:28px; object-fit:cover;">
                    <img src="https://www.glitching.ai/_next/image?url=%2Fguy.jpg&w=48&q=75" class="rounded-circle ms-n2"
                        style="width:28px; height:28px; object-fit:cover;">
                    <img src="https://www.glitching.ai/_next/image?url=%2Fguy.jpg&w=48&q=75" class="rounded-circle ms-n2"
                        style="width:28px; height:28px; object-fit:cover;">
                </div>

                <!-- Text -->
                <span class="fw-semibold">
                    Join 5,000+ merchants
                </span>
            </div>
        </div>
        <div class="position-relative w-100 overflow-hidden" style="background:#0D1629; height:auto;">

            <!-- Gradient Overlay -->
            <div class="position-absolute top-0 start-0 w-100 h-100"
                style="background:linear-gradient(to bottom, transparent, rgba(13,22,41,0.8)); z-index:20;">
            </div>

            <!-- Text -->
            <div class="w-100 fs-100 text-center position-relative glitch-text">
                GLITCHING
            </div>

        </div>

    </section>
@endsection

@push('scripts')
    <script>
        $('#googleSignupBtn').on('click', function() {
            window.location.href = "{{ route('auth.google.redirect') }}";
        });
    </script>
@endpush
