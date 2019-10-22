@extends('layout')
@section('content')

<!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">Field Trip </h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="{{URL::to('index')}}">Home</a></li>
                                            <li>Field Trip</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 <!--End of Breadcrumb Banner Area-->



<!-- start it section -->
<div class="facility-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-6 col-xs-6">
           <h3 class="heading-titles">Activities</h3>
      </div>
     </div>
  </div>
</div>
<!-- end it section -->

<!-- start field trip secion -->
<div class="container">
  <div class="row">
    <div class="col-md-12 vision-area">
      <p>Field trips can provide another opportunity for children to explore nature outdoors, whether it’s a walk around the neighbourhood or a drive to a garden, orchard, or farm. Whatever it might be, is based on children’s interests and follow-up activities to build on the children’s experiences during the field trip.</p>
        <p>For example our children</p>
        <ul>
            <li> <i class="fa fa-star fa-1x circle-icon"/></i> Visit to a local farm</li>
            <li> <i class="fa fa-star fa-1x circle-icon"/></i>Visit to a nursery</li>
            <li> <i class="fa fa-star fa-1x circle-icon"/></i>Visit to traffic junction</li>
            <li><i class="fa fa-star fa-1x circle-icon"/></i>Visit to post office. etc</li>
        </ul>

    <p>Children are asked to write a report and draw what they see, after they come back.</p>
    <p>This gives further opportunities to scaffold children’s learning</p>

    </div>
  </div>
</div>

<!-- end field-trip secion>

<!--Gallery Area Start-->
                <div class="gallery-area pt-110 pb-130">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 mb-30 col-sm-6">
                                <div class="gallery-img">
                                    <img src="img/course/1.jpg" alt="">
                                    <div class="hover-effect">
                                        <h2>Educational Courses</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit maecenas luctus nunc</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-30 col-sm-6">
                                <div class="gallery-img">
                                    <img src="img/course/2.jpg" alt="">
                                    <div class="hover-effect">
                                        <h2>Educational Courses</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit maecenas luctus nunc</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-30 col-sm-6">
                                <div class="gallery-img">
                                    <img src="img/course/3.jpg" alt="">
                                    <div class="hover-effect">
                                        <h2>Educational Courses</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit maecenas luctus nunc</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-30 col-sm-6">
                                <div class="gallery-img">
                                    <img src="img/course/4.jpg" alt="">
                                    <div class="hover-effect">
                                        <h2>Educational Courses</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit maecenas luctus nunc</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-30 col-sm-6">
                                <div class="gallery-img">
                                    <img src="img/course/5.jpg" alt="">
                                    <div class="hover-effect">
                                        <h2>Educational Courses</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit maecenas luctus nunc</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-30 col-sm-6">
                                <div class="gallery-img">
                                    <img src="img/course/6.jpg" alt="">
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