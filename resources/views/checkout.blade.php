@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-4">
      <h3 class="text-center">Produit</h3>
    </div>
    <div class="col-2">
      <h3 class="text-center">Prix</h3>
    </div>
    <div class="col-3">
      <h3 class="text-center">Quantité</h3>
    </div>
    <div class="col-3">
      <h3 class="text-center">Sous-Total</h3>
    </div>  
  </div>
  @foreach ($cart->cart_products as $product)
  <div class="row">
    <div class="col-4">
    <p class="text-center">{{ $product->product->name }}</p>
    </div>
    <div class="col-2">
      <p class="text-center">{{ $product->product->price }}€</p>
    </div>
    <div class="col-3">
      <p class="text-center">{{ $product->quantity }}</p>
    </div>
    <div class="col-3">
      <p class="text-center">{{ $product->quantity * $product->product->price }}€</p>
    </div>  
  </div>
  @endforeach
  <div class="row">
    <div class="col-6">
        @if (empty($cart->user->first_name) || empty($cart->user->last_name) || empty($cart->user->email) || empty($cart->user->address) || empty($cart->user->zip_code) || empty($cart->user->city))
        Votre adresse semble incomplète.
        <a href="{{ route('account.detail', ['id' => 1]) }}">Modifier mes informations.</a>
      @else
        {{ $cart->user->first_name }} {{ $cart->user->last_name }}<br>
        {{ $cart->user->address }}<br>
        {{ $cart->user->zip_code }} {{ $cart->user->city }}<br>
        {{ $cart->user->phone }}<br>
        {{ $cart->user->email }}<br><br>
      @endif
    </div>
  </div>
  <div class="row">
  <p> Vos données personnelles seront utilisées pour le traitement de votre commande, vous accompagner au cours de votre visite du site web, et pour d’autres raisons décrites dans nos <a href="{{ route('conditions') }}">cgu </a></p>
  </div>
  <div class="row">
    <div class="col-10"></div>
    <div class="col">
  <button class="btn btn-primary">Valider la commande</button>
    </div>
  </div>
</div>


@endsection