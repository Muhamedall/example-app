<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Other meta tags -->
    <title>Avions</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body> 
   
    <h1>Hello world </h1>
   
    <table class="border-collapse border border-slate-400 ...">
  <thead>
    <tr>
      <th class="border border-slate-900 ...">Id </th>
      <th class="border border-slate-300 ...">libelle</th>
      <th class="border border-slate-300 ...">capacite</th>
      <th class="border border-slate-300 ..."> created_at</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($avions as $item)
        <tr>
      <td class="border border-slate-900...">{{$item->id}}</td>
      <td class="border border-slate-300 ...">{{$item->libelle}}</td>
      <td class="border border-slate-300 ...">{{$item->capacite}}</td>
      <td class="border border-slate-300 ...">{{$item->created_at}}</td>
    </tr>
   
    
    @endforeach
    
  </tbody>
</table>
  

</body>
</html>
