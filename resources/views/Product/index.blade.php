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
      <a href="{{ route('Product.edit', ['Product' => $product->id]) }}">Editer</a><br>
      <form action="{{ route('Product.destroy', ['Product' => $product->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit">Supprimer</button>
      </form>
    @endforeach
</body>
</html>


