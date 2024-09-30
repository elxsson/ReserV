<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReserV - @yield('title')</title>
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
    <aside class="w-full md:w-64 bg-[#132e49] text-white h-auto md:h-screen">
        <div class="p-6">
            <h1 class="text-2xl font-semibold">@yield('title')</h1>
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

    @yield('main')
    
</body>
</html>
