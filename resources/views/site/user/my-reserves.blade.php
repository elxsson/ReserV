@extends('template.app')

@section('title', 'TYESTANDO')
@section('main')
<main class="flex-1 pt-28 pr-6 pl-6">
    <h2 class="text-2xl font-semibold text-[#132e49]">Minhas Reservas</h2>
    <div class="mt-6 overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg shadow">
            <thead>
                <tr class="bg-[#245478] text-white text-left">
                    <th class="py-3 px-4">Sala</th>
                    <th class="py-3 px-4">Data</th>
                    <th class="py-3 px-4">Horário de Início</th>
                    <th class="py-3 px-4">Horário de Encerramento</th>
                    <th class="py-3 px-4">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b hover:bg-gray-100">
                    <td class="py-3 px-4">Sala A</td>
                    <td class="py-3 px-4">05/10/2024</td>
                    <td class="py-3 px-4">10:00</td>
                    <td class="py-3 px-4">12:00</td>
                    <td class="py-3 px-4">
                        <a href="#" class="text-blue-500 hover:underline">Editar</a> |
                        <a href="#" class="text-red-500 hover:underline">Cancelar</a>
                    </td>
                </tr>
                <tr class="border-b hover:bg-gray-100">
                    <td class="py-3 px-4">Sala B</td>
                    <td class="py-3 px-4">10/10/2024</td>
                    <td class="py-3 px-4">14:00</td>
                    <td class="py-3 px-4">16:00</td>
                    <td class="py-3 px-4">
                        <a href="#" class="text-blue-500 hover:underline">Editar</a> |
                        <a href="#" class="text-red-500 hover:underline">Cancelar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
@endsection
