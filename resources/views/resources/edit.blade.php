@extends('common.welcome')

@section('content')

    <div class="container">
        <div class="card"> {{-- The form is placed inside a Bulma Card component --}}
            <header class="card-header">
                <p class="card-header-title"> {{-- The Card header content --}}
                    Edit Resource
                </p>
            </header>

            <div class="card-content">
                <div class="content">

                    {{-- Here are all the form fields --}}
                    <div class="field">
                        <form method="POST" action="/resources/{{$resource->id}}">
                            @csrf
                            @method('PUT')

                            <label class="label" for="title">Resource Title</label>
                            <div class="control">
                                <input name="title" class="input @error('title') is-danger @enderror"
                                    type="text" value="{{$resource->title}}" >
                            </div>
                            @error('title')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror

                            <div class="field select is-primary">
                                <select name="tag" id="tag">
                                <option value="Brochure" {{ $resource->tag == 'Brochure' ? 'selected' : '' }}>Brochure</option>
                                <option value="Leaflet" {{ $resource->tag == 'Leaflet' ? 'selected' : '' }}>Leaflet</option>
                                <option value="Roll-up" {{ $resource->tag == 'Roll-up' ? 'selected' : '' }}>Roll-up</option>
                                <option value="Poster" {{ $resource->tag == 'Poster' ? 'selected' : '' }}>Poster</option>
                                <option value="Video" {{ $resource->tag == 'Video' ? 'selected' : '' }}>Video</option>
                                </select>
                            </div>

                            <div class="field is-grouped">
                                {{-- Here are the form buttons: save, reset and cancel --}}
                                <div class="control">
                                    <input type="submit" class="button is-primary" value="Submit">
                                </div>
                                <div class="control">
                                    <button type="reset" class="button is-warning">Reset</button>
                                </div>
                                <div class="button" onclick="window.location.href='/resources/'">Cancel</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection