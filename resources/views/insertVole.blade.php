@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voles</title>
</head>
<body>
    <h1>Creation vole</h1>
    <form method="POST" action="{{route('createVole.store')}}">
        @csrf
        <div class="mb-3">
            <div class="mb-3">
             <label  class="form-label">Airport-Depart</label>
             <select>
                @foreach ($voles as $vol)
                <option value="airport_depart_id">{{$vol->airport_depart_id}}</option>
                @endforeach
             </select>
             <label  class="form-label">Airport-Arive</label>
             <select>
                @foreach ($voles as $vol)
                <option value="airport_arrivee_id">{{$vol->airport_arrivee_id}}</option>
                @endforeach
             </select>
             <label  class="form-label">Date</label>
             <input
                 type="date"
                 name="date"
             />
            
            </div>
            <div class="d-grid">
          <button type="submit" class="btn btn-primary btn-block" >
           Add vole
          </button>
         </div>
         
         
         </div>
    
    
    
    </form>
</body>
</html>
    
@endsection
