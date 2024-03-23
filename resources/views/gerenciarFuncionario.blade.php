@extends ('layout')
@section ('content')

<section class="container m-5">
<h1 class="text-center">Gerenciar dados do funcionario</h1>
  <div class="container m-5">
    <form >
    @csrf
      <div class="row center">
        <div class="col">
          <input type="text" id="marca" name="marca" class="form-control" placeholder="Digite a Marca" aria-label="First name">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-info">Pesquisar</button>
        </div>
      </div>
    </form>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Número do Quarto</th>
        <th scope="col">Tipo</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
    @foreach($registrosFunciionario as $registrosFuncionarioLoop)
      <tr>
      <th scope="row">{{$registrosClientesLoop->id}}</th>
        <td>{{$registrosFuncionarioLoop->nome}}</td>
        <td>{{$registrosFuncionarioLoop->função}}</td>
        <td>
          <a href="">
            <button type="button" class="btn btn-primary">X</button>
          </a>
        </td>
        xx
        <td>
         xxx
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</section>
@endsection


