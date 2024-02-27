<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <h1 class="text-center">Ajoute avion</h1>
<form class="mt-5" method="POST" action="/insertAvion">
    @csrf
    <div class="mb-3 row  w-100 h-100">
    <label class="col-sm-2 col-form-label ">Name</label>
    <div class="col-sm-10 w-25  ">
      <input type="text"  class="form-control p-1 "  name="libelle"  >
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">capacite</label>
    <div class="col-sm-10 w-25">
      <input type="text" class="form-control"  name="capacite">
    </div>
  </div>

  <button type="submit" class="btn btn-success">Ajouter</button>
</form>
</body>
</html>