@extends('common.template')

@section('content')
    <section class="hero is-bold is-link">
        <div class="hero-body" style="
            background: url('https://www.hz.nl/imager/uploads/images/3.-Werk-en-studie/Headers/docent-coacht-studenten-003_c8fa470484be7b69be5daae77a1602c5.jpg') no-repeat center center;
            background-size: cover;"
        >
            <div class="container">
                <p class="title is-2">Socials</p>
            </div>
        </div>
    </section>
    <section>
        <div class="hero-body">
            <div class="columns is-centered py-6">
                <div class="card has-text-centered column is-one-fifth m-4">
                    <div class="card-image">
                        <figure class="image">
                            <a href="https://www.youtube.com/c/HZUniversityofAppliedSciences/playlists?view=50&sort=dd&shelf_id=5" target="_blank">
                                <img src="/img/ytImg.png" alt="image">
                            </a>
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <h1>YouTube</h1>
                        </div>

                        <div class="content">
                            This is our youtube channel. Here you can learn more about our university and the life of a student.
                        </div>
                    </div>
                </div>

                <div class="card has-text-centered column column is-one-fifth m-4">
                    <div class="card-image">
                        <figure class="image">
                            <a href="https://www.facebook.com/groups/996378877047488/?fref=ts" target="_blank">
                                <img src="/img/fbImg.png" alt="image">
                            </a>
                        </figure>
                    </div>
                    <div class="card-content center">
                        <div class="content">
                            <h1>Facebook</h1>
                        </div>

                        <div class="content">
                            This is our facebook page. Here you can get to know us and our community.
                        </div>
                    </div>
                </div>

                <div class="card has-text-centered column column is-one-fifth m-4">
                    <div class="card-image">
                        <figure class="image">
                            <a href="https://www.linkedin.com/school/hz-university-of-applied-sciences/" target="_blank">
                                <img src="/img/linImg.png" alt="image">
                            </a>
                        </figure>
                    </div>
                    <div class="card-content center">
                        <div class="content">
                            <h1>Linkedin</h1>
                        </div>

                        <div class="content">
                            This is our linkedin page. Here you can connect with us and learn more about us.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
