<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Dashboard - Admin</title>
</head>
<body class="h-full">
    <div class="min-h-full">
        @include('dashboard.admin.layout.navbar')
        @include('dashboard.admin.layout.aside')
        <main>
            <div class="p-4 sm:ml-64">
                <div class="flex-auto justify-center rounded mt-14 p-2">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
</body>
</html>