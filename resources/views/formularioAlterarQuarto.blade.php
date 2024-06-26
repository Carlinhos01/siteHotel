@extends ('layout')
@section ('content')

<section class="container">
<form class="row g-3" method="POST" action="{{route('alterar-quarto',$registrosQuarto->id)}}">
@method('put')
@csrf
<div class="col-md-12">
    <label for="InputNome" class="form-label">Número</label>
    <input type="number" class="form-control" id="inputNumero" value="{{old('numeroQuarto',$registrosQuarto->numeroQuarto)}}" name="numeroQuarto" required placeholder="Número do Quarto">
    @error('numero')
    <div class="text-sm-start text-ligth">*Preencher o campo Nome.</div>
    @enderror
  </div>

  <div class="col-md-12">
    <label for="inputEmail" class="form-label">Tipo</label>
    <select id="inputFuncao" class="form-select" value="{{old('tipoQuarto',$registrosQuarto->tipoQuarto)}}" name="tipoQuarto" required placeholder="Tipo">
      <option selected disabled></option>
      <option value="Classe A">Classe A</option>
      <option value="Comercial">Comercial</option>
      <option value="Suite">Suite</option>
    </select>
    @error('tipo')
    <div class="text-sm-start text-ligth">*Preencher o campo Função.</div>
    @enderror

    <div class="col-md-12">
    <label for="inputEmail" class="form-label">Valor</label>
    <input type="number" id="inputValor" class="form-select" value="{{old('valorDiaria',$registrosQuarto->valorDiaria)}}" name="valorDiaria" required placeholder="Valor">
    @error('valor')
    <div class="text-sm-start text-ligth">*Preencher o campo Função.</div>
    @enderror
    
<br>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Alterar</button>
  </div>
</form>
</section>

@endsection