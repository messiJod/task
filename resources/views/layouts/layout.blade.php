<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="flex justify-center items-center min-h-screen bg-gradient-to-tl from-black to-white">
<div class="container">
    <div class="text-6xl text-center my-5 text-white">Welcome to Pizza Ordering Portal</div>
    @yield('content')
</div>

</body>
</html>
