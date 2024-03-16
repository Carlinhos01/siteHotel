@extends('layout')
@section('content')

<section class="container m-5">
    <h1 class="text-center">Gerenciar dados do cliente</h1>
  <div class="container m-5">

    <form method="get" action="{{route('gerenciar-cliente')}}">
        @csrf
      <div class="row center">
        <div class="col">
          <input type="text" id="marca" name="marca" class="form-control" placeholder="Digite a Marca" aria-label="First name">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-info">Buscar</button>
        </div>
      </div>
    </form>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Telefone</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
     @foreach($registrosClientes as $registrosClientesLoop )
      <tr>
        <th scope="row">{{$registrosClientesLoop->id}}</th>
        <td>{{$registrosClientesLoop->nome}}</td>
        <td>{{$registrosClientesLoop->email}}</td>
        <td>{{$registrosClientesLoop->fone}}</td>

        <td>
          <a href="">
            <button type="button" class="btn btn-primary">X</button>
          </a>
        </td>
        xx
        <td>
         <form method="post" action="{{'apaga-cliente,$registrosClientesLoop->id'}}">
          @method('delete')
          @csrf
         </form>
        </td>
      </tr>
   @endforeach
    </tbody>
  </table>
</section>
 
@endsection