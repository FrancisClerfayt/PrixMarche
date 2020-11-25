<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.gstatic.com"> 
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/category.css') }}">
  <title>Category</title>
</head>
<body>
  <section>
    <h1 class="title-category">Toutes les catégories</h1>

    <div class="content-all-category">
      @foreach ($categories as $category)
      <div class="rectangle">
      <p class="name-category">{{ $category->name }}</p>
      </div>
      @endforeach
    </div>
  </section>
</body>
</html>