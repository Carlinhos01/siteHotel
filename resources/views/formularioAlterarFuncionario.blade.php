@extends ('layout')
@section ('content')

<section class="container">
<form class="row g-3" method="POST" action="{{route('alterar-funcionario',$registrosFuncionario->id)}}">
@method('put')
@csrf
<div class="col-md-12">
    <label for="InputNome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="inputNome" value="{{old('nome',$registrosFuncionario->nome)}}" name="nome" required placeholder="Seu nome">
    @error('nome')
    <div class="text-sm-start text-ligth">*Preencher o campo Nome.</div>
    @enderror
  </div>

  <div class="col-md-12">
    <label for="inputEmail" class="form-label">Função</label>
    <select id="inputFuncao" class="form-select" value="{{old('funcao',$registrosFuncionario->funcao)}}" name="funcao" required placeholder="Função">
      <option selected disabled></option>
      <option>Chefe</option>
      <option>Subalterno</option>
    </select>
    @error('funcao')
    <div class="text-sm-start text-ligth">*Preencher o campo Função.</div>
    @enderror
<br>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Alterar</button>
  </div>
</form>
</section>

@endsection