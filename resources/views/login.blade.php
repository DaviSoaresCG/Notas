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
                <form action="{{ route('login_submit') }}" method="post" class="flex flex-col gap-1">
                    @csrf
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="{{ old('email') }}"
                        class="bg-gray-800 rounded-lg px-2 py-2">

                    @foreach ($errors->get('email') as $erro)
                        <p class="text-sm text-red-500 ml-1">
                            {{ $erro }}
                        </p>
                    @endforeach

                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" class="bg-gray-800 rounded-lg p-2">

                    @foreach ($errors->get('password') as $error)
                        <p class="text-sm text-red-500 ml-1">
                            {{ $error }}
                        </p>
                    @endforeach
                    {{-- Outra forma de mostrar mensagem de erro, acredito que so mostre uma mensagem --}}
                    {{-- @error('password')
                        <p class="text-sm text-red-500 ml-1">
                            {{$message}}
                        </p>
                    @enderror --}}
                    <button type="submit"
                        class="p-3 text-center bg-blue-700 rounded-xl text-lg my-8 mb-auto cursor-pointer">Logar</button>
                </form>
            </section>
        </div>
    </main>
</body>

</html>
