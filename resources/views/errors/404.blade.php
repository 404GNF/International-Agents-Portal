@extends('common.welcome')

@section('content')
    <section class="hero is-medium is-bold is-link is-fullheight">
        <div class="hero-body">
            <div class="container">
                <p class="title is-1">404 Error</p>
                <p class="mb-6 subtitle is-1">The page was not found</p>
                <p class="mb-1 subtitle is-3 has-text-white">The link you clicked might be out dated.<br>Try return to the previous page, or simply go to the home page.</p>
                <div class="mt-6">
                    <div class="mt-6 buttons are-large">
                        <a class="has-text-white button is-outlined is-size-3 mr-4" style="background: #ee7a00" href="#">Return Back</a>
                        <a class="has-text-white button is-outlined is-size-3 ml-4" style="background: #3298dc" href="#">Go Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
