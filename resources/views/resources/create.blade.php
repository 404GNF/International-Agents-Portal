@extends('common.welcome')

@section('content')

    <div class="container">
        <div class="card"> {{-- The form is placed inside a Bulma Card component --}}
            <header class="card-header">
                <p class="card-header-title"> {{-- The Card header content --}}
                    Add Resource
                </p>
            </header>

            <form method="POST" action="/resources" enctype="multipart/form-data">
                @csrf

                <div class="card-content">
                    <div class="content">

                        {{-- Here are all the form fields --}}
                        <div class="field">

                                <label class="label" for="title">Resource Title</label>
                                <div class="control">
                                    <input id="file-input" name="title" class="input @error('title') is-danger @enderror"
                                        type="text">
                                </div>
                                @error('title')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                        </div>


                        <div class="field select is-primary">
                            <select name="tag" id="tag">
                            <option value="Brochure">Brochure</option>
                            <option value="Leaflet">Leaflet</option>
                            <option value="Roll-up">Roll-up</option>
                            <option value="Poster">Poster</option>
                            <option value="Pictures-for-agencies">Pictures for agencies</option>
                            <option value="Video">Video</option>
                            </select>
                        </div>

                        <div class="field" id="upload">
                            
                                <div class="file has-name">
                                    <label class="file-label">
                                    <input class="file-input" type="file" name="image">
                                    <span class="file-cta">
                                        <span class="file-icon">
                                        <i class="fas fa-upload"></i>
                                        </span>
                                        <span class="file-label">
                                        Choose a file…
                                        </span>
                                    </span>
                                    <span class="file-name">
                                        Max 20 MB as JPG/JPEG/PNG
                                    </span>
                                    </label>
                                </div>
                        </div>
                    </div>

                    <div class="field" id="inCaseVideo" style="display: none;">
                        <input name="video" class="input is-link" type="text" placeholder="YouTube Link">
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <input type="submit" class="button is-primary" value="Submit">
                        </div>
                        <div class="button" onclick="window.location.href='/resources/'">Cancel</div>
                    </div>

            </form>     
            
        </div>
    </div>
@endsection