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
                               <img src="img/academics/2.jpg" alt="" style="height: 420px;width: 100%    ">
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
     
      <li class="active mar">
       <a href="{{URL::to('/elementary')}}">
          Elementary School
        </a>
      </li>
     
       <li class="mar">
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
        <p >The Nice International School's Elementary Section contains understudies from multi-faceted and multi-social foundations. The Elementary School at NIS incorporates Grades 1 to 5.</p>
         <p> We encourage a climate and mood that commends these distinctions and foundations in a warm and supporting condition. </p>
         <p>We trust that the way youngsters are dealt with, and how they treat others thusly, is of foremost significance in making them great individuals and mindful natives.</p>
       <p>Our committed and hugely talented faculty work as a cohesive team to accomplish the goals and objectives of our school. To this end, we focus not only on purely academic objectives but also on the child’s personality and emotional development.</p>
     
     </div>
      </div>
    </div>
</div>




@endsection