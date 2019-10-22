@extends('layout2')
@section('content')

     
 <div id="regContainer" class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
              <div class="panel-heading"> 
                                 <!--  <div class="col-md-offset-3 col-md-9">
                                       <a class="btn btn-primary" href="{{URL::to('/index')}}" style="color:#fff; float:right; padding-top: 4px;margin-right:-30px;"">LOG OUT</a>
                                       
                    </div>  -->
</div>
<h3> Student Sended Request</h3>
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Phone No</th>
            <th>message</th>
             <!--  <th>Approve</th> -->
             <th>Delete</th>
             </tr>
    @foreach($balance as $balance1)
    <tr>
        <td>{{ $balance1->id}}</td>
         <td>{{ $balance1->name}}</td>
        <td>{{ $balance1->phone_no}}</td>
        <td>{{$balance1->message}}</td>
      <!--  <td> <a class="btn btn-success"  href='update?val={{$balance1->id}}'>accept</a>  
       </td> -->
        <td> <a class="btn btn-danger" href='delete?val={{$balance1->id}}'>delete</a></td>
     </tr>
      
    @endforeach
    </table>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>



@endsection