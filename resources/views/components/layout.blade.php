<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>{{$title ?? 'Rapido.es'}}</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <x-nav />
    {{$slot}}
    <x-footer />
    @vite(['resources/js/app.js'])
    {{$script ?? ''}}
</body>
</html>



<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/ 6.1.1/css/all.min.css"
     integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINKs4PhcE 1QSvqcyVLLD9aMhXd13uQjoXtEKNos OWaZqXgel0g==" 
     crossorigin="anonymous" referrerpolicy="n o-referrer" /> 
    
        <title>{{$title ?? 'Rapido.es'}}</title> 
         
         @livewireStyles 
         @vite(['resources/css/app.css']) 
         {{$style ?? '}} 
        
</head> 
<body> 
    
    <x-navbar /> 
    {{$slot}} 
    <x-footer /> 
    @livewireScripts 
    @vite(['resources/js/app.js']) 
    {{$script ?? ''}} 
</body>
</html>