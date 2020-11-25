<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            Name: {{ $product->name }}
        </li>
        <li>
            Price: {{ $product->price }}
        </li>
        <li>
            Image: {{ $product->picture }}
        </li>
        <li>
            Image alt: {{ $product->picture_alt }}
        </li>
        <li>
            created_at: {{ $product->created_at }}
        </li>
        <li>
            updated_at: {{ $product->updated_at }}
        </li>
    </ul>
</body>
</html>


