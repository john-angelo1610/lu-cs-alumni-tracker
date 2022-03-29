@extends('layouts.app')
@section('content')
    <section id="home-banner" class="container-fluid d-flex flex-column align-items-center justify-content-center text-light text-center">
        <h1>Laguna University</h1>
        <h2>Computer Science Alumni Tracker</h2>
    </section>
    <section id="news" class="container my-5">
        <h1 class="text-center">News and Announcements</h1>
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-lg-4 my-4">
                <article class="card">
                    <h5 class="text-center card-header">{{$post->title}}</h5>
                    <div class="card-body">
                        <p class="card-text">{{substr($post->content, 0, 200)}}</p>
                        <a href="/{{$post->id}}" class="btn text-light rounded-0 bg-darkgreen">Read More</a>
                    </div>
                    <div class="card-footer text-light text-center bg-maingreen">
                        {{Carbon\Carbon::parse($post->date)->format('F d, Y')}}
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </section>
@endsection