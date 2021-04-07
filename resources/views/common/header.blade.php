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

            <a href = "/resources" class="navbar-item {{ Request::path() === 'resources' ? "is-active" : "" }}">
                Resources
            </a>

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
