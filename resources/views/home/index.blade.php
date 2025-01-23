<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="banner_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="banner_taital">Final Project SIG</h1>
                    <p class="banner_text">Selamat datang di halaman resmi UAS SIG, tempat di mana kita menghadirkan
                        pendekatan baru dalam pemetaan tematik. Peta tematik adalah alat yang sangat kuat dalam
                        menggambarkan data spasial secara visual, memudahkan pemahaman informasi yang kompleks.
                        Dalam UAS SIG kali ini, kita akan menggali lebih dalam tentang penerapan peta tematik untuk
                        analisis spasial yang lebih efektif.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- about section start -->
    <div class="about_section layout_padding">
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

    <!-- testimonial section start -->
    <div class="testimonial_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="testimonial_taital">Our Team</h1>
                </div>
            </div>
            <div class="testimonial_section_2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial_box">
                            <div id="main_slider" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <p class="testimonial_text">tempor incididunt ut labore et dolore magna aliqua. Ut
                                            enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint</p>
                                        <h4 class="client_name">Marri Fen</h4>
                                        <div class="client_img"><img src="images/client-img.png"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <p class="testimonial_text">tempor incididunt ut labore et dolore magna aliqua. Ut
                                            enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint</p>
                                        <h4 class="client_name">Marri Fen</h4>
                                        <div class="client_img"><img src="images/client-img.png"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <p class="testimonial_text">tempor incididunt ut labore et dolore magna aliqua. Ut
                                            enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint</p>
                                        <h4 class="client_name">Marri Fen</h4>
                                        <div class="client_img"><img src="images/client-img.png"></div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial section end -->

    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact_main">
                        <h1 class="contact_taital">Contact Us</h1>
                        <form action="/action_page.php">
                            <div class="form-group">
                                <input type="text" class="email-bt" placeholder="Name" name="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="email-bt" placeholder="Email" name="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="email-bt" placeholder="Phone Number" name="Phone">
                            </div>
                            <div class="form-group">
                                <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="Message"></textarea>
                            </div>
                            <div class="main_bt"><a href="#">SEND</a></div>
                        </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="location_text">
                        <ul>
                            <li>
                                <a href="#">
                                    <span class="padding_left_10 active"><i class="fa fa-map-marker"
                                            aria-hidden="true"></i></span>Making this the first true</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="padding_left_10"><i class="fa fa-phone" aria-hidden="true"></i></span>Call
                                    : +01 1234567890
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="padding_left_10"><i class="fa fa-envelope"
                                            aria-hidden="true"></i></span>Email : demo@gmail.com
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mail_main">
                        <h3 class="newsletter_text">Newsletter</h3>
                        <div class="form-group">
                            <textarea class="update_mail" placeholder="Enter Your Email" rows="5" id="comment" name="Enter Your Email"></textarea>
                            <div class="subscribe_bt"><a href="#">Subscribe</a></div>
                        </div>
                    </div>
                    <div class="footer_social_icon">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->
@endsection
