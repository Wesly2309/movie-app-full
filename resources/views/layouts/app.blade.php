<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Movie App Project</title>

    <!-- Stylesheet -->
    @vite('resources/css/app.css')
    <@livewireStyles />
    <script src="https://cdn.jsdelivr.net/gh/alphinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body class="bg-slate-900 text-white">
    <!-- Your content -->
    @include('partials.navbar')
    @yield('content')
    <@livewireScripts>
</body>

</html>
