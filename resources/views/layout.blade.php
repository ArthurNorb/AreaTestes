<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Meu Projeto')</title>
    
    <!-- Tailwind CSS (via CDN ou local) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Alpine.js -->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest/dist/lucide.min.js"></script>
    <!-- Livewire Styles -->
    @livewireStyles
</head>

<body class="bg-gradient-to-r from-blue-50 to-white min-h-screen flex flex-col">
    <!-- Header com Navbar -->
    <header class="bg-white shadow">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo / Título -->
            <a href="{{ url('/') }}" class="text-2xl font-bold text-blue-600 hover:text-blue-800 transition-colors">
                Área de testes
            </a>
            <!-- Menu para telas médias e maiores -->
            <div class="hidden md:flex space-x-6">
                <a href="{{ url('/') }}" class="text-gray-700 hover:text-blue-600 transition-colors">Página Inicial</a>
                <a href="{{ url('/testes') }}" class="text-gray-700 hover:text-blue-600 transition-colors">Testes</a>
            </div>
            <!-- Botão de menu para telas pequenas -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </nav>
    </header>

    <!-- Conteúdo Principal -->
    <main class="container mx-auto px-6 py-8 flex-grow">
        @yield('content')
    </main>

    <!-- Rodapé -->
    <footer class="bg-gray-200">
        <div class="container mx-auto px-6 py-4 text-center text-gray-700">
            <p>© {{ date('Y') }} Masterix Sistemas</p>
            <p>Desenvolvido por Arthur Norberto</p>
        </div>
    </footer>
    
    <!-- Livewire Scripts -->
    @livewireScripts
</body>

</html>
