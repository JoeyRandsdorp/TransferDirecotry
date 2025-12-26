<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>variable naam</title>
    <link rel="stylesheet" href="./x-nav-linkpp.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
</head>
<body>
    <nav>
        <x-nav-link href="/">Home</x-nav-link>
        <x-nav-link href="/restaurants">Restaurants</x-nav-link>
        <x-nav-link href="/about-us">About us</x-nav-link>
        <x-nav-link href="/contact">Contact</x-nav-link>
        <x-nav-link href="/login">Log in</x-nav-link>
        <x-nav-link href="/register">Register</x-nav-link>
    </nav>
    {{ $slot }}
<script src="app.js"></script>
</body>
</html>
