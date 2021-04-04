@extends('common.welcome')

@section('content')

    <div class="container">
        <div class="card"> {{-- The form is placed inside a Bulma Card component --}}
            <header class="card-header">
                <p class="card-header-title"> {{-- The Card header content --}}
                    Edit Brochure
                </p>
            </header>

            <div class="card-content">
                <div class="content">

                    {{-- Here are all the form fields --}}
                    <div class="field">
                        <form method="POST" action="/brochures/{{$brochure->id}}">
                            @csrf
                            @method('PUT')

                            <label class="label" for="title">Image Title</label>
                            <div class="control">
                                <input name="title" class="input @error('title') is-danger @enderror"
                                    type="text" value="{{$brochure->title}}" >
                            </div>
                            @error('title')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror

                            <div class="field is-grouped">
                                {{-- Here are the form buttons: save, reset and cancel --}}
                                <div class="control">
                                    <input type="submit" class="button is-primary" value="Submit">
                                </div>
                                <div class="control">
                                    <button type="reset" class="button is-warning">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection