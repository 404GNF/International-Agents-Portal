@extends('common.template')

@section('content')
    <section class="hero is-bold is-link">
        <div class="hero-body" style="
            background: url('https://www.hz.nl/imager/uploads/images/3.-Werk-en-studie/Headers/docent-coacht-studenten-003_c8fa470484be7b69be5daae77a1602c5.jpg') no-repeat center center;
            background-size: cover;"
        >
            <div class="container">
                <p class="title is-2">Home</p>
                <p class = 'subtitle is-3'>Personal Stories</p>
{{--                checks whether the user is logged and shows the button if he is--}}
                @if ($user = Auth::user())
                <div onclick="window.location.href='/admin/personal-stories'" class="button is-primary">
                    Manage Personal Stories
                </div>
                @endif
            </div>
        </div>
    </section>



{{--    Goes through all of the personal stories and creates a div for each of them that consists heading and image that--}}
{{--    is link to another webpage--}}
    @foreach($stories as $story)
            <div class="personal-stories">
                <h2 class="personal-stories-titles" >{{$story->title}}</h2>
                <a href="{{$story->url}}">
                    <img class = "personal-stories-images" src="storage\{{ $story->img_src }}" alt="{{ $story->alt }}">
                </a>
            </div>
    @endforeach


@endsection
