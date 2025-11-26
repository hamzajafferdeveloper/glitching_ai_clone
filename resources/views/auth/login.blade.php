@extends('layout.guest')

@section('content')
    <div class="card shadow rounded-1 w-100"
        style="max-width: 25rem; background-color: hsl(222.9, 84%, 4.9%); border: 1px solid hsl(217.2, 32.6%, 17.5%);">
        <div class="card-header border-0 p-4">
            <h6 class="fw-bold mb-0 text-white">Sign In To Your Account</h6>
        </div>

        <div class="card-body p-4 pt-0" style="color: hsl(215, 20.2%, 65.1%);">
            <button id="googleSignupBtn" class="btn w-100 d-flex align-items-center justify-content-center gap-2 rounded-1 py-2 mb-4 text-white"
                style="background-color: hsl(217.2, 32.6%, 17.5%) ">
                <img src="{{ asset('assets/icons/google.svg') }}" alt="google-logo" width="20" height="20">
                Sign In With Google
            </button>

            <hr>

            <div class="mb-3">
                <label class="small " for="email">Email</label>
                <input type="email" class="form-control rounded-1 " id="email" placeholder="Email">
            </div>

            <div class="mb-3">
                <div class="d-flex justify-content-between">
                    <label class="small" for="password">Password</label>
                    <a href="{{ route('auth.reset-password') }}" class="small text-decoration-underline"
                        style="color: hsl(215, 20.2%, 65.1%);">
                        Reset password
                    </a>
                </div>
                <input type="password" class="form-control rounded-1" id="password" placeholder="Password">
            </div>

            <button class="btn btn-primary w-100 d-flex align-items-center justify-content-center gap-2 rounded-1 py-2">
                <i class="bi bi-envelope"></i>
                Sign In With Email
            </button>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('#googleSignupBtn').on('click', function() {
            window.location.href = "{{ route('auth.google.redirect') }}";
        });
    </script>
@endpush
