<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datos;
use Illuminate\Support\Facades\Input;

class FormController extends Controller
{
    public function insert(Request $request){
		$dato = new Datos;

        $dato->nombre = Input::get('nombre');
        $dato->email = Input::get('email');
       	$dato->asunto = Input::get('asunto');
       	$dato->mensaje = Input::get('mensaje');

        $dato->save();

        return view('index');
	}
}