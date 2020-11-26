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
    <div class="col-10"></div>
    <div class="col">
  <button class="btn btn-primary">Valider la commande</button>
    </div>
  </div>
</div>


@endsection