<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- we can include the js and css file here only if they are presint in the public folder because then only it can accesable  --}}
     {{-- so here we are using the vite server so we import these app.css and js file with the help of vite server directly  --}}
     @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    @session('message')
        <div>
            {{session('message')}}
        </div>
    @endsession
     {{ $slot}}
</body>
</html>