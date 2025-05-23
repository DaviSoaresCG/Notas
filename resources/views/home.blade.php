@extends('layouts.main_layout')
@section('conteudo')
    <div class="w-full">
        @if (empty($notes))
            <div class="flex items-center justify-end mb-4 flex-row">
                <a href="{{route('create')}}" class="py-3 px-6 bg-gray-900 border-2 border-black rounded">Criar Nota</a>
            </div>
        @else
            <div class="flex items-center justify-end mb-4 flex-row">
                <a href="{{route('create')}}" class="py-3 px-6 bg-gray-900 border-2 border-black rounded">Criar Nota</a>
            </div>
            @foreach ($notes as $note)
                @include('note')
            @endforeach
        @endif
    </div>
@endsection
