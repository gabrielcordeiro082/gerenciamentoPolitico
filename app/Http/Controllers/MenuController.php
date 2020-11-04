<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    //

    public function menu(){
        return view ('menu');
    }

    public function grafico(){
        return view ('grafico');
    }

    public function bairros(){
        return view ('bairros');
    }

    public function doacao(){
        return view('doacao');
    }

    public function listarDoacoes(){
        return view('listarDoacoes');   
    }

    public function botaodoacao(Request $request){
        $request->validate([
            'Eleitor' => 'required',
            'Doacao' => 'required',
            'Quantidade' => 'required'
        ]);

        return redirect('listarDoacoes')->with('sucesso', 'Cadastrado com Sucesso!');
    }
    
}
