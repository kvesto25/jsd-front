<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TelegramUser;
use Illuminate\Http\Request;

class TelegramUserController extends Controller
{
    public function index($id){
        $telegram_user = TelegramUser::where('id', $id)->first();
        return $telegram_user->email;
    }

    public function update($data){
        $telegram_user = TelegramUser::where('id', $data['id'])->first();

        return $telegram_user->update($data);
    }
}
