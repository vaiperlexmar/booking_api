<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}">
</head>
<body>
<header>
    @yield('header')
</header>
<main class="flex justify-center items-center">
    @yield('content')
</main>
</body>
</html>
