@extends('layouts.app')

@section('title', 'Home')
@section('content')
    <img class="mt-36 w-full" src="{{asset('assets/images/gif_promo.gif')}}" alt="promoção">
    <h2 class="text-xl font-bold text-slate-700 block">Produtos</h2>
  <div class=" flex gap-3 flex-wrap">
    @foreach ($products as $product)
    <div class="flex-col justify-start items-end w-56 h-72 rounded-md shadow-md shadow-slate-400 relative mt-5">
      <img class="w-52 h-[140px]" src="{{$product->image_url}}" alt="lapis de cor">
      <div class="p-2">
        <p class="text-xs font-medium">{{$product->name}}</p>
        <div class="mt-2 w-16 h-7 rounded-2xl bg-slate-800 text-center text-slate-200" >R${{$product->price}}</div>
      </div>
      <div class="flex w-full h-10 p-2 items-center absolute bottom-0 bg-primary justify-center gap-5 rounded-b-md cursor-pointer">
        <img src="{{ asset('assets/icons/shopping-bag.svg') }}" alt="">
        <form action="{{ route('cart-store', ['id'=>$product->id]) }}" method="POST">
          @csrf
          <button type="submit" class="text-sm text-slate-50">COMPRAR</button>
      </form>
      </div>
    </div>
  @endforeach
  </div>
 
@endsection