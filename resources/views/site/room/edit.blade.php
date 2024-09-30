@extends('template.forms')

@section('title', 'Editar Reserva')
@section('forms')
<h2 class="text-2xl font-semibold text-[#132e49] text-center">Reserva - Sala A</h2>
<form action="/reservar" method="POST" class="mt-6">
    <div class="mb-4">
        <label for="data" class="block text-[#132e49] font-semibold mb-2">Data</label>
        <input type="date" id="data" name="data" class="w-full p-2 border border-gray-300 rounded-md" required>
    </div>
    <div class="mb-4">
        <label for="inicio" class="block text-[#132e49] font-semibold mb-2">Horário de Início</label>
        <input type="time" id="inicio" name="inicio" class="w-full p-2 border border-gray-300 rounded-md" required>
    </div>
    <div class="mb-4">
        <label for="encerramento" class="block text-[#132e49] font-semibold mb-2">Horário de Encerramento</label>
        <input type="time" id="encerramento" name="encerramento" class="w-full p-2 border border-gray-300 rounded-md" required>
    </div>
    <button type="submit" class="bg-[#f48935] hover:bg-[#fcbe8d] text-white font-bold py-2 px-4 rounded w-full">
        Reservar
    </button>
</form>
@endsection