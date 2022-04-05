@extends('layouts.app')
@section('content')
    @php
        $user = auth()->user();
    @endphp
    <section id="admin_profile" class="container my-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-4 bg-maingreen">
                    <div class="card-header bg-lightgreen py-2 text-center fw-bold">Change Password</div>
                    <div class="card-body p-5 text-white">
                        <form method="POST" action="/profile/updateAdminPassword/{{$user->id}}">
                            @method('PUT')
                            @csrf
                            <div class="row mb-3">
                                <label for="password" class="col-md-12 col-form-label">New Password</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-12 col-form-label">Confirm Password</label>
                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn bg-darkgreen text-white mt-2">Change Password</button>
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