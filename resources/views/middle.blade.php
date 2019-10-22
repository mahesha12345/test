@extends('layout')
@section('content')

<!--Breadcrumb Banner Area Start-->
               <!--  <div class="breadcrumb-banner-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">Early Year</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="index.html">Home</a></li>
                                            <li>Elementary School</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--End of Breadcrumb Banner Area-->

        

                <!-- images section start -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                               <img src="img/academics/3.jpg" alt="" style="height: 420px;width: 100%    ">
                            </div>
                        </div>
                    </div>

                <!-- end image section -->
        <!-- end header section -->
     <div class="container-fluid ">
    <div class="row allser">
    <ul class ="nav-stacked nav-tab nav nav-pills col-md-2" style="margin-top: 2%;">
      <li class="mar" >
       <a href="{{URL::to('/early-year')}}">
        Early Year   
        </a>
      </li>
     
      <li class="mar">
       <a href="{{URL::to('/elementary')}}">
          Elementary School
        </a>
      </li>
     
  <li class="active mar">
 <a href="{{URL::to('/middle')}}">
         Middle School
        </a>
      </li>
        
     
      

    </ul>
     <div class="tab-content col-md-10 vision-area">
      <div class="tab-pane active sec-title tabs-paragraph" id="fall">
      <div class="col-md-12">
      <div class="col-md-4">
      <div class="row">
      <!-- <img src="images/team/house-keeping1.jpg" class="img-responsive" alt="" style="height: 165px; width:320px; margin-left: -14px;">
       --></div>
      </div>
      <div class="col-md-8">
      <div class="row">
     <!--  <h2 class="all-font">Early Year</h2> -->
      </div>
      </div>
      </div>
        <p style="margin-top:20px;">Middle School is a basically characterizing point in the instructive vocation of an understudy. It fills in as an extension between Elementary School and High School, and has a long haul affect on an understudy's preparation for future scholastic difficulties. At Middle School, understudies start to assume greater liability for their learning and the instructor accept the part of a facilitator.</p>
         <p>Educational modules configuration, showing techniques and evaluations are lined up with the measures of the center program created by our accomplished staff individuals.</p>
      </div>
      </div>
    </div>
</div>




@endsection