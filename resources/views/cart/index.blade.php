@extends('layouts.app')
@section('title', 'Carrinho')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('content')
  <div class="flex m-auto gap-4 w-full h-screen mt-36">
    <div class="border-r-2 border-l-2 p-3 w-3/5">
      <h1 class="text-3xl font-bold text-primary">Carrinho de Compras</h1>
      @php
          $total = 0; 
      @endphp
      @forelse ($items as $item)
      <div class="flex-row gap-4 mt-4">
          <div class="flex items-center justify-between p-4 border-b-2 border-t-2">
              <div>
                  <img class="w-56" src="{{$item['image_url']}}" alt="image">
              </div>
              <p class="text-xl font-medium ">
                  {{$item['name']}}
              </p>
              <div class="flex items-center justify-between w-32 h-8 p-1 border rounded-2xl">
                  <button class="text-xl font-medium p-2 decrease-quantity" data-item-id="{{$item['product_id']}}">-</button>
                  <span class="h-full bg-slate-600 border"></span>
                  <p class="text-m text-center font-normal w-16 h-6 border-none outline-none quantity" data-item-id="{{$item['product_id']}}">{{$item['quantity']}}</p>
                  <span class="h-full bg-slate-600 border"></span>
                  <button class="text-xl font-medium p-2 increase-quantity" data-item-id="{{$item['product_id']}}">+</button>
              </div>
              <div>
                  <p class="text-2xl font-medium subtotal" id="subtotal_{{$item['product_id']}}">R${{$item['price'] * $item['quantity']}}</p>
              </div>
          </div>
      </div>
      @php
          $total += $item['price'] * $item['quantity'];
      @endphp
      @empty
      <h1>Você não tem nenhum item no carrinho</h1>
      @endforelse
    </div>
    <div class="fixed right-96 border w-96 h-32">
      <div class="flex justify-between items-center  p-4">
        <h2 class="text-3xl font-bold">Total:</h2>
        <p class="text-3xl font-bold" id="total">R${{$total}}</p>
      </div>
      <div class="h-16 bg-primary text-center p-3">
        <a class="text-3xl font-bold text-slate-100" href="{{ route('address-create') }}">FAZER PEDIDO</a>
      </div>
    </div>
  </div>
  <script>
      $(document).ready(function() {
        $('.increase-quantity, .decrease-quantity').click(function() {
            console.log('Button clicked');
            var itemId = $(this).data('item-id');
            var operation = $(this).hasClass('increase-quantity') ? 'increment' : 'decrement';
            console.log('Item ID:', itemId, 'Operation:', operation);
            updateQuantity(itemId, operation);
        });

        function updateQuantity(itemId, operation) {
            console.log('Sending AJAX request');
            $.ajax({
                url: '/cart/update/' + itemId,
                type: 'PUT',
                data: {
                    _token: '{{ csrf_token() }}',
                    operation: operation
                },
                success: function(response) {
                    console.log('AJAX request successful');
                },
                error: function(xhr) {
                    console.error('AJAX request failed:', xhr.responseText);
                }
            });
        }
    });
</script>
@endsection
