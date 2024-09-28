<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #fffbf4;
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="flex flex-col md:flex-row">
    <!-- Menu Lateral -->
    <aside class="w-full md:w-64 bg-[#132e49] text-white h-auto md:h-screen">
        <div class="p-6">
            <h1 class="text-2xl font-semibold">Dashboard</h1>
        </div>
        <nav class="mt-6">
            <ul>
                <li class="p-4 hover:bg-[#245478]"><a href="#">Gerenciamento de Salas</a></li>
                <li class="p-4 hover:bg-[#245478]"><a href="#">Reservas</a></li>
                <li class="p-4 hover:bg-[#245478]"><a href="#">Relatórios</a></li>
                <li class="p-4 hover:bg-[#245478]"><a href="#">Configurações</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Conteúdo Principal -->
    <main class="flex-1 p-6">
        <h2 class="text-2xl font-semibold text-[#132e49]">Resumo das Reservas</h2>
        <div class="mt-4 grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="text-lg font-semibold text-[#245478]">Reservas Feitas</h3>
                <p class="text-2xl text-[#f48935]">12</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="text-lg font-semibold text-[#245478]">Reservas Pendentes</h3>
                <p class="text-2xl text-[#f48935]">3</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="text-lg font-semibold text-[#245478]">Status das Salas</h3>
                <p class="text-2xl text-[#f48935]">5 Disponíveis</p>
            </div>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-semibold text-[#132e49]">Salas Disponíveis</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-4">
                <div class="bg-white p-4 rounded-lg shadow relative">
                    <h3 class="text-lg font-semibold text-[#245478]">Sala A</h3>
                    <p>Capacidade: 10 pessoas</p>
                    <a href="reservas.html" class="absolute bottom-4 right-4 bg-[#f48935] hover:bg-[#fcbe8d] text-white text-sm font-bold py-1 px-2 rounded">Reservar</a>
                </div>
                <div class="bg-white p-4 rounded-lg shadow relative">
                    <h3 class="text-lg font-semibold text-[#245478]">Sala B</h3>
                    <p>Capacidade: 15 pessoas</p>
                    <a href="reservas.html" class="absolute bottom-4 right-4 bg-[#f48935] hover:bg-[#fcbe8d] text-white text-sm font-bold py-1 px-2 rounded">Reservar</a>
                </div>
                <div class="bg-white p-4 rounded-lg shadow relative">
                    <h3 class="text-lg font-semibold text-[#245478]">Sala C</h3>
                    <p>Capacidade: 20 pessoas</p>
                    <a href="reservas.html" class="absolute bottom-4 right-4 bg-[#f48935] hover:bg-[#fcbe8d] text-white text-sm font-bold py-1 px-2 rounded">Reservar</a>
                </div>
                <div class="bg-white p-4 rounded-lg shadow relative">
                    <h3 class="text-lg font-semibold text-[#245478]">Sala D</h3>
                    <p>Capacidade: 12 pessoas</p>
                    <a href="reservas.html" class="absolute bottom-4 right-4 bg-[#f48935] hover:bg-[#fcbe8d] text-white text-sm font-bold py-1 px-2 rounded">Reservar</a>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-semibold text-[#132e49]">Salas Reservadas</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="text-lg font-semibold text-[#245478]">Sala E</h3>
                    <p>Reservada por: João Silva</p>
                    <p>Data: 01/10/2024</p>
                    <p>Horário: 14:00 - 16:00</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="text-lg font-semibold text-[#245478]">Sala F</h3>
                    <p>Reservada por: Maria Oliveira</p>
                    <p>Data: 02/10/2024</p>
                    <p>Horário: 10:00 - 12:00</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
