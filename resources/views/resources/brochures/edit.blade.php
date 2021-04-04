@extends('common.welcome')

@section('content')


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

                        <label class="label" for="img_url">Image URL</label>
                        <div class="control">
                            <input name="img_url" class="input @error('img_url') is-danger @enderror"
                                   type="text" value="{{$brochure->img_url}}" >
                        </div>
                        @error('img_url')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                </div>



            </div>
            <div class="field is-grouped">
                {{-- Here are the form buttons: save, reset and cancel --}}
                <div class="control">
                    <input type="submit" class="button is-primary" value="Submit">
                </div>
                <div class="control">
                    <button type="reset" class="button is-warning">Reset</button>
                </div>
                    </form>

            </div>
        </div>
    </div>
@endsection