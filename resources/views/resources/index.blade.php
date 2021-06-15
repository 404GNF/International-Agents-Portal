@extends('common.template')
@section('content')

    <!-- 1st section of the page: shows the title + buttons if the user is an administrator -->
    <section class="hero is-medium is-bold is-link">
        <div class="hero-body" style="background-size: cover;">
            <div class="container">
                <p class="title is-2">Resources</p>

                <!-- Add buttons (shortcuts) for the administrator user -->
                @if ($user = Auth::user())
                    <div onclick="window.location.href='/admin/resources'" class="button is-primary">Manage Resources</div>
                    <div onclick="window.location.href='/admin/videos'" class="button is-primary">Manage Videos</div>
                    <div onclick="window.location.href='/admin/categories'" class="button is-primary">Manage Categories
                    </div>
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
                        <input id="searchbar" class="input" type="search" placeholder="Search..." />
                        <span class="icon is-small is-right"><i class="fas fa-search"></i></span>
                    </p>
                </div>
                <!-- Filter options -->
                <div class="container">
                    <div>
                        <p class="title is-5">Filter</p>
                    </div>
                    <hr>
                    <!-- Select a category -->
                    <div class="pb-3">
                        <p class="pb-2">Category</p>
                        <button id="All" class="button filterbutton is-info is-small mb-1">All</button>
                        @foreach ($categories as $category)
                            <button id="{{ str_replace(' ', '-', $category->name) }}"
                                class="button filterbutton is-small mb-1">{{ $category->name }}</button>
                        @endforeach
                    </div>
                    <!-- Sort and filter -->
                    <div>
                        <p class="pb-2">File Type</p>
                        <div class="select is-fullwidth is-small mb-4">
                            <select id="file-formats">
                                <option value="0">Any file type</option>
                                @foreach ($items->file_formats as $format)
                                    <option value="{{ $format }}">{{ strtoupper($format) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <p class="pb-2">Name</p>
                        <div class="select is-fullwidth is-small mb-4">
                            <select name="name" id="name-select">
                                <option value="0">No filter</option>
                                <option value="a-z">A-Z</option>
                                <option value="z-a">Z-A</option>
                            </select>
                        </div>
                        <p class="pb-2">Date</p>
                        <div class="select is-fullwidth is-small mb-4">
                            <select name="date" id="date-select">
                                <option value="0">No filter</option>
                                <option value="old-new">Oldest to Newest</option>
                                <option value="new-old">Newest to Oldest</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Index/show section -->
            <div id="itemContainer" class="container">



                <!-- Checks if there are items to display -->
                @if (!$items->isEmpty())

                    <!-- Loop through every item -->
                    @foreach ($items as $item)

                        <!-- Card/box for 1 item; Adds a class name when user filter categories -->
                        <div
                            class="is-full box is-one-third @isset($item->category->name){{ str_replace(' ', '-', $item->category->name) }}@else 'Undefined' @endisset {{ $item->file_format }}">
                            @isset($item->youtube_url)
                                <article class="media">
                                    <!-- Thumbnail -->
                                    <figure class="media-left">
                                        <p class="image is-128x128 is-square">
                                            <img src="https://img.youtube.com/vi/{{ explode('=', $item->youtube_url)[1] }}/hqdefault.jpg"
                                                alt="video thumbnail" style="cursor: default;">
                                        </p>
                                    </figure>
                                    <!-- Body of the card/box -->
                                    <div class="media-content">
                                        <div class="content">
                                            <p class="title ">{{ $item->title }}</p>
                                            <p class="subtitle is-6">
                                                {{ 'Uploaded at: ' . date_format($item->created_at, 'd/m/y') }}</p>
                                            <!-- Action buttons -->
                                            <div class="columns px-3">
                                                <!-- Open (in a new tab) button -->
                                                <a href="{{ $item->youtube_url }}" target="blank"
                                                    class="button is-orange is-small is-fullwidth column mr-2">
                                                    <span class="pr-2">
                                                        <i class="fas fa-share-square"></i>
                                                    </span>
                                                    <span>Open</span>
                                                </a>
                                                <!-- Preview button -->
                                                <a class="button thumbnails is-info is-small is-fullwidth column ml-2">
                                                    <span class="pr-2">
                                                        <i class="fas fa-eye"></i>
                                                    </span>
                                                    <span>Preview</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @else
                                <article class="media">
                                    <!-- Thumbnail -->
                                    <figure class="media-left">
                                        <p class="image is-128x128 is-square">
                                            <img src="storage/{{ $item->thumbnail }}" alt="{{ $item->title }}"
                                                style="object-fit: cover; cursor: default;">
                                        </p>
                                    </figure>
                                    <!-- Body of the card/box -->
                                    <div class="media-content">
                                        <div class="content">
                                            <p class="title ">{{ $item->title }}</p>
                                            <p class="subtitle is-6">
                                                {{ 'Uploaded at: ' . date_format($item->created_at, 'd/m/y') }}</p>
                                            <!-- Makes sure the item is not a youtube video -->
                                            @empty($item->youtube_url)
                                                <!-- Action buttons -->
                                                <div class="columns px-3">
                                                    <!-- Download button -->
                                                    <a href="{{ 'storage/' . explode('"', $item->file)[3] }}" download
                                                        class="button is-orange is-small is-fullwidth column mr-2">
                                                        <span class="pr-2">
                                                            <i class="fas fa-download"></i>
                                                        </span>
                                                        <span>Download</span>
                                                    </a>
                                                    <!-- Preview button -->
                                                    <a class="button thumbnails is-info is-small is-fullwidth column ml-2">
                                                        <span class="pr-2">
                                                            <i class="fas fa-eye"></i>
                                                        </span>
                                                        <span>Preview</span>
                                                    </a>
                                                </div>
                                            @endempty
                                        </div>
                                    </div>
                                </article>
                            @endisset
                            <div id="{{ $item->created_at }}" class="created_at-date"></div>
                        </div>


                        <!-- HTML to show an item's content;
                                    Modal is called when the user click on a "preview" button;
                                    Needs ./public/js/function.js to work properly;
                                -->
                        <div class="modal">
                            <div class="modal-background"></div>
                            <a class="btn zoom"><i class="fas fa-search-plus"></i></a>
                            <a class="btn zoom-out"><i class="fas fa-search-minus"></i></a>
                            <a class="btn zoom-init"><i class="fas fa-recycle"></i></a>
                            <div class="box target">
                                <p class="image" style="height: 80vh;">
                                    <!-- Checks if a video, file or images should be displayed -->
                                    @isset($item->youtube_url)
                                        <iframe class="has-ratio" width="100%" height="100%"
                                            src="https://www.youtube.com/embed/{{ explode('=', $item->youtube_url)[1] }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    @else
                                        @isset($item->file)
                                            <embed
                                                src="storage/{{ json_decode(substr($item->file, 1, -1), true)['download_link'] }}"
                                                />
                                        @else
                                            <img class="selected-image target" src="storage\{{ $item->thumbnail }}"
                                                alt="{{ $item->title }}">
                                        @endisset
                                    @endisset
                                </p>
                            </div>
                            <button id="close" class="modal-close is-large" aria-label="close"></button>
                        </div>

                    @endforeach
                @else
                    <!-- Displays a message when there is 0 item to show -->
                    <span class="empty">No resources are added...</span>
                @endif
            </div>
        </div>
    </div>

@endsection
