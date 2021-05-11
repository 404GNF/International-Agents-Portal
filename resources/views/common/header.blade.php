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
    </div>
</nav>
