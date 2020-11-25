<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.gstatic.com"> 
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Home</title>
</head>
<body>
  <section class="latest-product">
    <h1 class="title-latest-product">A la une</h1>
    <div class="card-product">
      <div class="rectangle">
        <img class="picture-product" src="../images/cup-cake.jpg" title="product" alt="img">
        <p class="description-cup"><strong class="bold">Emballage Cup Cake</strong><br>1,00€</p>
        <button class="btn">Ajouter au panier</button>
      </div>
      <div class="rectangle">
        <img class="picture-product" src="../images/colle-glue.jpg" title="product" alt="img">
        <p class="description-cup"><strong class="bold">Colle glue</strong><br>1,00€</p>
        <button class="btn">Ajouter au panier</button>
      </div>
      <div class="rectangle">
        <img class="picture-product" src="../images/mask.jpg" title="product" alt="img">
        <p class="description-cup"><strong class="bold">Masque</strong><br>1,00€</p>
        <button class="btn">Ajouter au panier</button>
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
  </div>
  </section>
</body>
</html>