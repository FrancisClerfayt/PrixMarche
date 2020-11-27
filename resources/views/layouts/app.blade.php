<!-- tout ce qui se répète -->
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
</head>
<body>
    <header>
      <div class="top">
          <div class="logo">
              <img src="{{ asset('images/logo_prix_marche_white 1.svg') }}" alt="">
          </div>
          <div class="wrap">
              <div class="search">
                 <input type="text" class="searchTerm">
                 <button type="submit" class="searchButton">
                  <i style="color: black;" class="fa fa-search"></i>
                </button>
              </div>
          </div>
          <img src="{{ asset('images/burger.webp') }}" alt="" class="burger">
      </div>
      <nav>
          <ul>
              <li>
                  <a href=" {{ route('home') }} ">Accueil</a>
              </li>
              <li>
                  <a href=" {{ route('allcategory') }} ">Toutes les catégories</a>
              </li>
              <li>
                  <a href=" {{ route('delivery') }} ">Livraison et retrait</a>
              </li>
              <li>
                  <a href=" {{ route('contact') }} ">contact</a>
              </li>
              <li>
                  <a href=" {{ route('account') }} ">Mon compte</a>
              </li>
              <li>
                  <a href=" {{ route('pendingcart') }} "><img src="" alt=""></a>
              </li>
          </ul>

          <ul class="sub_mobile">
              <li>
                  <a href=" {{ route('home') }} ">Accueil</a>
              </li>
              <li>
                  <a href=" {{ route('allcategory') }} ">Toutes les catégories</a>
              </li>
              <li>
                  <a href=" {{ route('delivery') }} ">Livraison et retrait</a>
              </li>
              <li>
                  <a href=" {{ route('contact') }} ">contact</a>
              </li>
              <li>
                  <a href=" {{ route('pendingcart') }} ">Mon compte</a>
              </li>
              <li>
                  <div class="wrap">
                      <div class="search">
                         <input type="text" class="searchTerm">
                         <button type="submit" class="searchButton">
                          <i style="color: black;" class="fa fa-search"></i>
                        </button>
                      </div>
                  </div>
              </li>
          </ul>
      </nav>
    </header>
  @yield('content')
    <footer>
        <footer>
          <div class="container">
            <div class="newsletter">
              <p>Inscription à la newsletter</p>
              <div class="wrap">
                <div class="search" >
                  <input type="text" class="searchTerm">
                </div>
              </div>
              <button class="searchButton">S'abonner maintanant</button>
            </div>

            <div class="delivery">
              <img src="img/refresh-cw.png" alt="">
              <p>Retrait au magasin ou sur les marchés</p>
            </div>

            <div class="payment">
              <img src="img/credit-card.png" alt="">
              <p>Paiement lors du retrait CB à partir de 10€, espèces</p>
            </div>

            <div class="menu">
              <ul>
                <li><a href="{{ route('delivery') }}">Livraison et retrait</a></li>
                <li><a href="{{ route('question') }}">F.A.Q</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
              </ul>
            </div>
          </div>
          <ul class="bottom">
            <li>C.G.U</li>
            <li>Politique de confidentialité</li>
            <li>Conditions de retour</li>
            <li>© 2020, Prix Marché.</li>
          </ul>
        </footer>
    </footer>
    <script src="{{ asset('js/layout.js') }}"></script>
</body>
</html>
