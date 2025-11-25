@extends('layout.guest')

@section('content')
    <div class="card shadow rounded-1 w-100"
        style="max-width: 30rem; background-color: hsl(222.9, 84%, 4.9%); border: 1px solid hsl(217.2, 32.6%, 17.5%);">
        <div class="card-header border-0 p-4">
            <h6 class="fw-bold mb-0 text-white">Sign In To Your Account</h6>
        </div>

        <div class="card-body p-4 pt-0" style="color: hsl(215, 20.2%, 65.1%);">
            <div class="mb-3">
                <label class="small " for="email">Email</label>
                <input type="email" class="form-control rounded-1 " id="email" placeholder="Email">
            </div>

            <button class="btn btn-primary w-100 d-flex align-items-center justify-content-center gap-2 rounded-1 py-2">
                Send password reset link
            </button>
        </div>
    </div>
@endsection
