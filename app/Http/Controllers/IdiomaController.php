<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdiomaController extends Controller
{
    public function personalizar(){
        $lang = \Request::cookie('lang', 'English');
    
        return view('personalizacion.formulario', [
            'lang' => $lang
        ]);
    }

    public function guardarpersonalizacion(Request $request){
        $this->validate($request, [
            'lang' => 'required'
        ]);
        return redirect('/personalizacion')
            ->withCookie(cookie('lang', $request->input('lang'), 60 * 24 * 365));
    }
}
