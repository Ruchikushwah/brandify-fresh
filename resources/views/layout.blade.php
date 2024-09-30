<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title'){{env('APP_NAME')}}</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="assets/css/fontawesome-5.css">
    <link rel="stylesheet" href="assets/css/unicons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div class="h-[500px] bg-cover bg-center" style="background-image: url('water.jpeg');">
        <!-- Your content here -->
        @include('header')

    </div>
    @section('content')
    @show

</body>

</html>