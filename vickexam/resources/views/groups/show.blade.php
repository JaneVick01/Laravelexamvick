@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold is-primary"
    <div class="hero-body">
        <div class="container">
            <p class="title is-2">{{$group->name}}</p>
            <p class="subtitle is-3"></p>

        </div>
    </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">

                <div class="column is-12">
                    <div class="content">
                        @foreach($group->students as $student)
                            <p>
                                Student Name: {{ $student->name }} <br>
                                Student ID: {{ $student->id }} <br>
                                Student cohort: {{ $student->cohort }}
                            </p>
                            <br>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
