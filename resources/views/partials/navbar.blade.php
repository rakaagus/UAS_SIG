<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"><img src="{{ asset('images/logo-2.png') }}"></a>
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
            <li class="nav-item dropdown {{ Request::is('tematik*') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tematik
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/tematik/jumlah-penduduk">Populasi Penduduk</a>
                    <a class="dropdown-item" href="/tematik/jumlah-perokok">Presentasi perokok</a>
                    <a class="dropdown-item" href="/tematik/jumlah-ternak">Presentasi Jumlah Ternak</a>
                    <a class="dropdown-item" href="/tematik/jumlah-kemiskinan">Presentasi Jumlah Kemiskinan</a>
                </div>
            </li>
            <li class="nav-item {{ Request::is('our_team') ? 'active' : '' }}">
                <a class="nav-link" href="/our_team">Our Team</a>
            </li>
        </ul>
    </div>
</nav>
