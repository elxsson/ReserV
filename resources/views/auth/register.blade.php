@extends('template.forms')
@section('title', 'Cadastro')
@section('forms')
<h2 class="text-2xl font-semibold text-center text-[#132e49]">Cadastro</h2>
<form class="mt-4" method="POST" action="{{ route('register_store') }}">
    @csrf
    <div>
        <label class="block text-[#245478] text-sm font-bold mb-2" for="name">Nome</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror" 
               id="name" 
               name="name" 
               type="text" 
               placeholder="Seu nome" 
               required 
               value="{{ old('name') }}">
        @error('name')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
    <div class="mt-4">
        <label class="block text-[#245478] text-sm font-bold mb-2" for="email">Email</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror" 
               id="email" 
               name="email" 
               type="email" 
               placeholder="Seu email" 
               required 
               value="{{ old('email') }}">
        @error('email')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
    <div class="mt-4">
        <label class="block text-[#245478] text-sm font-bold mb-2" for="password">Senha</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror" 
               id="password" 
               name="password" 
               type="password" 
               placeholder="Sua senha" 
               required>
        @error('password')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
    <div class="mt-4">
        <label class="block text-[#245478] text-sm font-bold mb-2" for="password_confirmation">Confirmar Senha</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
               id="password_confirmation" 
               name="password_confirmation" 
               type="password" 
               placeholder="Confirme sua senha" 
               required>
    </div>
    <div class="mt-4">
        <label class="inline-flex items-center">
            <input type="checkbox" class="form-checkbox" name="terms" required>
            <span class="ml-2">Eu concordo com os <a href="#" class="text-[#f48935] hover:text-[#fcbe8d]">Termos de Serviço</a></span>
        </label>
        @error('terms')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
    <button class="mt-6 bg-[#f48935] hover:bg-[#fcbe8d] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="submit">
        Cadastrar
    </button>
    <p class="p-2 text-center text-gray-700">
        Já tem uma conta?
        <a href="{{ route('login_create') }}" class="text-[#f48935] hover:text-[#fcbe8d] font-bold">Login</a>
    </p>
</form>
@endsection