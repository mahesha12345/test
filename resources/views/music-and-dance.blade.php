@extends('layout')
@section('content')

<!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">Music and Dance</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="{{URL::to('index')}}">Home</a></li>
                                            <li>Music and dance</li>
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
<!-- start music and dance section -->
<div class="container">
   <div class="row">
       <div class="col-md-12 vision-area">
         <h3>DANCE</h3>
            <p>Dance is more than the exploring of different ways to make a shape or learning a series of steps to music; it is a way of moving that uses the body as an instrument of expression and communication. Through dance students learn teamwork, focus, and improve on their gross motor skills. Dance awakens new perceptions in children, which helps them learn and think in new ways.</p>
            <p>Dance allows children to simultaneously move, think , feel. This is the best way that they can learn to express themselves and communicate.</p>
          <h3 style="margin-top: 40px;">MUSIC</h3>
           <p>Western and light music is taught in Shcool</p>
           <p>Where words fail, MUSIC speaks… Music is fun, there aren’t any rules, it lets you express yourself, the rhythm within.</p>
       </div>
   </div>
</div>
<!-- end music and dance section -->


<!--Gallery Area Start-->
                <div class="gallery-area pt-110 pb-130">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 mb-30 col-sm-6">
                                <div class="gallery-img">
                                    <img src="activities/1.jpg" alt="">
                                   
                                </div>
                            </div>
                            <div class="col-md-4 mb-30 col-sm-6">
                                <div class="gallery-img">
                                    <img src="activities/2.jpg" alt="">
                                    <div class="hover-effect">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-30 col-sm-6">
                                <div class="gallery-img">
                                    <img src="activities/4.jpg" alt="">
                                    
                                </div>
                            </div>
                            <div class="col-md-4 mb-30 col-sm-6">
                                <div class="gallery-img">
                                    <img src="activities/3.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-4 mb-30 col-sm-6">
                                <div class="gallery-img">
                                    <img src="activities/5.jpg" alt="">
                                   
                                </div>
                            </div>
                            <div class="col-md-4 mb-30 col-sm-6">
                                <div class="gallery-img">
                                    <img src="activities/6.jpg" alt="">
                                </div>
                            </div>
                           
                           
                        </div>
                    </div>
                </div>
                <!--End of Gallery Area-->


@endsection