@extends('layout')
@section('content')


<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">student details</div>
                           <div style="float:right; font-size: 80%; position: relative; top:-28px">
                                        <a class="btn btn-success" href="{{URL::to('accept')}}">back</a>
                            </div>    
                           </div> 
                           
                         <div style="padding-top:30px" class="panel-body" >
                         <form action="accept_assign" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/ >
                        <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Student ID</label>
                                    <div class="col-md-9" style="margin-bottom: 5px;">
                                        <input type="text" class="form-control" name="stud_id" readonly  value="{{$id}}">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Student Name</label>
                                    <div class="col-md-9" style="margin-bottom: 5px;">
                                        <input type="text" class="form-control" name="stud_name" readonly  value="{{$name}}">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">start point</label>
                                    <div class="col-md-9" style="margin-bottom: 5px;">
                                        <input type="text" class="form-control" name="start_point"  readonly value="{{$message}}">
                                    </div>
                                </div>
                              
                                <br>
                              
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" class="btn btn-info" style="margin-top: 10px; margin-left:122px;"><i class="icon-hand-right"></i> &nbsp; Approve</button>
                                       
                                    </div>
                         </form>
@endsection