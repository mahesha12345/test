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
                                            <li>Early Year</li>
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
                               <img src="img/academics/1.jpg" alt="" style="height: 420px;width: 100%    ">
                            </div>
                        </div>
                    </div>

                <!-- end image section -->
        <!-- end header section -->
     <div class="container-fluid ">
    <div class="row allser">
    <ul class ="nav-stacked nav-tab nav nav-pills col-md-2" style="margin-top: 2%;">
      <li class="active mar" >
       <a href="{{URL::to('/early-year')}}">
        Early Year   
        </a>
      </li>
     
      <li class="mar">
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
        <p style="margin-top:20px;">The Early Years at NIS is a family inside a family. It takes into account the particular needs of youthful students in a safe and sustaining family condition, inside the bigger canvas of the school group. The program concentrates on building the establishment of learning by outfitting understudies with enter aptitudes in education and numeracy, empowering them for future learning. Youngsters are urged to think freely and work cooperatively. There is likewise accentuation put on building confidence and certainty amid these delicate years, by helping understudies comprehend themselves better as students and in addition individuals from a group.</p>
        </div>
     
      </div>
    </div>
</div>




@endsection