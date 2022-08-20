<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utils extends Model
{
    use HasFactory;

    public static function start_session(){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }
}
