@extends('layouts.app')

@section('title', 'Prix Marché - Accueil')

@section('content')

<section class="latest-product">
  <h1 class="title-latest-product">A la une</h1>
  <div class="row justify-content-around">
    <div class="col-3 d-flex flex-column align-items-center">
      <img class="picture-product" src="../images/cup-cake.jpg" title="product" alt="img">
      <p class="description-cup"><strong class="bold">Emballage Cup Cake</strong><br>1,00€</p>
      <button class="btn btn-primary">Ajouter au panier</button>
    </div>

  </div>
  </div>
</section>
<section>
  <div class="container">
  <h2 class="how-it-works">Comment ça marche ?</h2>
  <div class="row justify-content-around">
    <div class="col-3 d-flex flex-column align-items-center">
      <img class="icon-picture-ordi" src="../images/picto.png" title="icon" alt="icon">
      <p class="description-order">
        Vous commandez sur internet depuis chez vous
      </p>
    </div>
    <div class="col-3 d-flex flex-column align-items-center">
      <img class="icon-picture-app" src="../images/picto2.png" title="icon" alt="icon">
      <p class="description-order">
        Ou depuis notre application
      </p>
    </div>
    <div class="col-3 d-flex flex-column align-items-center">
      <img class="icon-picture" src="../images/picto3.png" title="icon" alt="icon">
      <p class="description-order">
        Et vous payez et venez chercher vos articles en magasin ou sur les marchés
      </p>
    </div>
  </div>
  </div>
</section>
@endsection