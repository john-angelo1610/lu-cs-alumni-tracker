@extends('layouts.app')
@section('content')
<section id="add_post" class="container my-5 pt-5">
    <form class="bg-maingreen p-5 text-light rounded" action="../store" method="POST">
        @csrf
        <h2 class="text-center mb-4">Add Post</h2>
        <hr>
        <div class="row align-items-center mb-3">
            <label for="title" class="col-md-3 col-form-label">Title</label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="title" name="title">
            </div>
        </div>
        <div class="row mb-3">
            <label for="content" class="col-md-3 col-form-label">Content</label>
            <div class="col-md-9">
                <textarea class="form-control" id="content" name="content"></textarea>
            </div>
        </div>
        <div class="d-grid pt-3">
            <button type="submit" class="btn btn-block text-light bg-darkgreen">Add</button>
        </div>
    </form>
</section>
@endsection