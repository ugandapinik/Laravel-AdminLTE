<?php

namespace App\Http\Controllers;


namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;

class AuthController extends Controller{

    /*===============================================
            SECTION - SIGNUP
    ================================================*/
    public function getSignup(){
        $data = array(
            'body_class' =>  'hold-transition login-page',
        );
        return view('auth.signup')->with('data', $data);
    }

    public function postSignup(Request $request){
        dd("Done");
    }


    /*===============================================
            SECTION - SIGNIN
    ================================================*/
    public function getSignin(){
        $data = array(
            'body_class' => 'hold-transition login-page',
        );

        return view('auth.signin')->with('data', $data);
    }

    public function postSignin(Request $request){
        $this->validate($request, array(
            'email' =>  'required',
            'password'  =>  'required',
        ));


        if(!Auth::attempt( $request->only(array('email', 'password'), $request->has('remember')) )){
            return redirect()
                    ->back()
                    ->with('info', 'Invalid Email or Password');
        }

        return redirect('home')
                    ->with('info', 'Welcome to this website.');

    }
}
