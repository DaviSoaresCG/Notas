<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <header>
        Header
    </header>
    <main class="flex items-center justify-center h-screen bg-gray-950 p-2">
        @yield('conteudo')
    </main>
</body>

</html>
