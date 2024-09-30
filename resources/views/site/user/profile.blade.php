@extends('template.app')

@section('title', 'Perfil')
@section('main')
<main class="flex-1 p-6 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-lg">
        <h2 class="text-2xl font-semibold text-[#132e49] text-center">Perfil do Usuário</h2>
        <div class="mt-6">
            <p class="text-lg font-bold text-[#245478]">Nome: Jorgin</p>
            <p class="text-lg font-bold text-[#245478]">E-mail: jorge@teste.com </p>
        </div>
        <div class="mt-6">
            <a href="#" class="block bg-[#f48935] hover:bg-[#fcbe8d] text-white font-bold py-2 text-center rounded">
                Editar Perfil
            </a>
        </div>
    </div>
</main>
@endsection
