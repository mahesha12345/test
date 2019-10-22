@extends('layout')
@section('content')


 <!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">VISSION ADN MISSION</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="{{URL::to('index')}}">Home</a></li>
                                            <li>VISSION AND MISSION</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->


<!-- start vission and mission section -->
<div class="container" style="margin-bottom:24px;">
  <div class="row">
     <div class="col-md-6 vision-area ">
       <h3 class="heading-titles">VISSION</h3>
       <P>To set standards in raising a God conscious, knowledgeable, well balanced and responsible generation of lifelong learners possessing skills and attitudes necessary to positively influence society.</P>
     </div>
     <div class="col-md-6 vision-area">
       <h3 class="heading-titles ">MISSION</h3>
       <P>Nice International School will continuously strive towards excellence in all aspects of education by adopting a holistic and dynamic curriculum and providing an emotionally safe and spiritually and morally invigorating environment to all types of learners, irrespective of their social status or religious leaning.</P>
     </div>
  </div>
     <div class="col-md-6 vision-area">
       <h3 class="heading-titles">Our Core Values</h3>
       <ul>
            <li><i class="fa fa-star fa-1x circle-icon"/></i>Faith</li>
            <li><i class="fa fa-star fa-1x circle-icon"/></i>Care</li>
            <li><i class="fa fa-star fa-1x circle-icon"/></i>Diversity</li>
            <li><i class="fa fa-star fa-1x circle-icon"/></i>Commitment</li>
            <li><i class="fa fa-star fa-1x circle-icon"/></i>Striving for excellence</li>
            <li><i class="fa fa-star fa-1x circle-icon"/></i>Making a difference</li>
       </ul>
       </div>
     <div class="col-md-6 vision-area">
       <h3 class="heading-titles">Our Beliefs</h3>
         <ul>         
         	<li><i class="fa fa-star fa-1x circle-icon"/></i>Stimulating minds to think differently</li>
         	<li><i class="fa fa-star fa-1x circle-icon"/></i>Assimilating knowledge for critical thought</li>
         	<li><i class="fa fa-star fa-1x circle-icon"/></i>Developing generations of change makers who will contribute &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; positively to a pluralistic world</li>
         	<li><i class="fa fa-star fa-1x circle-icon"/></i>Deriving morality from a spiritual base</li>
         	<li><i class="fa fa-star fa-1x circle-icon"/></i>Developing balanced outlook on life</li>
         	<li><i class="fa fa-star fa-1x circle-icon"/></i>Applying ethics in every aspect of life</li>
         </ul>
     </div>
  </div>
</div>
<!-- end vission and mission  section-->

@endsection