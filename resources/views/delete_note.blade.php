<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-950">
    <main class="flex items-center flex-col justify-center">
        <section class="h-72 flex flex-col items-center justify-center text-white w-full">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-20 text-red-500 mb-10">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>
            </div>
            <div class="flex flex-col items-center justify-center gap-2">
                <p class="text-blue-400 text-4xl">{{ $note['title'] }}</p>
                <p>Você deseja deletar essa nota?</p>

                <form action="{{ route('delete_note_confirm') }}" method="post">
                    <input type="hidden" name="noteId" value="{{ Crypt::encrypt($note->id) }}">
                    @csrf
                    <div class="flex flex-row gap-2 w-full">
                        <a href="{{ route('home') }}" class="px-5 py-2 rounded-lg bg-gray-900">Cancelar</a>
                        <button type="submit" class="px-5 ml-2 py-2 bg-red-800 rounded-lg cursor-pointer">Deletar<button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>

</html>
