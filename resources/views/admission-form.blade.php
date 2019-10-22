@extends('layout2')
@section('content')


                       <div class="container">
                       <div class="row">            
                  <div class="form-group col-lg-12" style="background-color:#F4F5D6; padding-bottom: 17px;">
                                      <h2> Admission Form</h2>
                          <div class="panel-body">   
                         
                             <div class="form-group field-m">
                                   
                                    <label class="control-label" for="m">form</label>
                                     <form action="form_upload" method="post" enctype="multipart/form-data">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="file" id="m" name="image" required onchange="readURL(this);">

                                    <div class="help-block"></div>
                                   
                                    </div> 
                                    
                                        <img id="blah" src="img/banner/1.jpg" alt="your image" style="height: 150px; width: 143px; margin-bottom: 10px;" >
                                        <br>
                                        
                                         <p class="btn o btn-primary" id="o">Clear</p>
                                           <button type="submit" class=" btn btn-success">SUBMIT</button>
                                  </form>
                                      
                                                 <!--<//?= $form->field($model, 'photos')->textInput(['maxlength' => true]) ?>-->
            </div>
</div>
</div>
       </div> 
        
 
<script>
         function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(143)
                        .height(150);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

<script>
$(document).on('click','.o',function(){
  $('input[type=file]').val('');
   $('#blah').attr('src','img/banner/1.jpg');
});
</script>                    

@endsection