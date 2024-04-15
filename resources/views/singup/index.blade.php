@extends('layouts.address')
@section('title', 'Cadastrar')

@section('content')
  <div class="flex justify-center items-center mt-56 w-full">
    <div class="m-auto">
      <h1 class="font-extrabold text-4xl text-center text-primary">CRIAR CONTA</h1>
      <form action="">
        <div class="mb-5 mt-10">
          <input class="w-80 h-12 rounded-md" type="text" placeholder="Nome">
        </div>
        <div class="mb-3">
          <input class="w-80 h-12 rounded-md" type="email" placeholder="Email">
        </div>
        <div class="mb-3">
          <input class="w-80 h-12 rounded-md" type="password" placeholder="Senha">
        </div>
        <div>
          <input class="w-80 h-12 rounded-md" type="password" placeholder="Comfirmar senhar">
        </div>
        <input class="w-80 h-12 mt-5  mb-3 rounded-md text-center bg-primary text-cyan-50" type="submit" value="Cadastrar"/>
          <p class="font-medium text-base text-slate-900">Já possui cadastro? <span class=" text-primary font-medium text-base">ENTRAR</span></p>
      </form>
    </div>
  </div>
@endsection