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

<div class="sticky-social" id="social">
    <ul class="social">
        <li class="fb"><a href="https://www.facebook.com/groups/996378877047488/?fref=ts" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li class="twitter"><a href="https://twitter.com/hzeeland?lang=en" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li class="linkedin"><a href="https://www.linkedin.com/sharing/share-offsite/?url=https%3A%2F%2Finfo.hz.nl%2Fwebshop%23.YMtNws--NC0.linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        <li class="youtube"><a href="https://www.youtube.com/channel/UCUsGkGPCSHUK44BJ2YYEBxg" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
        <li class="email"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
        <span class="icon is-medium" id="hide-social">
            <i class="fas fa-caret-left"></i>
        </span>
    </ul>
</div>
<div class="sticky-social" id="show-social" style="visibility: hidden;">
    <ul class="social">
        <span class="icon is-medium" id="hide-social">
            <i class="fas fa-caret-right"></i>
        </span>
    </ul>
</div>
