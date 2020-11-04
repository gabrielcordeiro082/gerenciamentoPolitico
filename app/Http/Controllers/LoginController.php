<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function login(){
        return view ('login');
    }

    
    public function acessar (Request $request){
        if($request->email == 'admin@sgp.com' && $request->senha == '123456'){
            return redirect()->route('menu');
        } else {
            return redirect()->back()->with('!ERRO!', 'LOGIN ou SENHA inválida');
        }
    }

    public function cadastro(){
        return view ('cadastro');
    }

    public function cadastrado(){
        return view ('login');
    }

    public function esquecisenha(){
        return view ('esquecisenha');
    }

    public function voltarlogin(){
        return view ('login');
    }

    public function sairconta(){
        return view ('login');
    }

}