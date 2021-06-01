@extends('common.template')

@section('content')
    <section class="hero is-medium is-bold is-link">
        <div class="hero-body" style="
            background: url('https://www.hz.nl/imager/uploads/images/3.-Werk-en-studie/Headers/docent-coacht-studenten-003_c8fa470484be7b69be5daae77a1602c5.jpg') no-repeat center center;
            background-size: cover;"
        >
            <div class="container">
                <p class="title is-2">Resources</p>
                <div onclick="window.location.href='/admin/resources'" class="button is-primary">Manage Resources</div>
                <div onclick="window.location.href='/admin/videos'" class="button is-primary">Manage Videos</div>
                <div onclick="window.location.href='/admin/categories'" class="button is-primary">Manage Categories</div>
            </div>
        </div>
    </section>

    <div class="container bodycontainer">
        <div class="buttons filtergroup">
            <button id="All" class="button filterbutton is-info">All</button>
            @foreach ($categories as $category)
                <button id="{{ str_replace(' ','-', $category->name) }}" class="button filterbutton">{{ $category->name }}</button>
            @endforeach
        </div>

        <div class="columns is-multiline">
        @foreach($items as $item)
            <div class="column is-one-third @isset ($item->category->name){{ str_replace(' ','-', $item->category->name) }}@else 'Undefined' @endisset">
                <h2 class="title is-4"><span>{{ $item->title }}</span></h2>

                @isset($item->youtube_url)
                <figure class="field image is-1by1">
                    <iframe class="has-ratio" width="440" height="750" src="https://www.youtube.com/embed/{{ explode("=", $item->youtube_url)[1] }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="tags"><span class="tag is-info">@isset ($item->category->name){{ $item->category->name }} @else Undefined @endisset</span></div>
                </figure>
                @else
                <figure class="field image is-1by1 imagefigure">
                    <img class="thumbnails" src="storage\{{ $item->thumbnail }}" alt="{{ $item->title }}">
                    <div class="tags"><span class="tag is-info">@isset ($item->category->name){{ $item->category->name }} @else Undefined @endisset</span></div>
                </figure>
                @endisset

                <div class="field is-grouped icons-under-image">
                    @empty($item->youtube_url)
                    <a href="{{ explode('"', $item->file)[3] }}" download class="button downloadbutton is-info download"><i class="fas fa-download"></i></a>
                    @endempty
                </div>

            </div>

            @empty($item->youtube_url)
            <div class="modal">
                <div class="modal-background"></div>
                <a class="btn zoom"><i class="fas fa-search-plus"></i></a>
                <a class="btn zoom-out"><i class="fas fa-search-minus"></i></a>
                <a class="btn zoom-init"><i class="fas fa-recycle"></i></a>
                <div class="modal-content box target">
                    <p class="image">
                        <img class="selected-image" src="{{ $item->thumbnail }}" alt="{{ $item->title }}">
                    </p>
                </div>
                <button id="close" class="modal-close is-large" aria-label="close"></button>
            </div>
            @endempty

        @endforeach
        </div>
    </div>


@endsection
