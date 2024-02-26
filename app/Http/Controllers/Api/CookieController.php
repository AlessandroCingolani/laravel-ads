<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;



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

    public function saveSession(Request $request)
    {
        $valore = $request->input('valore');
        // Salva il valore in sessione

        Session::put('close_ads', $valore);
        $disable_modal = Session::all();


        return response()->json(compact('disable_modal'));
    }


    public function session(Request $request)
    {

        $header = $request->header();
        $session_id = session()->getId();
        if ($request->session()->exists('close_ads')) {
            session(['close_ads' => true]);
        } else {

            session(['close_ads' => false]);
        }
        $session = Session::all();



        return response()->json(compact('session', 'session_id', 'header'));
    }
}
