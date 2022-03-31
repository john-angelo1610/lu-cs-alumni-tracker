@extends('layouts.app')
@section('content')
    <section id="post" class="container pt-5 my-5">
        <h1 class="text-center my-3">{{$post->title}}</h1>
        <small>{{Carbon\Carbon::parse($post->date)->format('F d, Y')}}</small>
        <div class="mt-4">{!! $post->content !!}</div>
    </section>
@endsection