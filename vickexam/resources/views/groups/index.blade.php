@extends('common.master')

@section('content')
    <section class="hero is-small is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">Groups</p>
                <p class="subtitle is-3">Manage the groups</p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-full">
                    <div class="has-text-right">
                    </div>
                    <table class="table is-fullwidth is-striped">
                        <thead>
                        <tr>
                            <th>Group name</th>
                            <th>Semester</th>
                            <th>Active</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($groups as $group)
                            <tr>
                                <td><a href="groups/{{ $group->id }}">{{ $group->name }}</a></td>
                                <td>{{ $group->semester }}</td>
                                <td>
                                    @if($group->is_active)
                                        <i class="fas fa-check has-text-success"></i>
                                    @else
                                        <i class="fa-solid fa-xmark has-text-danger"></i>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
@endsection
