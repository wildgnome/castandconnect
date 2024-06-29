<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cast and Connect</title>
</head>

<body>
    <header>
    @include('components.navbar2')
    </header>
    <main class="relative">


        @include('home.partials.hero')
        @include('home.partials.what-we-do')
        @include('home.partials.our-resources')
        @include('home.partials.customer-reviews')
        @include('home.partials.donate')
        @include('home.partials.footer')

    </main>

</body>

</html>
