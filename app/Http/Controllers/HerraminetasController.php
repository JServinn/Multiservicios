<?php

namespace App\Http\Controllers;

use App\Mail\MensajeCorreo;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class HerraminetasController extends Controller
{
    public function datosEmail(Request $request){


        $informacion = $request;
        Mail::to('Erik_torres.2@hotmail.com')->send(new MensajeCorreo($informacion));
        return redirect()->back();
    }
}
