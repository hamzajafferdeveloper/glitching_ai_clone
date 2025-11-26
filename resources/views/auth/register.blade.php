@extends('layout.base')

<style>
    .container-fluid {
        --bs-gutter-x: 12rem !important;
    }
</style>

@section('base-content')
    <div class="row g-0">

        <div class="col-lg-6 col-12 order-lg-1 order-2">
            <div class="page-scanning-bg">
                <div
                    class="min-vh-100 d-flex flex-column justify-content-center align-items-center gap-4 p-4 position-relative overflow-hidden">

                    <img src="{{ asset('/storage/images/header-logo.png') }}" class="img-fluid" style="width: 13rem;"
                        alt="logo">

                    <div class="card shadow rounded-1 w-100 "
                        style="max-width: 25rem; background-color: hsl(222.9, 84%, 4.9%); border: 1px solid hsl(217.2, 32.6%, 17.5%);">

                        <div class="card-header border-0 p-4">
                            <h6 class="fw-bold mb-0 text-white">Sign In To Your Account</h6>
                        </div>

                        <div class="card-body p-4 pt-0" style="color: hsl(215, 20.2%, 65.1%);">

                            {{-- Google Login Button --}}
                            <button id="googleSignupBtn"
                                class="btn w-100 d-flex align-items-center justify-content-center gap-2 rounded-1 py-2 mb-4 text-white"
                                style="background-color: hsl(217.2, 32.6%, 17.5%) ">

                                <img src="{{ asset('assets/icons/google.svg') }}" alt="google-logo" width="20" height="20">
                                Sign Up With Google
                            </button>

                            <hr style="border-color: #333;">

                            <form id="registerForm">

                                @csrf

                                <div class="mb-3">
                                    <label class="small text-white">Email</label>
                                    <input type="email" class="form-control rounded-1" name="email" id="email"
                                        placeholder="Email">
                                </div>

                                <div class="mb-3">
                                    <label class="small text-white">Password</label>
                                    <input type="password" class="form-control rounded-1" name="password" id="password"
                                        placeholder="Password">
                                </div>

                                <div class="mb-3">
                                    <label class="small text-white">Phone Number (optional)</label>
                                    <input class="form-control rounded-1" name="phone_number"
                                        id="phone_number" placeholder="Enter Phone Number">
                                </div>

                                <div id="errorBox" class="text-danger small mb-2" style="display:none;"></div>

                                <button type="submit"
                                    class="btn btn-primary w-100 d-flex align-items-center justify-content-center gap-2 rounded-1 py-2">
                                    <i class="bi bi-envelope"></i>
                                    Sign Up With Email
                                </button>

                            </form>

                            <p class="small text-center mt-3">Already have an account?
                                <a style="color: #adb5bd;" href="{{ route('auth.login') }}">Click here to sign in</a>
                            </p>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-12 order-lg-2 order-1">
            <div class="p-5 d-flex flex-column align-items-center justify-content-center"
                style="min-height: 100vh; background-color: #040b1e;">
                <div class="container-fluid">
                    <div class="main-header">
                        <h6 class="display-6 text-center fw-bold" style="color: #fff;">Results speak for themselves</h6>
                    </div>

                    <div class="d-flex justify-content-between p-3 mb-3 align-items-center "
                        style="border: 1px solid hsl(217.2, 32.6%, 17.5%)">
                        <div class="d-flex align-items-center"><img width="50"
                                src="{{ asset('assets/icons/trustpilot.png') }}" /> Trustpilot</div>
                        <div>
                            <a href="#" class="text-white text-decoration-none">Read all reviews ↗</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-12 mb-4">
                            <img src="/storage/images/auth/s-1.webp" class="img-fluid p-2" alt="Sales Data Chart 1"
                                style="border: 1px solid hsl(217.2, 32.6%, 17.5%)" />
                        </div>
                        <div class="col-lg-6 col-md-12 mb-4">
                            <img src="/storage/images/auth/s-2.webp" class="img-fluid p-2" alt="Sales Data Chart 2"
                                style="border: 1px solid hsl(217.2, 32.6%, 17.5%)" />
                        </div>
                        <div class="col-lg-6 col-md-12 mb-4">
                            <img src="/storage/images/auth/s-3.webp" class="img-fluid p-2" alt="Sales Data Chart 3"
                                style="border: 1px solid hsl(217.2, 32.6%, 17.5%)" />
                        </div>
                        <div class="col-lg-6 col-md-12 mb-4">
                            <img src="/storage/images/auth/s-4.webp" class="img-fluid p-2" alt="Sales Data Chart 4"
                                style="border: 1px solid hsl(217.2, 32.6%, 17.5%)" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Email Registration AJAX
        $('#registerForm').on('submit', function(e) {
            e.preventDefault();

            $('#errorBox').hide().html("");

            $.ajax({
                url: "{{ route('auth.register') }}",
                method: "POST",
                data: $(this).serialize(),
                success: function(res) {
                    window.location.href = res.redirect;
                },
                error: function(err) {
                    if (err.status === 422) {
                        let errors = err.responseJSON.errors;
                        let msg = "";
                        $.each(errors, function(key, value) {
                            msg += value + "<br>";
                        });
                        $('#errorBox').show().html(msg);
                    }
                }
            });
        });

        $('#googleSignupBtn').on('click', function() {
            window.location.href = "{{ route('auth.google.redirect') }}";
        });
    </script>
@endpush
