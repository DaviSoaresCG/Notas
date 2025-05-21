@extends('layouts.main_layout')
@section('conteudo')
    <div class="w-full">
        <div class="flex md:flex-row items-center mb-10 justify-between">
            <h2 class="text-2xl font-bold">Nova Nota</h2>
            <a href="{{route('home')}}" class="p-2 bg-gray-900 rounded border-2 hover:bg-red-800 hover:text-white text-red-500 border-black">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </a>
        </div>
        <section class="w-full h-64 px-5 py-4 bg-gray-900 rounded-2xl border-black">
            <div class="flex flex-row items-center justify-between pb-6 border-gray-300/25">
                <form action="#" class="flex flex-col w-full gap-2">
                    <label for="Titulo">Titulo</label>
                    <input type="text" class="bg-gray-800 rounded-lg px-2 py-2 w-full">
                    <label for="texto">Texto</label>
                    <textarea name="texto" id="texto" cols="10" rows="10" class="bg-gray-800 px-2 py-1 rounded-lg h-26"></textarea>
                </form>
            </div>
        </section>
        <div class="mt-3 gap-4 flex flex-row items-center justify-end">
            <a href="{{route('home')}}" class="bg-red-800 text-white text-lg py-3 w-36 text-center rounded-xl">Cancelar</a>
            <a href="#" class="bg-blue-800 text-white text-lg py-3 w-36 text-center rounded-xl">Criar</a>
        </div>
    </div>
@endsection
