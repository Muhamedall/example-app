<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Homme</title>
</head>
<body>
        <!-- Your content here -->
        @yield('content')
    <!-- Other scripts -->
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <a href="#" class="text-white font-bold text-xl">YourLogo</a>
            </div>
            <div class="md:block">
                <a href="{{route('homepage')}}" class="text-slate-50 hover:text-white px-3 py-2 rounded-md">Home</a>
                <a href="{{route('avions.index')}}" class="text-slate-300 hover:text-white px-3 py-2 rounded-md">List avions </a>
                <a href="{{route('formavions.index')}}" class="text-slate-300 hover:text-white px-3 py-2 rounded-md">Form</a>
               
            </div>
           
        </div>
    </nav>

</body>
</html>