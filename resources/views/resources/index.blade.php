@extends('common.welcome')

@section('content')
    <section class="hero  is-medium  is-bold is-link">
        <div class="hero-body" style="
            background: url('https://www.hz.nl/imager/uploads/images/3.-Werk-en-studie/Headers/docent-coacht-studenten-003_c8fa470484be7b69be5daae77a1602c5.jpg') no-repeat center center;
            background-size: cover;"
        >
            <div class="container">
                <p class="title is-2">Resources</p>
                <div onclick="window.location.href='/resources/create'" class="button is-primary">Add New Resource</div>
            </div>
        </div>
    </section>

    <div class="container bodycontainer">
        <div class="buttons filtergroup">
            <button id="All" class="button is-info">All</button>
            <button id="Brochures" class="button">Brochures</button>
            <button id="Leaflets" class="button">Leaflets</button>
            <button id="Roll-ups" class="button">Roll-ups</button>
            <button id="Posters" class="button">Posters</button>
            <button id="Videos" class="button">Videos</button>
        </div>

        <div class="columns is-multiline">
        @foreach($resources as $resource)
            <div class="column is-one-third {{ $resource->tag }}">
                <h2 class="title is-4"><span>{{ $resource->title }}</span></h2>

                @if($resource->missingImage == false)
                <figure class="field image is-1by1 imagefigure">
                    <img class="thumbnails" src="{{ asset('storage') . "/resources/" . $resource->image_path }}" alt="{{ $resource->title }}">
                    <div class="tags"><span class="tag is-info">{{ $resource->tag }}</span></div>
                </figure>
                @endif

                @if(isset($resource->video_url))
                <figure class="field image is-1by1">
                    <iframe class="has-ratio" width="440" height="750" src="https://www.youtube.com/embed/{{ $resource->video_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="tags"><span class="tag is-info">{{ $resource->tag }}</span></div>
                </figure>
                @endif

                <form class = "form" method="POST" action="/resources/{{ $resource->id }}">
                    @csrf
                    @method('DELETE')

                    <div class="field is-grouped icons-under-image">
                        @if($resource->video_url == null)
                        <a href="{{ asset('storage') . "/resources/" . $resource->image_path }}" download class="button is-info download"><i class="fas fa-download"></i></a>
                        @endif

                        @if($resource->video_url)
                        <a target="_blank" href="http://i3.ytimg.com/vi/{{ $resource->video_url }}/maxresdefault.jpg" download class="button is-info download"><i class="fas fa-download"></i></a>
                        @endif

                        <a class="button is-warning edit" href = "/resources/{{$resource->id}}/edit"><i class="fas fa-edit"></i></a>
                        <button onclick="return confirm('Are you sure?')" class="button is-danger remove" type="submit"><i class="fas fa-trash-alt"></i></button>
                    </div>
                </form>
            </div>

            @if($resource->video_url == null)
            <div class="modal">
                <div class="modal-background"></div>
                <a class="btn zoom"><i class="fas fa-search-plus"></i></a>
                <a class="btn zoom-out"><i class="fas fa-search-minus"></i></a>
                <a class="btn zoom-init"><i class="fas fa-recycle"></i></a>
                <div class="modal-content box target">
                    <p class="image">
                        <a href="{{ asset('storage') . "/resources/" . $resource->image_path }}" download><img class="selected-image" src="{{ asset('storage') . "/resources/" . $resource->image_path }}" alt="{{ $resource->title }}"></a>
                    </p>
                </div>
                <button id="close" class="modal-close is-large" aria-label="close"></button>
            </div>
            @endif

        @endforeach
        </div>
    </div>
    

@endsection
