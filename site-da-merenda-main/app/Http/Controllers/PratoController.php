<?php

namespace App\Http\Controllers;

use App\Models\Prato;
use Illuminate\Http\Request;

class PratoController extends Controller
{
    public function cadastrar()
    {
        return view('prato.cadastrar');
    }

    public function salvar(Request $request)
    {
        $prato = new Prato();
        $prato->nome = $request->nome;
        $prato->descricao = $request->descricao;
        $prato->save();

        return redirect('/pratos');
    }

    public function listar()
    {
        $pratos = Prato::all();
        return view('prato.listar', ['pratos' => $pratos]);
    }
}
