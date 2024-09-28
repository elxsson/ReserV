<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #fffbf4;
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg p-8 w-96">
        <h2 class="text-2xl font-semibold text-center text-[#132e49]">Cadastro</h2>
        <form class="mt-4">
            <div>
                <label class="block text-[#245478] text-sm font-bold mb-2" for="name">Nome</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Seu nome" required>
            </div>
            <div class="mt-4">
                <label class="block text-[#245478] text-sm font-bold mb-2" for="email">Email</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Seu email" required>
            </div>
            <div class="mt-4">
                <label class="block text-[#245478] text-sm font-bold mb-2" for="password">Senha</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Sua senha" required>
            </div>
            <button class="mt-6 bg-[#f48935] hover:bg-[#fcbe8d] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="submit">
                Cadastrar
            </button>
        </form>
    </div>
</body>
</html>
