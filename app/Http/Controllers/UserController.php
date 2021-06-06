<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Stevebauman\Location\Facades\Location;

class UserController extends Controller
{
    public function ip_details()
    {
        // if ($position = Location::get()) {
        //     // Successfully retrieved position.
        //     echo $position->countryName;
        // } else {
        //     // Failed retrieving position.
        // }


        $ip = '103.239.147.187'; //For static IP address get
        //$ip = request()->ip(); //Dynamic IP address get
        $data = \Location::get($ip);                
        return view('details',compact('data'));
    }
}