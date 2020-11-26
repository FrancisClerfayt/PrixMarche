@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col">
      <h2 class="text-center">Mes commandes</h2>
		</div>
  </div>
  <div class="row pt-5">
    <div class="col-3 pr-5">
      <div class="row align-items-center justify-content-between">
        <hr class="w-100">
        <a href="{{ route('account', ['id' => 1]) }}" class="d-flex my-4">Tableau de bord</a>
        <svg width="1.5em" height="1.5em" viewBox="0 0 16 17" class="bi bi-compass align-items-center" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016zm6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
          <path d="M6.94 7.44l4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z"/>
        </svg>
      </div>
      <div class="row align-items-center justify-content-between">
        <hr class="w-100">
        <a href="{{ route('orders', ['id' => 1]) }}" class="d-flex my-4">Commandes</a>
        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
        </svg>
      </div>
      <div class="row align-items-center justify-content-between">
        <hr class="w-100">
        <a href="{{ route('account.detail', ['id' => 1]) }}" class="d-flex my-4">Détails du compte</a>
        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
        </svg>
        <hr class="w-100">
      </div>
    </div>
    <div class="col pl-5">
      <div class="row">
        <div class="col-2">
          <h3 class="text-center">Commande</h3>
        </div>
        <div class="col-4">
          <h3 class="text-center">Date</h3>
        </div>
        <div class="col-3">
          <h3 class="text-center">Etat</h3>
        </div>
        <div class="col-3">
          <h3 class="text-center">Total</h3>
        </div>
      </div>
      @foreach ($carts as $cart) 
        @if ($cart->status != 'pending') <!-- Si la commande n'est pas en attente (le pending est le statut du panier) -->
          <div class='row'>
            <div class="col-2">
              <p class="text-center"><a href="{{ route('orders.detail', ['id' => $cart->id]) }}">N°{{ $cart->id }}</a></p>
            </div>
            <div class="col-4">
              <p class="text-center">{{ $cart->updated_at }}</p>
            </div>
            <div class="col-3">
              <p class="text-center">{{ $cart->status }}</p>
            </div>
            <div class="col-3">
            </div>
          </div>
        @endif
      @endforeach
    </div>
  </div>
</div>
@endsection