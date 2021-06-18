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

            <a href = "/how-to-apply" class="navbar-item {{ Request::path() === 'how-to-apply' ? "is-active" : "" }}">
                How to apply?
            </a>

            <a href = "/socials" class="navbar-item {{ Request::path() === 'socials' ? "is-active" : "" }}">
                Socials
            </a>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                    @if (Auth::guest())
                        <div onclick="window.location.href='/admin'" class="button is-success menulogin">Login</div>
                    @else
                        <div onclick="window.location.href='/logout'" class="button is-danger menulogin">Logout</div>
                    @endif
            </div>
        </div>
    </div>
</nav>
