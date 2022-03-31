@extends('layouts.app')
@section('content')
    <section id="home-banner" class="container-fluid d-flex flex-column align-items-center justify-content-center text-light text-center">
        <h1>Laguna University</h1>
        <h2>Computer Science Alumni Tracker</h2>
    </section>
    <section id="news" class="container my-5">
        <a href="/posts" class="btn btn-outline-dark ms-auto">Manage Post</a>
        <h1 class="text-center my-5">News and Announcements</h1>
        @foreach ($posts as $post)
            <h2>{{$post->title}}</h2>
            <small>{{Carbon\Carbon::parse($post->date)->format('F d, Y')}}</small>
            <p>{{strlen($post->content) > 200 ? substr_replace($post->content, "...", 295) : $post->content}}</p>
            <a href="/{{$post->id}}" class="btn text-light rounded-0 bg-darkgreen mt-2">Read More</a>
            <br>
            <hr>
            <br>
        @endforeach
    </section>
@endsection