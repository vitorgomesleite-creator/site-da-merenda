<?php

namespace App\Http\Controllers;

use App\Models\Semana;
use App\Models\Prato;
use App\Models\Cardapio;
use Illuminate\Http\Request;

class CardapioController extends Controller
{
    public function index()
    {
        $semanas = Semana::with('cardapios.prato')->get();
        return view('cardapio', ['semanas' => $semanas]);
    }

    public function cadastrar()
    {
        return view('cardapio.cadastrar', [
            'semanas' => Semana::all(),
            'pratos' => Prato::all()
        ]);
    }

    public function salvar(Request $request)
    {
        $cardapio = new Cardapio();
        $cardapio->semana_id = $request->semana_id;
        $cardapio->prato_id = $request->prato_id;
        $cardapio->save();

        return redirect('/cardapios');
    }

    public function listar()
    {
        $cardapios = Cardapio::with(['semana','prato'])->get();
        return view('cardapio.listar', ['cardapios' => $cardapios]);
    }
}
