@extends('layouts.main_layout')
@section('conteudo')
    <div class="w-full">
        <div class="flex md:flex-row items-center mb-10 justify-between">
            <h2 class="text-2xl font-bold">Nova Nota</h2>
            <a href="{{ route('home') }}"
                class="p-2 bg-gray-900 rounded border-2 hover:bg-red-800 hover:text-white text-red-500 border-black">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </a>
        </div>
        <section class="w-full h-64 px-5 py-4 bg-gray-900 rounded-2xl border-black">
            <div class="flex flex-row items-center justify-between pb-10 border-gray-300/25">
                <form action="{{ route('edit_note_submit') }}" class="flex flex-col w-full">
                    @csrf
                    <input type="hidden" name="noteId" value="{{ Crypt::encrypt($note->id) }}">
                    <label for="Titulo">Titulo</label>
                    <input type="text" name="title" value="{{ old('title', $note->title) }}"
                        class="bg-gray-800 rounded-lg mb-4 px-2 py-2 w-full">
                    @foreach ($errors->get('title') as $error)
                        <p class="text-sm text-red-500 -mt-4 ml-1">
                            {{ $error }}
                        </p>
                    @endforeach
                    <label for="texto">Texto</label>
                    <textarea name="text" id="texto" cols="4" rows="4" class="bg-gray-800 px-2 py-1 rounded-lg">{{ old('text', $note->text) }}</textarea>
                    @foreach ($errors->get('text') as $error)
                        <p class="text-sm text-red-500 ml-1">{{ $error }}</p>
                    @endforeach
            </div>
        </section>
        <div class="mt-3 gap-4 flex flex-row items-center justify-end">
            <a href="{{ route('home') }}"
                class="bg-red-800 text-white text-lg py-3 w-36 text-center rounded-xl">Cancelar</a>
            <button type="submit"
                class="bg-blue-800 cursor-pointer text-white text-lg py-3 w-36 text-center rounded-xl">Editar</button>
        </div>
        </form>
    </div>
@endsection
