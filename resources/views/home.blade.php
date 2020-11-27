@extends('layouts.app')

@section('title', 'Prix Marché - Accueil')

@section('content')

<section class="latest-product">
  <h1 class="title-latest-product">A la une</h1>
  <div class="card-product">
    <div class="rectangle">
      <img class="picture-product" src="../images/cup-cake.jpg" title="product" alt="img">
      <p class="description-cup"><strong class="bold">Emballage Cup Cake</strong><br>1,00€</p>
      <button class="btn-cart">Ajouter au panier</button>
    </div>
    <div class="rectangle">
      <img class="picture-product" src="../images/colle-glue.jpg" title="product" alt="img">
      <p class="description-cup"><strong class="bold">Colle glue</strong><br>1,00€</p>
      <button class="btn-cart">Ajouter au panier</button>
    </div>
    <div class="rectangle">
      <img class="picture-product" src="../images/mask.jpg" title="product" alt="img">
      <p class="description-cup"><strong class="bold">Masque</strong><br>1,00€</p>
      <button class="btn-cart">Ajouter au panier</button>
    </div>
  </div>
</section>
<section class="operation">
  <h2 class="how-it-works">Comment ça marche ?</h2>
  <div class="icon-order">
    <div class="icon">
      <img class="icon-picture-ordi" src="../images/picto.png" title="icon" alt="icon">
      <p class="description-order">
        Vous commandez sur internet depuis chez vous
      </p>
    </div>
    <div class="icon">
      <img class="icon-picture-app" src="../images/picto2.png" title="icon" alt="icon">
      <p class="description-order">
        Ou depuis notre application
      </p>
    </div>
    <div class="icon">
      <img class="icon-picture" src="../images/picto3.png" title="icon" alt="icon">
      <p class="description-order">
        Et vous payez et venez chercher vos articles en magasin ou sur les marchés
      </p>
    </div>
  </div>
</section>
@endsection