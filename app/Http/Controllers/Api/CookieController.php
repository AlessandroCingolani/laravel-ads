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

        Session::put('modal_disattivato', $valore);
        $disable_modal = Session::all();


        return response()->json(compact('disable_modal'));
    }


    public function session(Request $request)
    {


        // Ottieni il valore dalla sessione
        $valore = Session::all();


        // Esegui le azioni necessarie basate sul valore
        if ($valore) {
            return response()->json(compact('valore'));
        } else {
            return response()->json(compact('valore'));
        }
        // Restituisci una risposta o fai altro...
    }
}
