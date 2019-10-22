<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// use Storage;

// use App\Http\Requests;
// use App\Http\Controllers\Controller;

// class ImageController extends Controller
// {
//     public function upload() {
//     if(Input::hasFile('file')) {
      //upload an image to the /img/tmp directory and return the filepath.
//       $file = Input::file('file');
//       $tmpFilePath = '/img/tmp/';
//       $tmpFileName = time() . '-' . $file->getClientOriginalName();
//       $file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
//       $path = $tmpFilePath . $tmpFileName;
//       return response()->json(array('path'=> $path), 200);
//     } else {
//       return response()->json(false, 200);
//     }
//   }
// }
