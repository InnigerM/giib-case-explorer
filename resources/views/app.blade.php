<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Geschäftsinnovation im Bauwesen</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

</head>
<body>
<div id="app">
    <div class="container mx-auto">
        <nav-bar></nav-bar>
        <main class="primary">
            <div class="primary flex-1">
                <router-view></router-view>
            </div>
        </main>
    </div>
</div>

<script src="js/app.js"></script>

</body>
</html>
