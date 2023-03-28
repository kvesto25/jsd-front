<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id){
        $user = Users::where('id', $id)->first();
        return $user->email;
    }

    public function create($data){
        $user_arr = [
            'name' => $data['full_name'],
            'password' => "",
            'email' => "temp_email_" . time() . "@job-search-detective.com"
        ];
        return Users::create($user_arr);
    }
}
