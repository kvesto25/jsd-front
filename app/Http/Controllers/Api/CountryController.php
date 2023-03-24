<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(){
        $country_array = array();
        $countries = Country::all();
        foreach ($countries as $country){
            array_push($country_array, array("key" => $country->id, "title" => $country->name));
        }
        return response()->json($country_array);
    }
    public function one($id){
        $country = Country::where('id', $id)->first();
        return response()->json(array(
            "key" => $country->id,
            "title" => $country->name
        ));
    }
}
