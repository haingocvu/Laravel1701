<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function getUpload(){
        return view('upload');
    }
    function postUpload(Request $request){
        if($request->hasFile("uploadFiles")){
            $file = $request->file('uploadFiles');
            // echo $file->getClientSize()."</br>";
            // echo $file->getCLientOriginalName()."</br>";
            // echo $file->getClientMimeType()."</br>";
            // echo $file->getClientOriginalExtension()."</br>";
            // dd($file);
            //check size
            if($file->getClientSize() <= 500*1024){
                //check extension
                if(\in_array($file->getClientOriginalExtension(), ['jpg', 'jpeg', 'gif', 'png'])){
                    //rename
                    $file->move('files', date('Y-m-d-h-i-s-').$file->getClientOriginalName());   
                }else{
                    return redirect()->back()->with('message', 'file not allowed');
                }
            }else{
                return redirect()->back()->with('message', 'File too large');
            }
        }else{
            return redirect()->back()->with('message', 'please choose file');
        }
    }
}
