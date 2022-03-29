@extends('layouts.app')
@section('content')
<section id="post_list" class="pt-5 my-5 container">
    <h1 class="text-uppercase text-center">List of Post</h1>
    <a href="posts/add" class="btn btn-outline-dark my-4 float-end">Add Post <i class="fas fa-plus"></i></a>
    <table class="table table-responsive bg-maingreen text-white">
        <thead class="bg-darkgreen">
            <tr>
                <th scope="col">Title of the post</th>
                <th scope="col">Date Posted</th>
                <th class="text-center" scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($posts->isEmpty())
                <tr>
                    <th class="text-center" scope="row" colspan="3">No posts available</th>
                </tr>
            @else
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{$post->title}}</th>
                        <td>{{Carbon\Carbon::parse($post->date)->format('F d, Y')}}</td>
                        <td class="text-center">
                            <a href="posts/edit/{{$post->id}}"><i class="fas fa-edit"></i></a>
                            &nbsp;&nbsp;&nbsp;
                            <form action="/delete/{{$post->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</section>
@endsection