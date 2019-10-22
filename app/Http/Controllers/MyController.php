<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use App\Http\Controllers\Controller;
class MyController extends Controller
{
	Public function store_contact()
	{
	$st1=$_POST['name'];
	$st2=$_POST['email'];
	$st3=$_POST['message'];
  $st4=$_POST['phone'];
	DB::table('student')->insert(['name'=>$st1,'email'=>$st2,'message'=>$st3,'phone_no'=>$st4,'count'=>0]);
    return Redirect::to('contact');
}
public function balance() 
{
$stid=0;
$balance =  DB::table('student')->where(['count'=>$stid])->get();
return view('admin',['balance' => $balance]);
}
Public function accept()
{
	$aa=0;
	 DB::table('student')->where('id',$aa)->update(array('route'=>'1'));
	 return Redirect::to('admin');	
}

public function update()
{
    $id=$_GET['val'];
	DB::table('student')->where('id',$id)->update(array('count'=>'1'));
	return Redirect::to('admin');
}

public function delete()
{
	$id=$_GET['val'];
	DB::table('student')->where('id',$id)->delete();
	return Redirect::to('admin');
}
public function deleteimage()
{
	$id=$_GET['val'];
	DB::table('photo_gallery')->where('id',$id)->delete();
	return Redirect::to('admin_gallery_view');
}

public function image_upload(Request $request)
{
	 if(isset($request->image))
          {
       $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
          $request->image->move(public_path('photo'),$input['image']);

          }
      else
      {
       $input['image']='NULL';
      }
    DB::table('photo_gallery')->insert(['name'=>$input['image'],'count'=>0]);
   return Redirect::to('gallery_upload');
}
public function get_images()
{
   $count=0;
  $img = DB::table('photo_gallery')->where(['count'=>$count])->get();
   return view('admin_gallery_view',compact('img'));
}
public function get_gallery()
{
   $count=0;
  $img = DB::table('photo_gallery')->where(['count'=>$count])->get();
   return view('gallery',compact('img'));
}

public function login_admin(Request $req)
{
$username=$req->input('username');
$password=$req->input('password');
 $user = DB::table('admin')->where(['username'=> $username,'password'=>$password])->first();
  if (count($user)>0)
        {
        return Redirect::to('admin');
       }
       else
       {
       	return Redirect::to('admin_login');
       }
}



public function form_upload(Request $request)
{
   if(isset($request->image))
          {
       $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
          $request->image->move(public_path('admission_form'),$input['image']);
          }
      else
      {
       $input['image']='NULL';
      }
    DB::table('admission_form')->insert(['name'=>$input['image'],'count'=>0]);
   return Redirect::to('admission-form');
}
}
