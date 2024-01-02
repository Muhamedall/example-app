<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<form class="mt-5" method="POST" action="/insertAvion">
    @csrf
    libely:<input type="text" name="libelle">
   capacity:<input type="text" name="capacite">
   <button type="submit"> Ajoute</button>
</form>
</body>
</html>