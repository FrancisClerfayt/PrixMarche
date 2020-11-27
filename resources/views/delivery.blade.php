@extends('layouts.app')

@section('title', 'Prix Marché - Livraison & Retrait')

@section('content')

<section class="content-delivery-store">
  <h1 class="title-delivery">Retrait et Livraison</h1>
  <p class="description-delivery">Vous serez informé par email ou sms de l'avancement de la préparation de votre demande. Vous pouvez annuler votre demande à tout moment à l'aide du formulaire Contact. Le paiement se fait lors du retrait ou de la livraison. Seuls les articles livrés seront facturés.</p>
  <div class="bloc-container">
    <div class="container-color">
      <h2 class="store">Retrait magasin</h2>
      <p class="container-store">
        Retrait de marchandises sur rendez-vous uniquement à notre local d'Anzin
      </p>
      <button class="btn-contact">Contact</button>
    </div>
    <div class="container-color-orange">
      <h2 class="delivery">Livraison</h2>
      <p class="container-delivery">
        Durant la période de confinement,
        il n'y a pas de retrait sur les marchés.​
        selon votre adresse et le montant de votre préparation, une livraison à votre domicile pourra être proposée.<br>
        Points retraits sur les marchés :<br>
        Suspendu durant la période de confinement
      </p>
      <button class="btn">Contact</button>
    </div>
  </div>
</section>
@endsection
