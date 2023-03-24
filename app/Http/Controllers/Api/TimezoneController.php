<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Timezone;
use Illuminate\Http\Request;

class TimezoneController extends Controller
{
    public function index(){
        $timezone_array = array();
        $timezones = Timezone::all();
        foreach ($timezones as $timezone){
            array_push($timezone_array, array("key" => $timezone->id, "title" => $timezone->name));
        }
        return response()->json($timezone_array);
    }
    public function one($id){
        $timezone = Timezone::where('id', $id)->first();
        return response()->json(array(
            "key" => $timezone->id,
            "title" => $timezone->name
        ));
    }
}
