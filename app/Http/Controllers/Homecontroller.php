<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){
    	return view('index');
    }
    public function generic(){
    	return view('generic');
    }
    public function elements(){
    	return view('elements');
    }


    public function regformindex(){
    	return view('regformindex');
    }



    public function display(Request $request){

    	$name = $request->input('name');
    	$father_name = $request->input('father_name');
    	$address = $request->input('address');
    	$gender = $request->input('gender');
    	$state = $request->input('state');
    	$city = $request->input('city');
    	$dob = $request->input('dob');
    	$pincode = $request->input('pincode');
    	$course = $request->input('course');
    	$email = $request->input('email');

    	return view ('display', ['name' => $name, 'father_name' => $father_name, 'address' => $address, 'gender' =>$gender,
    	  			'state'	=> $state, 'city' => $city, 'dob' => $dob, 'pincode' => $pincode, 'course' => $course, 'email' => $email]);

    }
}
