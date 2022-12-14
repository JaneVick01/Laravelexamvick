@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold is-primary"
             style="background: url('{{$student->getImageAttribute()}}') no-repeat center center; background-size: cover;">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">{{$student->name}}</p>
                <p class="subtitle is-3"></p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">

                <div class="column is-12">

                    <div class="content">
                        <p>
                            Student ID: {{ $student->id }}
                            <br>
                            Cohort: {{ $student->cohort }}
                            <br>
                            Image Url: {{ $student->img_url }}</p>
                    </div>

                    <form method="POST" action="{{ route('students.destroy', $student) }}">
                        @csrf
                        @method("DELETE")
                        <button type="submit">
                            Delete
                        </button>
                    </form>

                    <form method="GET" action="{{ route('students.edit', $student) }}">
                        <button type="submit">
                            Edit
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection

