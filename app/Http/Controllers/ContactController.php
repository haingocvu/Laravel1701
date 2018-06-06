<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

class ContactController extends Controller
{
    function getContact(){
        return view("contact");
    }
    function postContact(Request $r){
        // echo $r->fullname;
        // echo $r->input('title');
        // dd($r->input());
        // $r->validate([
        //     'fullname'=>'required|min:10|max:100',
        //     'title'=>'required|min:10|max:100',
        //     'email'=>'required|email',
        //     'message'=>'required'
        // ],[
        //     'fullname.required'=>'fullname không được rỗng',
        //     'fullname.min'=>'fullname it nhat :min ki tu',
        //     'fullname.max'=>'fullname nhieu nhat :max ki tu'
        // ]);
        $validator = Validator::make($r->all(), [
                'fullname'=>'required|min:10|max:100',
                'title'=>'required|min:10|max:100',
                'email'=>'required|email',
                'message'=>'required'
            ],[
                'fullname.required'=>'fullname không được rỗng',
                'fullname.min'=>'fullname it nhat :min ki tu',
                'fullname.max'=>'fullname nhieu nhat :max ki tu'
            ]);

        if ($validator->fails()) {
            return redirect()->route('post-contact')
                        ->withErrors($validator)
                        ->withInput();
        }
    }
}
