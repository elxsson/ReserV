@extends('template.app')


@section('title', 'Feedback')
@section('main')
<main class="flex-1 p-6 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-lg text-center">
        @if(session('type') === 'error')
            <h2 class="text-2xl font-semibold text-red-600">Erro</h2>
            <p class="mt-4 text-gray-700">{{ session('message') }}</p>
            <a href="{{ url()->previous() }}" class="mt-6 inline-block bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                Voltar
            </a>
        @elseif(session('type') === 'success')
            <h2 class="text-2xl font-semibold text-green-600">Sucesso</h2>
            <p class="mt-4 text-gray-700">{{ session('message') }}</p>
            <a href="{{ url('/') }}" class="mt-6 inline-block bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Ir para a Página Inicial
            </a>
        @else
            <h2 class="text-2xl font-semibold text-[#132e49]">Mensagem</h2>
            <p class="mt-4 text-gray-700">Nenhuma mensagem disponível.</p>
            <a href="{{ url('/') }}" class="mt-6 inline-block bg-[#f48935] hover:bg-[#fcbe8d] text-white font-bold py-2 px-4 rounded">
                Voltar
            </a>
        @endif
    </div>
</main>
@endsection