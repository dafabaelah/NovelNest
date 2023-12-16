<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>
</head>
<body class="h-full">
    <div class="min-h-full">
        @include('dashboard.layout.navbar')
        <main>
            <div class="container mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                @yield('container')
            </div>
        </main>
        
        @include('dashboard.layout.footer')
        
    </div>
</body>
</html>