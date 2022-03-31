@extends('layouts.app')
@section('content')
<section id="edit_post" class="container my-5 pt-5">
    <form class="bg-maingreen p-5 text-light rounded" action="/update/{{$post->id}}" method="POST">
        @method('PUT')
        @csrf
        <h2 class="text-center mb-4">Edit Post</h2>
        <hr>
        <div class="row align-items-center mb-3">
            <label for="title" class="col-md-3 col-form-label">Title</label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="content" class="col-12 col-form-label">Content</label>
            <div class="col-12">
                <textarea class="form-control" id="content" name="content">{{$post->content}}</textarea>
            </div>
        </div>
        <div class="d-grid pt-3">
            <button type="submit" class="btn btn-block text-light bg-darkgreen">Save</button>
        </div>
    </form>
</section>
@endsection