@php
    $employed = 0;
    $self_employed = 0;
    $unemployed = 0;
    $retired = 0;
    foreach ($alumni as $alumnus) {
        if (strtolower($alumnus->employment_status) == 'employed') {
            $employed++;
        } else if (strtolower($alumnus->employment_status) == 'unemployed') {
            $unemployed++;
        }  else if (strtolower($alumnus->employment_status) == 'retired') {
            $retired++;
        } else if (strtolower($alumnus->employment_status) == 'self-employed') {
            $self_employed++;
        }
    }
@endphp

@extends('layouts.app')
@section('content')
    <section id="analytics" class="container my-5 pt-5">
        <h1 class="text-center">Analytics</h1>
        <div class="row">
            <div class="col-lg-3 col-sm-6 my-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-uppercase card-title text-center my-2">Number of employed</h2>
                        <h2 class="card-text text-center my-3">{{$employed}}</h2>
                    </div>
                    <img src="../storage/employed.png" class="card-img-bottom" alt="Employed">
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 my-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-uppercase card-title text-center my-2">Number of self-employed</h2>
                        <h2 class="card-text text-center my-3">{{$self_employed}}</h2>
                    </div>
                    <img src="../storage/business.png" class="card-img-bottom" alt="Self=employed">
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 my-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-uppercase card-title text-center my-2">Number of unemployed</h2>
                        <h2 class="card-text text-center my-3">{{$unemployed}}</h2>
                    </div>
                    <img src="../storage/unemployed.png" class="card-img-bottom" alt="Unemployed">
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 my-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-uppercase card-title text-center my-2">Number of retired</h2>
                        <h2 class="card-text text-center my-3">{{$retired}}</h2>
                    </div>
                    <img src="../storage/retired.png" class="card-img-bottom" alt="Retired">
                </div>
            </div>
        </div>
    </section>
@endsection