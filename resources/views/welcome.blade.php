@extends('layout')

@section('title', 'Página Inicial')

@section('content')
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-6">
            Área de Testes de Desenvolvimento
        </h1>
        <p class="text-gray-700 text-lg mb-4">
            Bem-vindo ao ambiente de testes da <strong>Masterix Sistemas</strong>!
        </p>
        <p class="text-gray-600 text-base mb-6">
            Aqui você pode explorar e experimentar com as tecnologias que utilizamos no desenvolvimento das nossas
            aplicações. Este ambiente foi configurado para testar e demonstrar a integração e o poder de frameworks e
            bibliotecas modernos, tais como:
        </p>
        <ul class="list-disc list-inside text-gray-600 mb-6">
            <li><strong>Laravel:</strong> Um framework PHP robusto e elegante para o desenvolvimento web.</li>
            <li><strong>Tailwind CSS:</strong> Um framework utilitário que facilita a criação de designs modernos e
                responsivos.</li>
            <li><strong>Alpine.js:</strong> Uma biblioteca JavaScript leve que adiciona interatividade de forma simples.
            </li>
            <li>E outras tecnologias inovadoras que impulsionam nossos projetos.</li>
        </ul>
        <p class="text-gray-600 text-base mb-6">
            Em desenvolvimento pelo estagiário Arthur :)
        </p>
        <div class="flex justify-center">
            <a href="{{ url('/testes') }}"
                class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition duration-300">
                Veja os testes
            </a>
        </div>
    </div>
@endsection
