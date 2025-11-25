<link rel="stylesheet" href="{{ asset('/assets/css/custom/app-header.css') }}">

<nav id="mainNavbar" class="navbar navbar-expand-lg py-4 fixed-top shadow-sm">
    <div class="container d-flex align-items-center justify-content-between">

        {{-- Logo --}}
        <a href="#" class="d-flex align-items-center">
            <img class="app-header me-4" src="{{ asset('/storage/images/header-logo.png') }}" alt="Logo">
        </a>
        {{-- Nav Links --}}
        @include('components.partials.nav-items')

        {{-- Right Buttons --}}
        <div class="nav-bar-buttons align-items-center gap-3">
            <a href="{{ route('auth.login') }}" class="text-light text-decoration-none sign-in-link">Sign In</a>
            <a href="{{ route('auth.sign-up') }}" class="btn btn-primary px-3">Get Started</a>
        </div>
        <div>
            <button class="navbar-toggler" type="button">
                <i class="bi bi-list navbar-toggler-icon-custom"></i>
            </button>
        </div>
    </div>

    {{-- Mobile Sidebar --}}
    @include('components.partials.mobile-menu')
</nav>

<div id="scroll-border"></div>

@push('scripts')
<script>
$(document).ready(function () {
    $(window).on('scroll', function () {
        const border = $('#scroll-border');
        const navbar = $('#mainNavbar');

        if ($(this).scrollTop() > 50) {
            border.addClass('active');
            navbar.addClass('scrolled');
        } else {
            border.removeClass('active');
            navbar.removeClass('scrolled');
        }
    });

    let hoverTimeout;

    $('.nav-item.dropdown > .nav-link').removeAttr('data-bs-toggle');

    $('.nav-item.dropdown').each(function () {
        const item = $(this);
        const link = item.find('.nav-link');
        const menu = item.find('.dropdown-menu');

        // --- CLICK TOGGLE (Mobile) ---
        link.on('click', function (e) {
            if (window.innerWidth < 992) {
                e.preventDefault();
                e.stopPropagation();

                const isOpen = item.hasClass('show');
                $('.nav-item.dropdown').removeClass('show');
                $('.dropdown-menu').removeClass('show');

                if (!isOpen) {
                    item.addClass('show');
                    menu.addClass('show');
                }
            }
        });

        // --- HOVER (Desktop) ---
        item.on('mouseenter', function () {
            if (window.innerWidth >= 992) {
                clearTimeout(hoverTimeout);
                $('.nav-item.dropdown').removeClass('show');
                $('.dropdown-menu').removeClass('show');
                item.addClass('show');
                menu.addClass('show');
            }
        });

        item.on('mouseleave', function () {
            if (window.innerWidth >= 992) {
                hoverTimeout = setTimeout(() => {
                    item.removeClass('show');
                    menu.removeClass('show');
                }, 200);
            }
        });
    });

    $('.navbar-toggler').on('click', function(e) {
        e.stopPropagation();
        console.log('You Click Me')
        $('#mobileMenu').toggleClass('open');
    });

    $(document).on('click', function(e) {
        if (!$(e.target).closest('#mobileMenu, .navbar-toggler').length) {
            $('#mobileMenu').removeClass('open');
        }
    });


    $(document).on('click', function (e) {
        if (!$(e.target).closest('.nav-item.dropdown').length) {
            $('.nav-item.dropdown').removeClass('show');
            $('.dropdown-menu').removeClass('show');
        }
    });

    $('.mobile-toggle').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        const target = $(this).data('target');
        const menu = $(target);
        const icon = $(this).find('i');

        $('.mobile-dropdown').not(menu).slideUp(250);
        $('.mobile-toggle i').not(icon).removeClass('rotated');

        menu.stop(true, true).slideToggle(250);

        icon.toggleClass('rotated');
    });

    $(document).on('click', function (e) {
        if (!$(e.target).closest('.mobile-menu').length) {
            $('.mobile-dropdown').slideUp(250);
        }
    });

    $(window).on('resize', function () {
        $('.nav-item.dropdown').removeClass('show');
        $('.dropdown-menu').removeClass('show');
    });
});
</script>
@endpush
