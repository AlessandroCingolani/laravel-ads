<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;



class CookieController extends Controller
{
    public function index()
    {
        $ads = [
            'name' => 'premium',
            'price' => 9.25,
            'duration' => 1,
            'discount' => 20

        ];
        return response()->json(compact('ads'));
    }
}
