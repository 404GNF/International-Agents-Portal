<nav class="navbar is-info" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" onclick="window.location.href='/'">
            <b>HZ International Agents Portal</b>
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
                    <a href="https://www.facebook.com/HZUniversityofAppliedSciences" target="_blank" class="button is-medium is-facebook">
                        <span class="icon">
                          <i class="fab fa-facebook fa-lg"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
