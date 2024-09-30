@extends('template.app')

@section('title', 'Suporte')
@section('main')
<h2 class="text-2xl font-semibold text-[#132e49] text-center">Contato/Suporte</h2>
<form action="/enviar-contato" method="POST" class="mt-6">
    <div class="mb-4">
        <label for="nome" class="block text-[#132e49] font-semibold mb-2">Nome</label>
        <input type="text" id="nome" name="nome" class="w-full p-2 border border-gray-300 rounded-md" required>
    </div>
    <div class="mb-4">
        <label for="email" class="block text-[#132e49] font-semibold mb-2">E-mail</label>
        <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded-md" required>
    </div>
    <div class="mb-4">
        <label for="assunto" class="block text-[#132e49] font-semibold mb-2">Assunto</label>
        <input type="text" id="assunto" name="assunto" class="w-full p-2 border border-gray-300 rounded-md" required>
    </div>
    <div class="mb-4">
        <label for="mensagem" class="block text-[#132e49] font-semibold mb-2">Mensagem</label>
        <textarea id="mensagem" name="mensagem" rows="4" class="w-full p-2 border border-gray-300 rounded-md" required></textarea>
    </div>
    <button type="submit" class="bg-[#f48935] hover:bg-[#fcbe8d] text-white font-bold py-2 px-4 rounded w-full">
        Enviar
    </button>
</form>
@endsection