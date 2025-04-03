@extends('layout')

@section('title', 'Ícones Personalizados')

@section('content')

    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-6">
            Criar Categoria
        </h1>

        <form action="{{ route('categorias.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Ícone</label>
                <livewire:icon-picker />
            </div>

            <div class="mb-4">
                <label for="cor" class="block text-gray-700 font-medium">Cor</label>
                <input type="text" name="cor" id="cor" placeholder="Ex: #3490dc"
                       class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="nome" class="block text-gray-700 font-medium">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Nome da categoria"
                       class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="descricao" class="block text-gray-700 font-medium">Descrição</label>
                <textarea name="descricao" id="descricao" rows="4" placeholder="Descrição da categoria"
                          class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"></textarea>
            </div>

            <div class="text-center">
                <button type="submit"
                        class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition duration-300">
                    Salvar Categoria
                </button>
            </div>
        </form>
    </div>

@endsection
