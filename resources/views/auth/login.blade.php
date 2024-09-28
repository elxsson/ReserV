
@extends('template.forms')

@section('title', 'Login')

@section('forms')
<h2 class="text-2xl font-semibold text-center text-[#132e49]">Login</h2>
<form class="mt-4">
    <div class="mt-4">
        <label class="block text-[#245478] text-sm font-bold mb-2" for="email">Email</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Seu email" required>
    </div>
    <div class="mt-4">
        <label class="block text-[#245478] text-sm font-bold mb-2" for="password">Senha</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Sua senha" required>
    </div>
    <button class="mt-6 bg-[#f48935] hover:bg-[#fcbe8d] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="submit">
        Login
    </button>
</form>
@endsection
