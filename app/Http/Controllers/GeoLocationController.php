<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Location;
use Session;
use DB;
use App\Models\LocationDetails;

class GeoLocationController extends Controller
{

    public function ip_locator(){
        $session_id = Session::getId();
        $session = DB::table('sessions')->where(['id'=>$session_id])->first();
        // $userIpAddress = $session->ip_address;
        $userIpAddress = '103.150.20.2';
        $locationData = Location::get($userIpAddress );
        $location_info = new LocationDetails();

        $location_info->country = $locationData->countryName;
        $location_info->region = $locationData->regionName;
        $location_info->city = $locationData->cityName;
        $location_info->save();
        dd($locationData);
    }
    public function location(){
        $locations = LocationDetails::orderBy('id','DESC')->get();
        return view('location',compact('locations'));
    }

    
    
}
