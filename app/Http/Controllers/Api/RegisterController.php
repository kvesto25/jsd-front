<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Backend\TelegramUserController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Controller;
use App\Models\TelegramUser;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){}

    public function firstStage(Request $request){
        $user_tg_object = TelegramUser::where('code', $_POST['code']);
        if (empty($user_tg_object->first())){
            return response()->json([
                "status" => "error tg code",
                "err_data" => 1020 // 1020 не існує такого коду
            ], 500);
        }else{
            $userTG = $user_tg_object->where('user_id', 0)->first();
            if (empty($userTG)){
                return response()->json([
                    "status" => "error tg code",
                    "err_data" => 1024 // 1024 користувач вже зареєстрований
                ], 500);
            }else{
                $user_object = new UserController();
                $user = $user_object->create(["full_name" => $userTG->username]);
                $userTG_object = new TelegramUserController();
                $result = $userTG_object->update([
                    'id' => $userTG->id,
                    'user_id' => $user->id
                ]);
                return response()->json([
                    "status" => "success",
                    "id" => $user->id,
                    "result" => $result
                ]);
            }
        }
    }
}
