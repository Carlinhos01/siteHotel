<?php

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ReservaController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get("/", [ClienteController::class,'showHome'])->name('home');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




Route::post('/cadastroCliente', [ClienteController::class, 'cadCliente'])->name('envia-banco-cliente');
Route::get('/gerenciarCliente', [ClienteController::class, 'gerenciarCliente'])->name('gerenciar-cliente');
Route::get('/cadastroCliente', [ClienteController::class, 'showCadastro'])->name('show-formulario-cadastro');
Route::get('/alterar-cliente/{id}',[ClienteController::class,'mostrargerenciarClienteID'])->name('mostrar-cliente');
Route::put('/alterar-cliente/{id}',[ClienteController::class,'alterarClienteBanco'])->name('alterar-cliente');
Route::delete('/apaga-cliente/{id}',[ClienteController::class,'destroy'])->name('apaga-cliente');


Route::post('/cadastroFuncionarios', [FuncionarioController::class, 'cadFunci'])->name('envia-banco-funci');
Route::get('/cadastroFuncionarios', [FuncionarioController::class, 'showCadastroFunci'])->name('show-formulario-funci');
Route::get('/gerenciarFuncionarios', [FuncionarioController::class, 'gerenciarFuncionario'])->name('gerenciar-funcionario');
Route::get('/alterar-funcionario/{id}',[FuncionarioController::class,'mostrargerenciarFuncionarioID'])->name('mostrar-funcionario');
Route::put('/alterar-funcionario/{id}',[FuncionarioController::class,'alterarFuncionarioBanco'])->name('alterar-funcionario');
Route::delete('/apaga-funcionario/{id}',[FuncionarioController::class,'destroy'])->name('apaga-funcionario');


Route::get('/cadastroQuarto', [QuartoController::class, 'showCadastroQuarto'])->name('show-formulario-quarto');
Route::post('/cadastroQuarto', [QuartoController::class, 'cadQuarto'])->name('envia-banco-quarto');
Route::get('/gerenciarQuarto', [QuartoController::class, 'gerenciarQuarto'])->name('gerenciar-quarto');

Route::get('/alterar-quarto/{id}',[QuartoController::class,'mostrargerenciarQuartoID'])->name('mostrar-quarto');
Route::put('/alterar-quarto/{id}',[QuartoController::class,'alterarquartoBanco'])->name('alterar-quarto');
Route::delete('/apaga-quarto/{id}',[QuartoController::class,'destroy'])->name('apaga-quarto');





Route::get('/cadastroReserva', [ReservaController::class, 'showCadastroReserva'])->name('show-formulario-reserva');
Route::post('/cadastroReserva', [ReservaController::class, 'cadReserva'])->name('envia-banco-reserva');
Route::get('/gerenciarReserva', [ReservaController::class, 'gerenciarReserva'])->name('gerenciar-reserva');
});

require __DIR__.'/auth.php';
