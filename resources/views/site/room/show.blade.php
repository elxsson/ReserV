@extends('template.app')

@section('title', 'Sala A')
@section('main')
<main class="flex-1 flex items-center justify-center p-6">
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-lg">
        <h2 class="text-2xl font-semibold text-[#132e49] text-center">Detalhes da Sala</h2>
        <div class="mt-6">
            <h3 class="text-xl font-bold text-[#245478]">Sala A</h3>
            <p class="mt-2 text-gray-600"><strong>Capacidade:</strong> 10 pessoas</p>
            <p class="mt-2 text-gray-600"><strong>Equipamentos:</strong> Projetor, Quadro Branco, Wi-Fi</p>
            <p class="mt-2 text-gray-600"><strong>Status:</strong> Disponível</p>
        </div>
        <div class="mt-6">
            <a href="reservas.html" class="block bg-[#f48935] hover:bg-[#fcbe8d] text-white font-bold py-2 text-center rounded">
                Reservar Sala
            </a>
        </div>
    </div>
</main>
@endsection