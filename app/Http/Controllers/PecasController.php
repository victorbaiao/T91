<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PecasController extends Controller
{
    public function index()
    {
        dd('Olá Mundo');
        $pecas = Peca::all();
       	// dd($pecas);
 		 return view ('jogos.index',['pecas'=>$pecas]);
    }

    public function create()
    {
        return view('pecas.create');
    }
}


