<?php

namespace App\Http\Controllers\example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function index(){
        return view('home');
        
    }


    public function resultIndex(Request $request){
      
        
            $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|max:155',
                'password' => 'required|min:6|max:12'

            ]);

            // dd($request->all());
          \Log::channel('contactStory')->info('the contact form submited by '.rand(1,20));
          return redirect()->back();
           
    }

}