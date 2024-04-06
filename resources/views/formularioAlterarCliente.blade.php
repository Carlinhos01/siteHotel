@extends ('layout')
@section ('content')

<section class="container">
<form class="row g-3" method="POST" action="{{route('alterar-cliente',$registrosClientes->id)}}">
@method('put')
@csrf
<div class="col-md-12">
    <label for="InputNome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="inputNome" value="{{old('nome',$registrosClientes->nome)}}" name="nome" required placeholder="Seu nome">
    @error('nome')
    <div class="text-sm-start text-ligth">*Preencher o campo nome.</div>
    @enderror
  </div>

  <div class="col-md-12">
    <label for="inputEmail" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="inputEmail" value="{{old('email',$registrosClientes->email)}}" name="email" required placeholder="E-mail">
    @error('email')
    <div class="text-sm-start text-ligth">*Preencher o campo Email.</div>
    @enderror
  </div>

  <div class="col-2">
    <label for="inputFone" class="form-label">Telefone</label>
    <input type="tel" class="form-control" id="inputFone" value="{{old('fone',$registrosClientes->fone)}}" name="fone" required placeholder="(xx) xxxxx-xxxx">
    @error('fone')
    <div class="text-sm-start text-ligth">*Preencher o campo fone.</div>
    @enderror  
  </div>
  <div class="col-12">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Alterar</button>
  </div>
</form>
</section>

@endsection