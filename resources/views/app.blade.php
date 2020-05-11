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
        <header class="py-6 mb-8">
            <h1 class="text-4xl text-black font-bold">Geschäftsinnovation im Bauwesen</h1>
        </header>

        <main class="primary flex">
            <aside class="w-1/5 pt-8">
                <section class="mb-10">
                    <h5 class="uppercase font-bold mb-5 text-base">
                        Explore
                    </h5>
                    <ul>
                        <li class="text-sm pb-4">
                            <router-link class="text-black" to="/" exact>Explore Cases</router-link>
                        </li>
                    </ul>
                </section>

                <section class="mb-10">
                    <h5 class="uppercase font-bold mb-5 text-base">
                        View
                    </h5>
                    <ul>
                        <li class="text-sm pb-4">
                            <router-link class="text-black" to="/cases">View Cases</router-link>
                        </li>
                    </ul>
                </section>
            </aside>

            <div class="primary flex-1">
                <router-view></router-view>
            </div>
        </main>
    </div>
</div>

<script src="js/app.js"></script>

</body>
</html>
