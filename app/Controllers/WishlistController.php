<?php

namespace App\Controllers\Api;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WishlistController extends APIController
{
    public function index(){
        
        return $this->sendJson([
                'message' =>'This booking is not available'
            ], true);
    }
}