@php
    $school_years = ["S.Y. 2006 - 2007", "S.Y. 2007 - 2008", "S.Y. 2009 - 2010", "S.Y. 2011 - 2012", "S.Y. 2012 - 2013", "S.Y. 2013 - 2014", "S.Y. 2014 - 2015", "S.Y. 2015 - 2016", "S.Y. 2016 - 2017", "S.Y. 2017 - 2018", "S.Y. 2018 - 2019", "S.Y. 2019 - 2020", "S.Y. 2020 - 2021", "S.Y. 2021 - 2022", "S.Y. 2022 - 2023"];
@endphp
@extends('layouts.app')
@section('content')
    <section id="list" class="pt-5 my-5 container">
        <h1 class="text-uppercase text-center">List of Alumni</h1>
        <h2 class="text-center">{{$bachelor_year}}</h2>
        <div class="clearfix my-4">
            <div class="btn-group float-start">
                <button type="button" class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Choose School Year
                </button>
                <ul class="dropdown-menu">
                    @foreach ($school_years as $school_year)
                        <li><a class="dropdown-item" href="/list/{{$school_year}}">{{$school_year}}</a></li>
                    @endforeach
                </ul>
            </div>
            <a href="/add" class="btn btn-outline-dark float-end">Add Alumni <i class="fas fa-plus"></i></a>
        </div>
        <table class="table table-responsive bg-maingreen text-white">
            <thead class="bg-darkgreen">
                <tr>
                    <th scope="col">Student Number</th>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
                @if ($alumni->isEmpty())
                    <tr>
                        <th class="text-center" scope="row" colspan="2">No data available</th>
                    </tr>
                @else
                    @foreach ($alumni as $alumnus)
                        <tr>
                            <th scope="row">{{$alumnus->student_number}}</th>
                            <td><a href="../list/view/{{$alumnus->id}}">{{$alumnus->first_name}} {{substr($alumnus->middle_name,0,1)}}. {{$alumnus->last_name}}</a></td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </section>
@endsection