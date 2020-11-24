<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="contact" action="{{ route('Product.store') }}" method="POST" >
        @csrf

        <input name="name" placeholder="product name" type="text" tabindex="1" required autofocus style="display: block;">
        <br>
        <input name="price" placeholder="product price" type="number" tabindex="2" required style="display: block;">
        <br>
        <input name="picture" placeholder="product picture" type="text" tabindex="3" required style="display: block;">
        <br>
        <input name="category_id" placeholder="category_id" type="number" tabindex="4" required style="display: block;">
        <br>
        <button name="submit" type="submit" id="contact-submit">add product</button>
    </form>
</body>
</html>


