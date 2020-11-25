<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($products as $product)
      Produit: <a href="{{ route('Product.show', ['Product' => $product->id]) }}">{{ $product->name}}</a><br>
      <a href="{{ route('Product.edit', ['Product' => $product->id]) }}">Editer</a>
      <form action="{{ route('CartProduct.store') }}" method="POST">
          @csrf
          Quantité: 
          <input type="number" name="quantity" value="1">
          <input type="hidden" name="product_id" value="{{ $product->id }}">
          <button type="submit">Ajouter au panier</button>
      </form>
      <form action="{{ route('Product.destroy', ['Product' => $product->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit">Supprimer</button>
      </form>
    @endforeach
</body>
</html>


