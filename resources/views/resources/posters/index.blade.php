@extends('common.welcome')

@section('content')
    <section class="hero  is-medium  is-bold is-link">
        <div class="hero-body" style="
            background: url('https://www.hz.nl/imager/uploads/images/3.-Werk-en-studie/Headers/docent-coacht-studenten-003_c8fa470484be7b69be5daae77a1602c5.jpg') no-repeat center center;
            background-size: cover;"
        >
            <div class="container">
                <p class="title is-2">Posters</p>
            </div>
        </div>
    </section>

    @foreach($posters as $poster)
        <img style="width:250px; height:300px ; margin-left: 40px; margin-top: 40px; border-radius: 25px;" src="{{$poster->img_url}}" alt="Post picture"><br>
        <a style="margin-left:120px" href = "/posters/{{$poster->id}}/edit" class="button is-warning">Edit</a>

        <form class = "form" method="POST" action="/posters/{{ $poster->id }}">
            @csrf
            @method('DELETE')

            <button style="margin-top:-40px; margin-left:190px" type="submit" class="button is-danger">Delete</button>
        </form>

@endforeach

@endsection
