@extends('layouts.app')

@section('title', 'Home')
@section('content')
  @foreach ($products as $product)
    <div class="flex-col justify-start items-end w-56 h-72 rounded-md shadow-md shadow-slate-400 relative mb-10">
      <img class="w-52 h-[140px]" src="{{$product->image_url}}" alt="lapis de cor">
      <div class="p-2">
        <p class="text-xs font-medium">{{$product->name}}</p>
        <div class="mt-2 w-16 h-7 rounded-2xl bg-slate-800 text-center text-slate-200" >R${{$product->price}}</div>
      </div>
      <div class="flex w-full h-10 p-2 items-center absolute bottom-0 bg-primary justify-center gap-5 rounded-b-md cursor-pointer">
        <img src="{{ asset('assets/icons/shopping-bag.svg') }}" alt="">
        <p class="text-sm text-slate-50">COMPRAR</p>
      </div>
    </div>
  @endforeach
@endsection