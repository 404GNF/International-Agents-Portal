@extends('common.welcome')

@section('content')
    <section class="hero  is-medium  is-bold is-link">
        <div class="hero-body" style="
            background: url('https://www.hz.nl/imager/uploads/images/3.-Werk-en-studie/Headers/docent-coacht-studenten-003_c8fa470484be7b69be5daae77a1602c5.jpg') no-repeat center center;
            background-size: cover;"
        >
            <div class="container">
                <p class="title is-2">Brochures</p>
                <div onclick="window.location.href='/brochures/create'" class="button is-primary">Add New Brochure</div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="columns is-multiline">
        @foreach($brochures as $brochure)
            <div class="column is-one-third">
                <h2>{{ $brochure->title }}</h2>
                <img class="thumbnails" src="{{ asset('storage') . "/brochures/" . $brochure->image_path }}" alt="{{ $brochure->title }}"><br>
                <a href = "/brochures/{{$brochure->id}}/edit">Edit</a>

                <form class = "form" method="POST" action="/brochures/{{ $brochure->id }}">
                    @csrf
                    @method('DELETE')

                    <button type="submit">Delete</button>
                </form>
            </div>

            <div class="modal">
                <div class="modal-background"></div>
                <div class="modal-content">
                <p class="image">
                    <img src="{{ asset('storage') . "/brochures/" . $brochure->image_path }}" alt="{{ $brochure->title }}">
                </p>
                </div>
                <button id="close" class="modal-close is-large" aria-label="close"></button>
            </div>

        @endforeach
        </div>
    </div>
    

@endsection
