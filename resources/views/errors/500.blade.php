@extends('common.welcome')

@section('content')
    <section class="hero is-medium is-bold is-link is-fullheight is-overlay">
        <div class="hero-body">
            <div class="container">
                <p class="title is-1">500 Error</p>
                <p class="mb-6 subtitle is-1">Internal server error</p>
                <p class="mb-1 subtitle is-3 has-text-white">Our server encountered a problem.<br>Try reloading the page, returning to the previous page, or simply to the home page.</p>
                <div class="mt-6">
                    <div class="mt-6 buttons are-large">
                        <a class="has-text-white button is-outlined is-size-3 mr-4 px-6" style="background: #3298dc" onclick="window.history.back()">Back</a>
                        <a class="has-text-white button is-outlined is-size-3 mx-4 px-6" style="background: #ee7a00" href="{{ url()->current() }}">Reload</a>
                        <a class="has-text-white button is-outlined is-size-3 ml-4 px-6" style="background: #3298dc" href="/">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
