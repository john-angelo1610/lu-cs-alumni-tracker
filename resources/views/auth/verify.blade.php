@extends('layouts.app')

@section('content')
<section id="please_verify" class="container my-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4">
                <div class="card-header bg-lightgreen py-2 text-center fw-bold">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body p-5 text-white bg-maingreen">
                    @if (session('resent'))
                        <div class="alert alert-primary" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
