@extends('layout')

@section('title', 'Testes')

@section('content')
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-6">
            Área de Testes
        </h1>
        <p class="text-gray-700 text-lg mb-4">
            Bem-vindo à página de testes do ambiente Laravel!
        </p>
        <p class="text-gray-600 text-base mb-6">
            Utilize esta página para listar os seus testes. Crie uma nova rota para cada um e adicione na lista abaixo.
        </p>

        <!-- Lista de Testes -->
        <div class="bg-gray-100 p-4 rounded-lg">
            <h2 class="text-2xl font-semibold mb-3">Testes Disponíveis:</h2>
            <ul class="list-disc list-inside text-gray-700">
                <li>
                    <a href="{{ url('/testes/icones-personalizados') }}" class="text-blue-500 hover:underline">
                        Ícones Personalizados
                    </a>
                </li>
            </ul>
        </div>

        <div class="flex justify-center mt-6">
            <a href="{{ url('/') }}"
                class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition duration-300">
                Voltar para a Página Inicial
            </a>
        </div>
    </div>
@endsection
