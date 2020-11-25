<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="contact" action="{{ route('Product.update', ['Product' => $product->id]) }}" method="POST" >
        @csrf
        @method('PUT')
        <input name="name" value="{{ $product->name }}" type="text" tabindex="1" required autofocus style="display: block;">
        <br>
        <input name="price" value="{{ $product->price }}" type="number" tabindex="2" required style="display: block;">
        <br>
        <input name="picture" value="{{ $product->picture }}" type="text" tabindex="3" required style="display: block;">
        <br>
        <input name="picture_alt" value="{{ $product->picture_alt }}" type="text" tabindex="3" required style="display: block;">
        <br>
        <input name="category_id" value="{{ $product->category_id }}" type="number" tabindex="4" required style="display: block;">
        <br>
        <button name="" name="submit" type="submit" id="contact-submit">edit product</button>
    </form>
</body>
</html>


