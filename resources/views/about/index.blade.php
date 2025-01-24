@extends('layouts.app')

@section('content')
    <!-- about section start -->
    <div class="about_section layout_padding" style="margin-bottom: 150px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_img"><img src="{{ asset('images/about-img.png') }}"></div>
                </div>
                <div class="col-md-6">
                    <h1 class="about_taital">About This Page</h1>
                    <p class="about_text">Di dalam tugas kelompok ini, kami mengajak Anda untuk berkolaborasi menggunakan
                        teknologi terkini—Filament dan Leaflet. Dengan Filament, Anda dapat mengembangkan visualisasi peta
                        yang interaktif dan responsif, sedangkan Leaflet memungkinkan pembuatan peta web yang mudah
                        digunakan dengan berbagai fitur dinamis. Melalui tugas ini, Anda akan mengembangkan keterampilan
                        dalam membangun peta tematik yang tidak hanya informatif tetapi juga menarik bagi penggunanya.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
@endsection
