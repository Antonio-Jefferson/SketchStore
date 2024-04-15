<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SketchStore - @yield('title')</title>
  @vite('resources/css/app.css')
</head>
<body>
  <div class="w-full">
    <header class="fixed z-20 flex justify-between items-center pl-8 pr-8 w-full h-32 bg-primary mb-8">
      <h1 class="text-4xl font-bold text-gray-50">SketchStore</h1> 
      <div class="flex items-center gap-6">
        <a href="{{ route('cart-index') }}" class="flex w-16 h-10 bg-white rounded-md items-center  justify-evenly">
          <img class="w-8" src="{{ asset('assets/icons/cart.svg') }}" alt="Ícone">
          <div class="text-2xl">
              {{0}}
          </div>
        </a>
        <input  class="w-[500px] h-11 p-2 rounded-lg outline-none" type="text" placeholder="Buscar...">
        <img class="w-8" src="{{ asset('assets/icons/search.svg') }}" alt="Ícone">
      </div>
      <div class="flex items-center gap-10">
        <p class="text-lg text-slate-50">Faça <a class="font-semibold text-sky-400" href="{{route('singin-create')}}">LOGIN</a> ou <br> <a class="font-semibold text-sky-400" href="{{route('singup-create')}}">CADASTRE-SE</a></p>
        <img class="w-14" src="{{ asset('assets/icons/menu.svg') }}" alt="Ícone">
      </div>
    </header>
    <div class="w-2/3 m-auto flex gap-3 flex-wrap">
      @yield('content')
    </div>
  </div>
</body>
</html>