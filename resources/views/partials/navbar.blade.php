<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"><img src="{{ asset('images/logo.png') }}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item {{ Request::is('kabkota') ? 'active' : '' }}">
                <a class="nav-link" href="/kabkota">Kabkota</a>
            </li>
            <li class="nav-item {{ Request::is('provinsi') ? 'active' : '' }}">
                <a class="nav-link" href="/provinsi">Provinsi</a>
            </li>
            <li class="nav-item {{ Request::is('blog.html') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('blog.html') }}">Tematik</a>
            </li>
            <li class="nav-item {{ Request::is('our_team') ? 'active' : '' }}">
                <a class="nav-link" href="/our_team">Our Team</a>
            </li>
        </ul>
    </div>
</nav>
