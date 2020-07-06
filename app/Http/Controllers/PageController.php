<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function contatoSalvar(Request $request)
    {
       $dados = $request->all();
       $contato= new \App\Contacts();
       $contato->create($dados);

       return redirect('contato');
    }

    public function eventosSalvar(Request $request)
    {
      $dados = $request->all();
      // dd($dados);
      $evento= new \App\Student();
      $evento->create($dados);

      return redirect('/eventos');
    }
 }
