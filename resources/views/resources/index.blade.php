@extends('common.template')
@section('content')
    <section class="hero is-medium is-bold is-link">
        <div class="hero-body" style="
            background: url('https://www.hz.nl/imager/uploads/images/3.-Werk-en-studie/Headers/docent-coacht-studenten-003_c8fa470484be7b69be5daae77a1602c5.jpg') no-repeat center center;
            background-size: cover;"
        >
            <div class="container">
                <p class="title is-2">Resources</p>
                @if($user = Auth::user())
                    <div onclick="window.location.href='/admin/resources'" class="button is-primary">Manage Resources</div>
                    <div onclick="window.location.href='/admin/videos'" class="button is-primary">Manage Videos</div>
                    <div onclick="window.location.href='/admin/categories'" class="button is-primary">Manage Categories</div>
                @endif
            </div>
        </div>
    </section>


    <div class="container bodycontainer">
        <div class="columns">

            <!-- Filter controls section -->
            <div class="column is-one-quarter mx-4">
                <!-- Search bar -->
                <div class="field">
                    <p class="control is-expanded has-icons-right">
                        <input class="input" type="search" placeholder="Search..."/>
                        <span class="icon is-small is-right"><i class="fas fa-search"></i></span>
                    </p>
                </div>
                <div class="container">
                    <div>
                        <p class="title is-5">Filter</p>
                    </div>
                    <hr>
                    <div class="pb-3">
                        <p class="pb-2">Category</p>
                        <button id="All" class="button filterbutton is-info is-small mb-1">All</button>
                        @foreach ($categories as $category)
                            <button id="{{ str_replace(' ','-', $category->name) }}" class="button filterbutton is-small mb-1">{{ $category->name }}</button>
                        @endforeach
                    </div>
                    <div>
                        <p class="pb-2">File Type</p>
                        <div class="select is-fullwidth is-small mb-4">
                          <select>
                            <option>Select a file</option>
                          </select>
                        </div>
                        <p class="pb-2">Name</p>
                        <div class="select is-fullwidth is-small mb-4">
                            <select name="name" id="name">
                                <option value="a-z">A-Z</option>
                                <option value="z-a">Z-A</option>
                            </select>
                        </div>
                        <p class="pb-2">Date</p>
                        <div class="select is-fullwidth is-small mb-4">
                            <select name="date" id="date">
                                <option value="old-new">Oldest to Newest</option>
                                <option value="new-old">Newest to Oldest</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Index/show section -->
            <div class="container" >

            @if(!$items->isEmpty())

                    @foreach($items as $item)

                        <div class="is-full box is-one-third @isset ($item->category->name){{ str_replace(' ','-', $item->category->name) }}@else 'Undefined' @endisset">
                        @isset($item->youtube_url)
                            <article class="media">
                                <figure class="media-left">
                                   <p class="image is-128x128 is-square">
                                        <img class="thumbnails" src="https://img.youtube.com/vi/{{ explode("=", $item->youtube_url)[1] }}/hqdefault.jpg" alt="video thumbnail">
                                   </p>
                                </figure>
                                <div class="media-content">
                                    <div class="content">
                                        <p class="title ">{{ $item->title }}</p>
                                        <p class="subtitle is-6">Description</p>
                                    </div>
                                </div>
                            </article>
                        @else
                            <article class="media">
                                <figure class="media-left">
                                   <p class="image is-128x128 is-square">
                                        <img class="thumbnails" src="storage/{{ $item->thumbnail }}" alt="{{ $item->title }}" style="object-fit: cover">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <div class="content">
                                        <p class="title ">{{ $item->title }}</p>
                                        <p class="subtitle is-6">Description</p>
                                    </div>
                                </div>
                            </article>
                        @endisset
                        </div>

                    {{-- <div class="container" style="max-height: 200px;"> --}}
                    {{-- </div> --}}
                        {{-- <div class="column is-half"> --}}
                            {{-- <figure class="image is-square"> --}}
                                {{-- <img class="thumbnails" src="storage/{{ $item->thumbnail }}" alt="{{ $item->title }}" > --}}
                            {{-- </figure> --}}
                            {{-- <h2 class="title is-4"><span>{{ $item->title . "jflksdjfalksdjf"}}</span></h2> --}}
                        {{-- </div> --}}
                    
                        {{-- <div class="column is-one-third @isset ($item->category->name){{ str_replace(' ','-', $item->category->name) }}@else 'Undefined' @endisset"> --}}
                            {{-- <h2 class="title is-4"><span>{{ $item->title }}</span></h2> --}}

                            {{-- @isset($item->youtube_url) --}}
                            {{-- <figure class="field image is-1by1"> --}}
                                {{-- <iframe class="has-ratio" width="440" height="750" src="https://www.youtube.com/embed/{{ explode("=", $item->youtube_url)[1] }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                                {{-- <div class="tags"> --}}
                                    {{-- <span class="tag is-info --}}
                                        {{-- @if($user = Auth::user()) --}}
                                            {{-- notification --}}
                                        {{-- @endif --}}
                                    {{-- ">@isset ($item->category->name){{ $item->category->name }} @else Undefined @endisset</span> --}}
                                {{-- </div> --}}
                            {{-- </figure> --}}
                            {{-- @else --}}
                            {{-- <figure class="field image is-1by1 imagefigure"> --}}
                                {{-- <img class="thumbnails" src="storage\{{ $item->thumbnail }}" alt="{{ $item->title }}"> --}}
                                {{-- <div class="tags"> --}}
                                    {{-- <span class="tag is-info --}}
                                        {{-- @if($user = Auth::user()) --}}
                                            {{-- notification --}}
                                        {{-- @endif --}}
                                    {{-- ">@isset ($item->category->name){{ $item->category->name }} @else Undefined @endisset</span> --}}
                                {{-- </div> --}}
                            {{-- </figure> --}}
                            {{-- @endisset --}}

                            {{-- <div class="field is-grouped icons-under-image"> --}}
                                {{-- @empty($item->youtube_url) --}}
                                {{-- <a href="{{ "storage/" . explode('"', $item->file)[3] }}" download class="button downloadbutton is-info download"><i class="fas fa-download"></i></a> --}}
                                {{-- @endempty --}}
                            {{-- </div> --}}

                        {{-- </div> --}}


                        
                    @empty($item->youtube_url)
                    <div class="modal">
                        <div class="modal-background"></div>
                        <a class="btn zoom"><i class="fas fa-search-plus"></i></a>
                        <a class="btn zoom-out"><i class="fas fa-search-minus"></i></a>
                        <a class="btn zoom-init"><i class="fas fa-recycle"></i></a>
                        <div class="modal-content box target">
                            <p class="image">
                                <img class="selected-image" src="storage\{{ $item->thumbnail }}" alt="{{ $item->title }}">
                            </p>
                        </div>
                        <button id="close" class="modal-close is-large" aria-label="close"></button>
                    </div>
                    @endempty

                    @endforeach
            @else
                <span class="empty">No resources are added...</span>
            @endif
        </div>
            </div>
        </div>

@endsection
