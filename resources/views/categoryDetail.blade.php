@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col">
      <h2 class="text-center">{{ $category->name }}s</h2>
		</div>
  </div>
  <div class="row pt-5">
    <div class="col-3 pr-5">
      <hr class="w-100">
      @foreach ($menu as $menuElement)
        <div class="row align-items-center justify-content-between">
          <a href="{{ route('category.detail', ['id' => $menuElement->id]) }}" class="d-flex my-4">{{ $menuElement->name }}</a>
          <hr class="w-100">
        </div>
      @endforeach
    </div>
    <div class="col pl-5 d-flex flex-wrap justify-content-around">
      @foreach ($category->products as $product)
        <div class="col-4 my-2 d-flex flex-column align-items-center">
          <img class="picture-product" src="../../images/adhesif.jpg" alt="{{ $product->picture_alt }}">
          <p class="description-cup"><strong class="bold">{{ $product->name }}</strong><br>{{ $product->price }}€</p>
          
        <form action="{{ route('CartProduct.store') }}" method="POST">
          @csrf
          Quantité: 
          <input type="number" name="quantity" value="1">
          <input type="hidden" name="product_id" value="{{ $product->id }}">
          <button type="submit" CLASS="btn btn-primary">Ajouter au panier</button>
      </form>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection