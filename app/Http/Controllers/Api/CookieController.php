<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CookieController extends Controller
{
    public function index()
    {
        $ads = [
            'name' => 'premium',
            'price' => 9.25,
            'month' => 12

        ];
        return response()->json(compact('ads'));
    }
}
