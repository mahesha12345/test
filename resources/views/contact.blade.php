@extends('layout')
@section('content')

 <!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">CONTACT US</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="{{URL::to('index')}}">Home</a></li>
                                            <li>CONTACT</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                <!--Google Map Area Start-->
                <div class="google-map-area">
                    <!--  Map Section -->
                    <div id="contacts" class="map-area">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.050420320306!2d78.12655961406749!3d13.03246121706787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3badef740f1280d9%3A0x6b9abbdcba974c8e!2sNice+International+school!5e0!3m2!1sen!2sin!4v1505294404422" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> </div>
                </div>
                <!--End of Google Map Area-->
                <!--Contact Form Area Start-->
                <div class="contact-form-area section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <h4 class="contact-title">contact info</h4>
                                <div class="contact-text">
                                    <p><span class="c-icon"><i class="zmdi zmdi-phone"></i></span><span class="c-text">+9945304490</span></p>
                                    <p><span class="c-icon"><i class="zmdi zmdi-email"></i></span><span class="c-text">rshnice@gmail.com</span></p>
                                    <p><span class="c-icon"><i class="zmdi zmdi-pin"></i></span><span class="c-text">Nice International School<br>
                                  S.Madamangala, Bangarpet Taluk,<br>Kolar Dist</span></p>
                                </div>
                                <h4 class="contact-title">social media</h4>
                                <div class="link-social">
                                        <a><i class="zmdi zmdi-facebook"></i></a>
                                        <a><i class="zmdi zmdi-google-plus"></i></a>
                                        <a><i  class="zmdi zmdi-twitter"></i></a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h4 class="contact-title">send your massage</h4>
                                <form action="rrrr" method="post">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}"/ >
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="text" name="name" id="name" placeholder="name" required>
                                        </div>
                                         <div class="col-md-4">
                                            <input type="text" name="phone" id="phone" placeholder="Phone no" >
                                        </div>
                                        <div class="col-md-4">
                                            <input type="email" name="email" id="email" placeholder="Email">
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                            <button type="submit" class="button-default">SUBMIT</button>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Contact Form-->
               




@endsection