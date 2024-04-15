@extends('layouts.address')
@section('title', 'Cadastrar')

@section('content')
  <div class="mt-36">
    <div>
      <h1>CRIAR CONTA</h1>
      <form action="">
        <input type="text" placeholder="Nome">
        <input type="text" placeholder="Email">
        <input type="text" placeholder="Senha">
        <input type="text" placeholder="Comfirmar senhar">

        <buttont type="submit">Cadastrar</button>
          <p>Já possui cadastro? <span>ENTRAR</span></p>
      </form>
    </div>
  </div>
@endsection