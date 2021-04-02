<nav class="navbar is-info" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
            <b>HZ</b>
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a href = "/" class="navbar-item {{ Request::path() === '/' ? "is-active" : "" }}">
                Home
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Resources
                </a>

                <div class="navbar-dropdown">
                    <a href="/brochures"
                            class="navbar-item {{ Request::path() === 'brochures' ? "is-active" : "" }}" >
                        Brochures
                    </a>
                    <a href="/leaflets"
                            class="navbar-item {{ Request::path() === 'leaflets' ? "is-active" : "" }}">
                        Leaflets
                    </a>
                    <a href="/rollUps"
                            class="navbar-item {{ Request::path() === 'rollUps' ? "is-active" : "" }}">
                        Roll-ups
                    </a>
                    <a href="/posters"
                            class="navbar-item {{ Request::path() === 'posters' ? "is-active" : "" }}">
                        Posters
                    </a>
                    <a href="/videos"
                            class="navbar-item {{ Request::path() === 'videos' ? "is-active" : "" }}">
                        Videos
                    </a>
                </div>
            </div>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Socials
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item">
                        Facebook
                    </a>
                    <a class="navbar-item">
                        Twitter
                    </a>
                    <a class="navbar-item">
                        LinkedIn
                    </a>
                </div>
            </div>
            <a href = "/howToApply" class="navbar-item {{ Request::path() === 'howToApply' ? "is-active" : "" }}">
                How to apply?
            </a>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-primary" style="background: #ffb380">
                        <strong>Sign up</strong>
                    </a>
                    <a class="button is-light">
                        Log in
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
