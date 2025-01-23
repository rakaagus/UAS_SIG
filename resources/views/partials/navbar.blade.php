<!-- resources/views/partials/navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('index.html') }}"><img src="{{ asset('images/logo.png') }}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="{{ url('index.html') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('about.html') }}">About</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('icecream.html') }}">Kabkota</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('services.html') }}">Provinsi</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('blog.html') }}">Tematik</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('contact.html') }}">Our Team</a></li>
        </ul>
    </div>
</nav>
