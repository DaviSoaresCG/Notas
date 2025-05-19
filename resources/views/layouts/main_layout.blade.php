<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="w-full h-full bg-gray-950">
    <header class=" text-white flex flex-row items-center md:h-36 mx-40 px-6 border-b-1 ">
        <div>
            <a href="{{ route('home') }}" class="text-2xl">Logo</a>
        </div>
        <div class="flex flex-row items-center justify-center ml-auto gap-8">

            <p class="flex flex-row gap-1">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                @if (session('user'))
                    {{ session('user.email') }}
                @endif
            </p>
            <a href="{{ route('logout') }}"
                class="py-2 px-4 rounded bg-gray-900 transition-all duration-200 ease-in-out flex items-center justify-center">SAIR</a>
        </div>
    </header>
    <main class="flex items-center justify-center mx-40 p-2 h-full mt-16 text-white">
        {{-- caso nao tenha conteudo --}}
        {{-- <div class="flex flex-col items-center gap-10">
            <h2 class="font-bold text-3xl">Você nao tem notas criadas!!</h2>
            <a href="{{route('create')}}" class="py-3 px-10 text-2xl bg-gray-900 rounded border-2 border-black">Criar Nota</a>
        </div> --}}
        {{-- se tiver --}}
        @yield('conteudo')
    </main>
</body>

</html>

{{-- GitHub token classic --}}
