<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller

{

    public function ola(){
        return view('minhapagina', ['nome' => 'Rafael']);
    }

    public function saudar(Request $request){
        return view('minhapagina', [
            'nome' => $request->input('nome') ?? 'visitante',
        ]);
}

    public function index(){
        $pessoas = Pessoa::all();
        return view('pessoas.index', ['pessoas' => $pessoas,]);

    }

    public function store(Request $request){
        $dados = $request->validate([
            'nome' => 'required|max:100',
            'email' => 'nullable|email',
        ]);

        Pessoa::create($dados);

        return redirect()->route('pessoas.index');
    }

    public function edit(Pessoa $pessoa){
        return view('pessoas.edit', ['pessoa' => $pessoa]);
    }

    public function update(Request $request, Pessoa $pessoa){
        $dados = $request->validate([
            'nome' => 'required|max:100',
            'email' => 'nullable|email',
        ]);

        $pessoa->update($dados);

        return redirect()->route('pessoas.index');
    }

    public function destroy(Pessoa $pessoa){
        $pessoa->delete();
        return redirect()->route('pessoas.index');
    }

}
