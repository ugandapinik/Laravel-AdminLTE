<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*===============================================
        SECTION - HOME SECTION
================================================*/
Route::resource('/', 'HomeController@index');
Route::resource('/home', 'HomeController@index');




/*===============================================
        SECTION - ALERT DIALOG
================================================*/
Route::get('/alert', function(){
    return redirect('home')->with('info', 'Successfully Signup.');
});


/*===============================================
        SECTION - SIGNUP
================================================*/
Route::get('/signup', array(
    'uses'  =>  'AuthController@getSignup',
    'as'    =>  'auth.signup',
    'middleware'    =>  ['guest'],
));


Route::post('/signup', array(
    'uses'  =>  'AuthController@postSignup',
    'middleware'    =>  ['guest'],
));

/*===============================================
        SECTION - SIGNIN
================================================*/
Route::get('/signin', array(
    'uses'  =>  'AuthController@getSignin',
    'as'    =>  'auth.signin',
    'middleware'    =>  ['guest'],
));


Route::post('/signin', array(
    'uses'  =>  'AuthController@postSignin',
    'middleware'    =>  ['guest'],
));

/*===============================================
        SECTION - DASHBOARD
================================================*/
Route::get('/dashboard', array(
    'users' =>  'Users@index',
    'middleware'    =>  ['guest'],
));
