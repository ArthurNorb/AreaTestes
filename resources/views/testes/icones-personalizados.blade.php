@extends('layout')

@section('title', 'ícones personalizados')

@section('content')

    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-6">
            ícones personalizados
        </h1>
        <p class="text-gray-700 text-lg mb-4">
            Objetivo: Criar um componente que contenha um icone personalizado
        </p>
        <p class="text-gray-600 text-base mb-6">
            Vou tentar criar um componente livewire para colocar na pagina de criação desse componente. Vou chamá-lo de
            categoria, já que o componente será utilizado nas categorias de links úteis e setores do Fiscal Total 2.
        </p>
        <p class="text-gray-600 text-base mb-6">
            Os ícones utilizados serão do <a href="https://heroicons.com/" class='text-blue-600'>HeroIcons</a>.
        </p>

        <div class="flex justify-center mt-6">
            <a href="{{ route('categorias.index') }}"
                class="mr-5 bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition duration-300">
                Listar Categorias
            </a>
            <a href="{{ url('/') }}"
                class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition duration-300">
                Criar Categoria
            </a>
        </div>

    </div>


@endsection
