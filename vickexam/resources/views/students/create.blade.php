@extends('common.master')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12"> {{-- These divs are needed for proper layout --}}
                    <form method="POST" action="{{ route('students.store') }}">
                        @csrf
                        <div class="card"> {{-- The form is placed inside a Bulma Card component --}}
                            <header class="card-header">
                                <p class="card-header-title"> {{-- The Card header content --}}
                                    Add a new student
                                </p>
                            </header>

                            <div class="card-content">
                                <div class="content">

                                    {{-- Here are all the form fields --}}
                                    <div class="field">
                                        <label class="label">Name</label>
                                        <div class="control">
                                            <input name="name" class="input @error('name') is-danger @enderror"
                                                   type="text" placeholder="Your name here..." value="{{ old('name') }}">
                                        </div>
                                        @error('name')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="field">
                                        <label class="label">Cohort</label>
                                        <div class="control">
                                            <textarea name="cohort"
                                                      class="textarea @error('cohort') is-danger @enderror"
                                                      type="text" placeholder="A positive number up to 4294967295...">{{ old('cohort') }}</textarea>
                                        </div>
                                        @error('cohort')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="field">
                                        <label class="label">Image Url</label>
                                        <div class="control">
                                            <textarea name="img_url" class="textarea @error('img_url') is-danger @enderror"
                                                      rows="15" placeholder="A link to an image...">{{ old('img_url') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <label class="label">Member</label>
                                        <div class="control">
                                            <textarea name="members"
                                                      class="textarea @error('members') is-danger @enderror"
                                                      type="text" placeholder="A positive number referenced to the primary key...">{{ old('members') }}</textarea>
                                        </div>
                                        @error('members')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                                <div class="field is-grouped">
                                    {{-- Here are the form buttons: save, reset and cancel --}}
                                    <div class="control">
                                        <button type="submit" class="button is-primary">Save</button>
                                    </div>
                                    <div class="control">
                                        <button type="reset" class="button is-warning">Reset</button>
                                    </div>
                                    <div class="control">
                                        <a type="button" href="/students" class="button is-light">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection


