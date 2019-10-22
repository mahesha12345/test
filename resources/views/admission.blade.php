@extends('layout')
@section('content')

<!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">ADMISSION</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="{{URL::to('index')}}">Home</a></li>
                                            <li>ADMISSION</li>
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
           <h3 class="heading-titles">Admission Procedure</h3>
      </div>
     </div>
  </div>
</div>
<!-- end it section -->

<!-- start admission section -->
    
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-6 col-xs-6 vision-area">
         <p>"Please visit us with prior appointment between 9.00 am to 3.00 pm any day from Monday to Friday and on Saturday between 9.00 am to 11.30 am. The admission office will give detailed information about the school, methodology, facilities, fee structure and guide you with the admission procedure followed by a campus tour.</p>      
         <p>Nice Internation School believes in the principle that a good liberal education is a participative process, in which the child is a key participant. In keeping with the spirit of this principle, we will interact with the child in combination with a written exercise .This will facilitate us in understanding the child's readiness for the class to which you have applied. The Principal will meet the parent with the child and on his approval parents can proceed with the admission."</p>      
      <p><br>The following documents are required during admission:<br></p>
       <ul>
           <li><i class="fa fa-check-square-o fa-1x circle-icon"/></i>Birth Certificate copy</li>
           <li><i class="fa fa-check-square-o fa-1x circle-icon"/></i>1 passport size photo</li>
           <li><i class="fa fa-check-square-o fa-1x circle-icon"/></i>Local address proof</li>
           <li><i class="fa fa-check-square-o fa-1x circle-icon"/></i>Previous year report card / transcript</li>
           <li><i class="fa fa-check-square-o fa-1x circle-icon"/></i>Original Transfer Certificate</li>
        </ul>
      </div>
     </div>
  </div>
<!-- end admission section -->
  

<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-6 col-xs-6">
			<div class="download-applicaton">
			   <h3>To download the application form,&nbsp;&nbsp;&nbsp;
         
         <a href="download/pdfurl-guide.pdf" target="_blank" style="border-bottom: 3px solid #fff">click here </a></h3>
			</div>
		</div>
	</div>
</div>  


@endsection