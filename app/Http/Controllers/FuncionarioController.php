<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function showHome() {
        return view ("home");
    }

    public function showCadastroFunci (Request $request){
        return view ("cadastroFuncionarios");
    }

    public function cadFunci(Request $request){
        $dadosValidos = $request-> validate([
            'nome' => 'string|required', 
            'funcao' => 'string|required'
        ]);

        funcionario::create($dadosValidos);
        return view ("home");
    }
    public function mostrargerenciarFuncionarioID(Cliente $id){

        return view('xxxxxxxxxxx',['registrosFunsionario'=>$id]);
    }

    public function gerenciarfuncionario(Request $request){

        $dadosFuncionario = Funcionario::query();
        $dadosFuncionario->when($request->nome,function($query,$valor){
            $query->where('nome','like','%'.$valor.'%');
        });
        $dadosFuncionario = $dadosFuncionario->get();

        return view('gerenciarFuncionario',['registrosFuncionario'=>$dadosFuncionario]);
    }

    public function destroy(Funcionario $id){
        $id->delete();
        return Redirect::route('home');
    }
}
