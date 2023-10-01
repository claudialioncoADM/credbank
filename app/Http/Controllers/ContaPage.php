<?php

namespace App\Http\Controllers;

use App\Livewire\Contas;
use App\Models\ContaModel;
use Illuminate\Http\Request;

class ContaPage extends Controller
{
    public function index()
    {
        $dados = ContaModel::all();
        return view('contas.index', compact('dados'));
    }

    public function criaconta()
    {
        return view('page.conta');
    }
    public function store(Request $request)
    {

        $storeData = $request->validate(
            [
                'nome'    => 'required|min:3',
                'email'   => 'required|email',
                'senha'   => 'required|min:6|max:8',
            ]
        );

        if (ContaModel::create($storeData)) {
            return redirect('/cria-conta')
                ->with('sucesso', 'Conta criada');
        } else {
            return redirect()
                ->back()
                ->with('error', 'Ocorreu um erro')
                ->withInput();
        }
    }
}
