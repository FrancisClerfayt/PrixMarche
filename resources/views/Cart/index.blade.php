
@foreach ($carts as $cart)
  Panier n°{{ $cart->id }} : {{ $cart->user->email }} <strong>{{ $cart->status }}</strong>
@endforeach