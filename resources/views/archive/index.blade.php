@extends('layouts.app')
@section('content')
    <section id="archive" class="pt-5 my-5 container">
        <h1 class="text-uppercase text-center">Archive</h1>
        <table class="table table-responsive bg-maingreen text-white mt-4">
            <thead class="bg-darkgreen">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if ($archived_alumni->isEmpty())
                    <tr>
                        <th class="text-center" scope="row" colspan="3">No data available</th>
                    </tr>
                @else
                    @foreach ($archived_alumni as $alumnus)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{$alumnus->first_name}} {{substr($alumnus->middle_name,0,1)}}. {{$alumnus->last_name}}</td>
                            <td>
                                <form action="/archive/destroy/{{$alumnus->id}}" method="post">
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