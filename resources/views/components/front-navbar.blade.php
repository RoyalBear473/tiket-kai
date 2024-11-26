<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex justify-content-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('/') ? 'active ' : '' }}">
                    <a href="/" class="nav-link">Home</a>
                </li>
                @auth
                    <li class="nav-item {{ Request::is('dashboard') ? 'active ' : '' }}">
                        <a href="/dashboard" class="nav-link">Dashboard</a>
                    </li>
                @else
                    <li class="nav-item {{ Request::is('register') ? 'active ' : '' }}">
                        <a href="/register" class="nav-link">Register</a>
                    </li>
                    <li class="nav-item {{ Request::is('login') ? 'active ' : '' }}">
                        <a href="/login" class="nav-link">Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
