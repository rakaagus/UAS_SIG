@extends('layouts.app')

@section('content')
    <!-- testimonial section start -->
    <div class="testimonial_section layout_padding" style="margin-bottom: 150px">
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
                                        <h4 class="client_name">Raka Agus Maulana</h4>
                                        <div class="client_img"><img src="images/img-raka.jpg" style="width: 200px; border-radius: 5px"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <p class="testimonial_text">tempor incididunt ut labore et dolore magna aliqua. Ut
                                            enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint</p>
                                        <h4 class="client_name">Shafrina Khosya Qolba</h4>
                                        <div class="client_img"><img src="images/img-safrina.jpg" style="width: 200px; border-radius: 5px"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <p class="testimonial_text">tempor incididunt ut labore et dolore magna aliqua. Ut
                                            enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint</p>
                                        <h4 class="client_name">Zufikar Hilman Prayogo</h4>
                                        <div class="client_img"><img src="images/img-hilman.png"></div>
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
@endsection
