<div x-data="{ open: false }" class="relative">
    <button type="button" @click="open = !open"
        class="px-4 py-2 border border-gray-300 bg-gray-100 rounded cursor-pointer focus:outline-none">
        Escolha um ícone
    </button>

    <div x-show="open" x-cloak
        class="absolute z-10 mt-2 w-80 max-h-48 overflow-y-auto border border-gray-300 p-2 rounded bg-white">
        <div class="grid grid-cols-6 gap-2">
            @foreach ($icons as $icon)
                <button type="button" @click="open = false; $wire.selectIcon('{{ $icon }}')"
                    class="text-lg cursor-pointer hover:text-blue-500 flex items-center justify-center">
                    <i class="fas fa-{{ $icon }}"></i>
                </button>
            @endforeach
        </div>
    </div>
</div>
