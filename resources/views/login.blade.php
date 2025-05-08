<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <main class="flex items-center justify-center h-screen bg-gray-950 p-2">
        <div class="w-md p-8 bg-gray-900 rounded-xl">
            <section class="text-white text-sm sm:text-lg flex flex-col">
                <div class="flex items-center justify-center text-4xl font-bold">NOTAS</div>
                <form action="#" class="flex flex-col gap-1">
                    <label for="Email">Email</label>
                    <input type="text" name="email" id="email" class="bg-gray-800 rounded-lg px-2 py-2">

                    <label for="Senha">Senha</label>
                    <input type="password" name="password" id="password" class="bg-gray-800 rounded-lg p-2">

                    <button type="submit" class="p-3 bg-blue-700 rounded-xl text-lg my-8 mb-auto cursor-pointer">Logar</button>
                </form>
            </section>
        </div>
    </main>
</body>

</html>
