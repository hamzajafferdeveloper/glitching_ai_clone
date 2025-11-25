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
                            <button
                                class="btn w-100 d-flex align-items-center justify-content-center gap-2 rounded-1 py-2 mb-4 text-white"
                                style="background-color: hsl(217.2, 32.6%, 17.5%) ">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="currentColor"
                                    stroke="currentColor" class="me-2" style="width: 20px; height: 20px;">
                                    <path fill="#FFC107"
                                        d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z" />
                                    <path fill="#FF3D00"
                                        d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" />
                                    <path fill="#4CAF50"
                                        d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" />
                                    <path fill="#1976D2"
                                        d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z" />
                                </svg>
                                Sign Up With Google
                            </button>

                            <hr style="border-color: #333;">

                            <div class="mb-3">
                                <label class="small text-white" for="email">Email</label>
                                <input type="email" class="form-control rounded-1" id="email" placeholder="Email">
                            </div>

                            <div class="mb-3">
                                <label class="small text-white" for="password">Password</label>
                                <input type="password" class="form-control rounded-1" id="password" placeholder="Password">
                            </div>

                            <div class="mb-3">
                                <label class="small text-white" for="phone_number">Phone Number (optional)</label>
                                <input type="tel" class="form-control rounded-1" id="phone_number"
                                    placeholder="Enter Phone Number">
                            </div>

                            <button
                                class="btn btn-primary w-100 d-flex align-items-center justify-content-center gap-2 rounded-1 py-2">
                                <i class="bi bi-envelope"></i>
                                Sign Up With Email
                            </button>

                            <p class="small text-center mt-3">Already have an account?
                                <a class="underline" style="color: #adb5bd;" href="{{ route('auth.login') }}">Click here to sign
                                    in</a>
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
                                src="{{ asset('/storage/images/trustpilot-symbol.png') }}" /> Trustpilot</div>
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
