@extends('layout')
@section('content')

<!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">Image Gallery</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="{{URL::to('index')}}">Home</a></li>
                                            <li>Gallery</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                <!--Gallery Area Start-->
                <div class="gallery-area pt-110 pb-130">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 mb-30 col-sm-6">
                                <div class="gallery-img">
                                    <img src="img/teacher/11.jpg" alt="">
                                    <div class="hover-effect">
                                        <h2>Educational Courses</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit maecenas luctus nunc</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-30 col-sm-6">
                                <div class="gallery-img">
                                    <img src="img/teacher/22.jpg" alt="">
                                    <div class="hover-effect">
                                        <h2>Educational Courses</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit maecenas luctus nunc</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="gallery-img">
                                    <img src="img/teacher/33.jpg" alt="">
                                    <div class="hover-effect">
                                        <h2>Educational Courses</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit maecenas luctus nunc</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Gallery Area-->

@endsection