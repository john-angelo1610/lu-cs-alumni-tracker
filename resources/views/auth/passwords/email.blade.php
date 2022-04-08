@extends('layouts.app')
@section('content')
<section class="container my-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4 bg-maingreen">
                <div class="card-header bg-lightgreen py-2 text-center fw-bold">{{ __('Reset Password') }}</div>

                <div class="card-body text-white p-5">
                    @if (session('status'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-12 col-form-label">{{ __('Email Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn bg-darkgreen text-white mt-2">{{ __('Send Password Reset Link') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
