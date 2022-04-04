@extends('layouts.app')
@section('content')
    <section id="home-banner" class="container-fluid d-flex flex-column align-items-center justify-content-center text-light text-center">
        <h1>Laguna University</h1>
        <h2>Computer Science Alumni Tracker</h2>
    </section>

    <section id="news" class="container my-5">
        @if (Auth::user())
            @if (Auth::user()->user_type == 'Admin')
                <a href="/posts" class="btn btn-outline-dark ms-auto mb-4">Manage Post</a>
            @endif
        @endif
        <h1 class="text-center mb-5">News and Announcements</h1>
        @if ($posts->isEmpty())
            <p class="text-center">No news and announcement yet</p>
        @else
            @foreach ($posts as $post)
                <h2>{{$post->title}}</h2>
                <small>{{Carbon\Carbon::parse($post->date)->format('F d, Y')}}</small>
                <p>{{strlen(strip_tags($post->content)) > 200 ? substr_replace(strip_tags($post->content), "...", 295) : strip_tags($post->content)}}</p>
                <a href="/{{$post->id}}" class="btn text-light rounded-0 bg-darkgreen mt-2">Read More</a>
                <br>
                <hr>
                <br>
            @endforeach
        @endif
    </section>
@endsection