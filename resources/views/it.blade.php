@extends('layout')
@section('content')


<!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">FACILITIES</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="{{URL::to('index')}}">Home</a></li>
                                            <li>Facilities</li>
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
      <div class="col-md-12 col-sm-6 col-xs-6">
           <h3 class="heading-titles">Facilities</h3>
      </div>
  </div>
</div>

<!-- end it section -->
<div class="container">
 <div class="row">
<!-- <div class="col-md-3 column margintop20">
   <ul class="nav nav-pills nav-stacked">
  <li><a href="#sec0"><span class="glyphicon glyphicon-chevron-right"></span>Information Technology</a></li>
  <li><a href="#sec1"><span class="glyphicon glyphicon-chevron-right"></span> Transport</a></li>
  <li><a href="#sec2"><span class="glyphicon glyphicon-chevron-right"></span>Sports</a></li>
  <li><a href="#sec3"><span class="glyphicon glyphicon-chevron-right"></span>Library</a></li>
  <li><a href="#sec4"><span class="glyphicon glyphicon-chevron-right"></span>Canteen</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span>HealthCare</a></li>

</ul>
</div> -->
<div class="col-md-12">
     <div class="flt-block" id="sec0">
              <div class="col-xs-12 col-sm-3 col-md-4"><img src="facilities-images/it1.jpeg" class="img-responsive" alt=""></div>
              <div class="col-xs-12 col-sm-9 col-md-8 vision-area">
                    <h3>Computer Class</h3>
                    <p>We have computer labs  with internet connection exclusively for students. Students visit the computer lab during a designated class.Dedicated and trained teachers are always at hand to help students with research and project work. NIS is also WiFi enabled. </p> 
              </div>
              <div class="clearfix"></div>
               <hr class="style16">
          </div>  

      <div class="flt-block" id="sec1">
             
              <div class="col-xs-12 col-sm-3 col-md-8 vision-area">
                    <h3 class="fecilities-title">Transport</h3>
                    <p>NIS has a fleet of buses that reach most parts of the city. On each bus we have a GPS surveillance and communication system with Live Tracking, Real-Time Alerts and Event Logs. Drivers of the buses are trained and monitored to ensure the safety of each child. Every bus also has a female attendant who is there throughout the journey. In addition, NIS staff is also present on the school buses.</p>
                    </div>
               <div class="col-xs-12 col-sm-9 col-md-4"><img src="facilities-images/transport.jpg" class="img-responsive" alt=""></div>
              <div class="clearfix"></div>
               <hr class="style16">
          </div>  

      <div class="flt-block" id="sec3">
              <div class="col-xs-12 col-sm-3 col-md-4"><img src="facilities-images/SPORTS.jpg" class="img-responsive" alt=""></div>
              <div class="col-xs-12 col-sm-9 col-md-8 vision-area">
                    <h3>Sports</h3>
                    <p>The school is proud of its football field and basketball court available to all students. Both are made of materials that avoid too much stress on the knees. A throwball court is also present.</p> 
              </div>
              <div class="clearfix"></div>
               <hr class="style16">
        </div>

         <div class="flt-block" id="sec4"> 
              <div class="col-xs-12 col-sm-9 col-md-8 vision-area">
                    <h3 class="fecilities-title">Library</h3>
                   <p>The library is an educational and cultural environment where individuals are exposed to ideas through the use of print and non-print resources in many media formats.</p>
                   <p>The library is a book lovers' paradise with novels, magazines, encyclopedia and subject-specific books. The friendly librarians are ever willing to offer a helping hand to students who want to use the library. There is also a story telling room for Kindergarten kids.</p>
                    </div>
               <div class="col-xs-12 col-sm-3 col-md-4"><img src="facilities-images/library.jpg" class="img-responsive" alt=""></div>
              <div class="clearfix"></div>
               <hr class="style16">
          </div>

           <div class="flt-block" id="sec4"> 
           <div class="col-xs-12 col-sm-3 col-md-4"><img src="facilities-images/cafeteria.jpg" class="img-responsive" alt=""></div>
              <div class="col-xs-12 col-sm-9 col-md-8 vision-area">
                    <h3>Cafeteria</h3>
                   <p>The cafeteria starts in the morning, serving breakfast to all the children, teachers and administrative staff. The cafeteria premises are cleaned round the clock and maintained to the highest hygienic standards. To supervise students during lunchtime, a teacher is appointed for monitoring each table.</p>
                     </div>
               <div class="clearfix"></div>
               <hr class="style16">
          </div>

           <div class="flt-block" id="sec4" style="margin-bottom: 22px;">
              <div class="col-xs-12 col-sm-9 col-md-8 vision-area">
                    <h3 class="fecilities-title">HealthCare</h3>
                    <p>NIS has a full-time qualified nurse and doctor. The dispensary is well-stocked and equipped to handle minor injuries, allergies and illnesses. Several beds are available for rest and recuperation. There are hospitals nearby which are easily accessible in case of emergencies.</p>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-4"><img src="facilities-images/hospital2.jpg" class="img-responsive" alt=""></div>
              
              <div class="clearfix"></div>

          </div>
</div>
</div>
</div>
@endsection