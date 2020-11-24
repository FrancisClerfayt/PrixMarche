<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($products as $product)
    <ul>
        <li>
            Name: {{ $product->name }}
        </li>
        <li>
            Price: {{ $product->price }}
        </li>
        <li>
            index_picture: {{ $product->picture }}
        </li>
        <li>
            created_at: {{ $product->created_at }}
        </li>
        <li>
            updated_at: {{ $product->updated_at }}
        </li>
        <li>
        <a href="{{ route('Product.show', ['Product' => $product->id]) }}">Show</a>
        <a href="{{ route('Product.edit', ['Product' => $product->id]) }}">Edit</a>
        <form action="{{ route('Product.destroy', ['Product' => $product->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer</button>
        </form>
        </li>
    </ul>
    @endforeach
</body>
</html>


