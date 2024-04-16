@extends('layouts.address')
@section('title', 'Endereço')

@section('content')
  <div class="mt-36">
    <div class="flex gap-32 mt-24">
      <div class="w-[496px] h-[645px] bg-slate-200">
        <div class="flex justify-between w-full h-14 bg-slate-300 p-5">
          <h1 class="text-xl font-medium">Total do pedido:</h1>
          <p class="text-xl font-medium">R$total</p>
        </div>
        <ol class="p-5">
            <li class="text-2xl font-light">nome</li>
        </ol>
      </div>
      <div>
        <div class="flex justify-center">
          <h1 class="text-4xl font-semibold text-primary mb-10">PREENCHA TODOS OS DADOS</h1>
        </div>
        <form action="" method="POST">
          <input class="w-full mb-5 rounded-md" type="text" name="fullname" placeholder="Digite seu nome...">
          <div class="mb-5 ">
            <input class="rounded-md" type="text" placeholder="Cidade">
            <input class="rounded-md" type="number" placeholder="CEP">
          </div>
          <div>
            <input class="rounded-md" type="text" placeholder="Endereço">
            <input class="rounded-md" type="number" placeholder="N">
          </div>
          <div class="mt-10">
            <h1 class="text-xl font-bold mb-4 text-primary">Forma de pagamento</h1>
            <div class="flex gap-5">
              <div class="flex items-center">
                <input name="pagamento" type="radio" value="credito" class="form-radio text-orange-500">
                <label for="credito" class="ml-2">Crédito</label>
              </div>
              <div class="flex items-center">
                <input name="pagamento" type="radio" value="debito" class="form-radio text-orange-500">
                <label for="debito" class="ml-2">Débito</label>
              </div>
              <div class="flex items-center">
                <input name="pagamento" type="radio" value="boleto" class="form-radio text-orange-500">
                <label for="boleto" class="ml-2">Boleto</label>
              </div>
            </div>
            <div class="mt-8">
                <textarea class="rounded-md" cols="51" rows="5"></textarea>
            </div>
          </div>
          <button type="submit" class="mt-10 w-full h-14  bg-primary text-white py-2 px-4 rounded-md hover:bg-orange-600">Finalizar Compra</button>
        </form>
      </div>
    </div>
  </div>
@endsection