@extends('common.master')

@section('content')
    <section class="hero is-small is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">Students</p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-full">
                    <div class="has-text-right">
                        <a href="{{ route('students.create') }}" class="button is-primary">Add a new student...</a>
                    </div>

                    @foreach($students as $student)
                        <a class="panel-block" href="{{ route('students.show', $student) }}">
                        <p>
                            <strong> {{ $student->name }} </strong>
                            <br>
                            Student ID: {{ $student->id }}
                            <br>
                            Cohort: {{ $student->cohort }}
                            <br>
                            Image Url: {{ $student->img_url }}
                        </p>
                        <br>
                    @endforeach
                    {{ $students->links('pagination::bootstrap-4') }}
                </div>
            </div>
    </section>
@endsection
