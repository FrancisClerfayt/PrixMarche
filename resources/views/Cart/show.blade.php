Panier n°{{ $cart->id }}<br>
Créé par {{ $cart->user->email }} (Utilisateur n° {{ $cart->user->id }})<br>
Contenu:
@foreach ($cart->cart_products as $product)
  <br>---------<br>
  Produit:{{ $product->product->name }}<br>
  Quantité:{{ $product->quantity }}
  <br>---------<br>
@endforeach