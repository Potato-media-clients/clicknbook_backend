<?php

namespace App;

use Illuminate\Foundation\Auth\Wishlist as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Sentinel;

class Wishlist extends Model
{
       public function index($user_id)
    {
        return DB::table('wishlist')->where('user_id', $user_id)->get();
    }

}
