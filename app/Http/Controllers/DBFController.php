<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class DBFController extends Controller {

    /**
    * Responds to requests to GET /books
    */
    public function getIndex() {
          return view('base.landing');
    }

    /**
     * Responds to requests to GET /books/show/{id}
     */
    public function getLorem($title = null) {
      return view('lorem.loremform');
    }
    
        public function postLorem(Request $request) {
        	$this->validate($request, [
				'noofloremparas'=>'required|numeric|max:15|min:1'        	
        	]);
        	
        		$loremparas = $request->input('noofloremparas');
        	  $request->flash();
        	   $faker = Faker::create();
        	  $loremtext = $faker -> paragraphs($loremparas, false);
        	//var_dump($loremtext);
      return view('lorem.loremform')->with('loremtext', $loremtext);
    }

    /**
     * Responds to requests to GET /books/create
     */
    public function getUsers() {
    	return view('user.userform');
    }
    
        public function postUsers(Request $request) {
        	$this->validate($request, [
				'noofusers'=>'required|numeric|max:999'        	
        	]);
        	$usernumber = $request->input('noofusers');
        	$bday_boolean = $request->input('birthday');
        	$location_boolean = $request->input('location');

        	     $fakes = $this->getFakeUsers($usernumber,$bday_boolean,$location_boolean);
        	 //  print_r($fakes);
        	   $request->flash();
   				 return view('user.userform')->with('fakes',$fakes) ;  	
    	
    }
    
   public function getFakeUsers($usernumber,$bday_boolean,$location_boolean) {
    $userarray = array();
    $faker = Faker::create();
     for ($i =0; $i<$usernumber; $i++) {
     		$userTempObj = new \stdClass;
     		$userTempObj->name = $faker ->name;
     		 if($bday_boolean) {
     		 	$userTempObj->birthday = $faker ->date($format = 'Y-m-d', $max = '-20 years');
     		 }
     		 if($location_boolean) {
     		 	$userTempObj->location = $faker->city.", ".$faker->country;
     		 }
     		 
     		 $userarray[] = $userTempObj;
         }
         
         return $userarray;
    }


}