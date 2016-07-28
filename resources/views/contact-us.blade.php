@extends('layout')


@section('content')

        <!-- PAGE HEADER -->
        <section class="trd-page-breadcumb-header">
            <div class="container">
                <div class="row">
                    <h1 class="trd-page-title">Contact</h1>
                    <div class="trd-breadcumb-wrapper">
                        <a href="#">Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- PAGE HEADER END -->

        <!-- GOOGLE MAP -->
        <section class="trd-google-map-section">
            <div id="trd-map"></div>
        </section>
        <!-- GOOGLE MAP END -->

        <!-- PAGE CONTETNT -->
        <section class="gl-page-content-section trd-section">
            <div class="container">
                <div class="row">
                    <!-- Contact Form -->
                    <div class="trd-contact-form-wrapper col-md-6 col-sm-6 col-xs-12">
                        <h1 class="trd-section-tittle">Stay <span class="trd-highlight-text">Connected</span></h1>

                        <form action="#">
                            <input type="text" name="trd-name" id="trd-name" placeholder="Your name">
                            <input type="email" name="trd-email" id="trd-email" placeholder="Your email">
                            <textarea name="trd-message" id="trd-message" cols="30" rows="7" placeholder="Your Message"></textarea>

                            <button type="submit" class="trd-btn">Submit</button>
                        </form>
                    </div>
                    <!-- END -->

                    <!-- ADDRESSES WRAPPER -->
                    <div class="trd-office-addresses-wrapper col-md-6 col-sm-6 col-xs-12">

                        <div class="trd-column col-md-6 col-sm-12 col-xs-12">
                            <!-- ADDRESSES -->
                            <div class="trd-office-address">
                                <h3 class="trd-office-title">Texas Office</h3>
                                <ul>
                                    <li class="trd-office-location">Road 3, West side lane Texas,  USA</li>
                                    <li class="trd-office-phone">0632 0152 001</li>
                                    <li class="trd-office-email">mail@gmail.com</li>
                                </ul>
                            </div>
                            <!-- END -->

                            <!-- ADDRESSES -->
                            <div class="trd-office-address">
                                <h3 class="trd-office-title">New York</h3>
                                <ul>
                                    <li class="trd-office-location">Road 3, West side lane Texas,  USA</li>
                                    <li class="trd-office-phone">0632 0152 001</li>
                                    <li class="trd-office-email">mail@gmail.com</li>
                                </ul>
                            </div>
                            <!-- END -->
                        </div>

                        <div class="trd-column col-md-6 col-sm-6 col-xs-12">
                            <!-- ADDRESSES -->
                            <div class="trd-office-address">
                                <h3 class="trd-office-title">Cansas Office</h3>
                                <ul>
                                    <li class="trd-office-location">Road 3, West side lane Texas,  USA</li>
                                    <li class="trd-office-phone">0632 0152 001</li>
                                    <li class="trd-office-email">mail@gmail.com</li>
                                </ul>
                            </div>
                            <!-- END -->

                            <!-- ADDRESSES -->
                            <div class="trd-office">
                                <h3 class="trd-office-title">Arizona Office</h3>
                                <ul>
                                    <li class="trd-office-location">Road 3, West side lane Texas,  USA</li>
                                    <li class="trd-office-phone">0632 0152 001</li>
                                    <li class="trd-office-email">mail@gmail.com</li>
                                </ul>
                            </div>
                            <!-- END -->
                        </div>
                    </div>
                    <!-- End -->
                </div>
            </div>
        </section>
        <!-- PAGE CONTETNT END -->

@stop