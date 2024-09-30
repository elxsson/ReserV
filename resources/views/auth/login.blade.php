@extends('template.forms')
@section('title', 'Login')
@section('forms')
<h2 class="text-2xl font-semibold text-center text-[#132e49]">Login</h2>
<form class="mt-4" method="POST" action="{{ route('login_store') }}">
    @csrf
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
        <label class="inline-flex items-center">
            <input type="checkbox" class="form-checkbox" name="remember">
            <span class="ml-2">Lembrar-me</span>
        </label>
    </div>
    <button class="mt-6 bg-[#f48935] hover:bg-[#fcbe8d] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="submit">
        Login
    </button>
    <div class="mt-4 text-sm text-center">
        {{-- {{ route('password.request') }} desenvolver depois--}}
        <a href="#" class="text-[#f48935] hover:text-[#fcbe8d] font-bold"> 
            Esqueceu a senha?
        </a>
    </div>
    <div class="mt-4 text-sm text-center">
        Ainda não tem uma conta?
        <a href="{{ route('register_create') }}" class="text-[#f48935] hover:text-[#fcbe8d] font-bold">Criar conta</a>
    </div>
</form>
@endsection