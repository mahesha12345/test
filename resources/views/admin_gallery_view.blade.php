@extends('layout2')
@section('content')


<div class="container" style="margin-bottom: 55px;">
  <div class="row">
            @foreach($img as $images)
                     <div class="col-md-3">
                        <img  src="photo/{{$images->name}}" style="height: 300px;width: 300px;margin-top: 25px;"/>
                      <br>
                       <td> <a class="btn btn-success" style="margin-top:10px;margin-bottom: 40px;" href='deleteimage?val={{$images->id}}'>Delete</a> </td>
                     </div>
           @endforeach
     </div>
   </div>
</div>
@endsection