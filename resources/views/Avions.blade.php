<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Avions</title>
</head>
<body> 
   
    <h1>Hello world </h1>
   
    <table class="border-collapse border border-slate-400 ...">
  <thead>
    <tr>
      <th class="border border-slate-900 ...">Id </th>
      <th class="border border-slate-300 ...">libelle</th>
      
      <th class="border border-slate-300 ...">capacite</th>
      <th class="border border-slate-300 ...">Airport</th>
      <th class="border border-slate-300 ..."> created_at</th>
      <th class="border border-slate-300 ..."> Actions</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($avions as $item)
        <tr>
      <td class="border border-slate-900...">{{$item->id}} </td>
      <td class="border border-slate-300 ...">{{$item->libelle}}</td>
      <td class="border border-slate-300 ...">{{$item->capacite}}</td>
      <td class="border border-slate-300 ..."><select>@foreach($airport as $air)
        <option>{{$air->iata}} </option>
        <option>{{$air->icao}}</option>
      
      
        @endforeach</select></td>
      <td class="border border-slate-300 ...">{{$item->created_at}} </td>
      
      
      <td class="border border-slate-300 bg-red-200...">
      <form action="{{ route('avions.delete', ['id' => $item->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button  class="btn btn-danger" type="submit" onclick="return   confirm('Are you sure you want to delete this avion?' )" >Delete</button>
                </form>

      </td>
    </tr>
   
    
    @endforeach
    
  </tbody>
</table>
  

</body>
</html>
