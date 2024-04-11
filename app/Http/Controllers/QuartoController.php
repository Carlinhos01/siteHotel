<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Quarto;

class QuartoController extends Controller
{
    public function showHome () {
        return view ("home");
    }

    public function showCadastroQuarto (Request $request){
        return view ("cadastroQuarto");
    }

    public function cadQuarto (Request $request){
       
        $dadosValidos = $request-> validate([
            'numeroQuarto' => 'integer|required', 
            'tipoQuarto' => 'string|required',
            'valorDiaria' => 'numeric|required'
        ]);
       
        quarto::create($dadosValidos);
        return view ("home");
    }

    // public function gerenciarQuarto(){
    //     return view('gerenciarQuarto');
    // }

    public function gerenciarQuarto(Request $request){

        $dadosQuarto = Quarto::query();
        $dadosQuarto->when($request->nome,function($query,$valor){
            $query->where('numeroQuarto','like','%'.$valor.'%');
        });
        $dadosQuarto = $dadosQuarto->get();

        return view('gerenciarQuarto',['registrosQuarto'=>$dadosQuarto]);
    }

    public function mostrargerenciarQuartoID(Quarto $id){

        return view('formularioAlterarQuarto',['registrosQuarto'=>$id]);
    }

    public function destroy(Quarto $id){
        $id->delete();
        return Redirect::route('home');
    }

    public function alterarquartoBanco(Quarto $id,Request $request){

        $dadosValidos = $request-> validate([
            'numeroQuarto' => 'string|required', 
            'tipoQuarto' => 'string|required',
            'valorDiaria' => 'string|required'
        ]);
        $id->fill($dadosValidos);
        $id->save();
        return Redirect::route('home');
    }
}
