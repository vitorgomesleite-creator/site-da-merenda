<?php

namespace App\Http\Controllers;

use App\Models\Semana;
use Illuminate\Http\Request;

class SemanaController extends Controller
{
    public function cadastrar()
    {
        return view('semana.cadastrar');
    }

    public function salvar(Request $request)
    {
        $semana = new Semana();
        $semana->nome_dia = $request->nome_dia;
        $semana->save();

        return redirect('/semana');
    }

    public function listar()
    {
        $semanas = Semana::all();
        return view('semana.listar', ['semanas' => $semanas]);
    }
}
