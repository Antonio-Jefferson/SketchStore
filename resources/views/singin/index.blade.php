@extends('layouts.address')
@section('title', 'Login')

@section('content')
  <div class="flex justify-center items-center mt-96 w-full">
    <div class="m-auto">
      <h1 class="font-extrabold text-4xl text-center text-primary">FAZER LOGIN</h1>
      <form action="">
        <div>
          <div class="mt-10 mb-5">
            <input class="w-80 h-12 rounded-md" type="email" placeholder="Email">
          </div>
         <div>
          <input class="w-80 h-12 rounded-md"  type="password" placeholder="Senha">
         </div>
        </div>
        <input class="w-80 h-12 mt-5  mb-3 rounded-md text-center bg-primary text-cyan-50" type="submit" value="Entrar"/>
          <p class="font-medium text-base text-slate-900">Novo na SketchStore? <span class=" text-primary font-medium text-base">CADASTRE-SE</span></p>
      </form>
    </div>
  </div>
@endsection