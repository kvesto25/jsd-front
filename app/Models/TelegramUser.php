<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelegramUser extends Model
{
    use HasFactory;
    protected $table = "telegram_user";
    protected $guarded = false;
    const CREATED_AT = 'time_create';
    const UPDATED_AT = 'time_last_update';
}
