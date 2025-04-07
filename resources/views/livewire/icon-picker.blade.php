<div x-data="{ open: false }" @click.away="open = false" class="relative">
    <div class="flex items-center gap-2">
        <button type="button" @click="open = !open"
            class="px-4 py-2 border border-gray-300 bg-gray-100 rounded cursor-pointer focus:outline-none">
            Escolha um ícone
        </button>

        @if ($selectedIcon)
            <span class="h-8 w-8 rounded-full text-white p-4 flex items-center justify-center"
                style="background-color: {{ $bgColor }} ">
                <i class="{{ $selectedIcon }}"></i>
            </span>
        @endif
    </div>

    <div x-show="open" x-cloak
        class="absolute top-full mt-2 z-10 w-80 max-h-48 overflow-y-auto border border-gray-300 p-2 rounded bg-white">
        <div class="flex items-center justify-around pb-1 mb-2 border-b-2 border-gray-100">
            @foreach ($colors as $color)
                <button type="button" wire:click="selectColor('{{ $color }}')"
                    class="text-lg cursor-pointer flex items-center justify-center h-7 w-7 rounded-full"
                    style="background-color: {{ $color }} "></button>
            @endforeach
        </div>
        <div class="grid grid-cols-6 gap-2">
            @foreach ($icons as $icon)
                <button type="button" wire:click="selectIcon('{{ $icon }}')"
                    class="text-lg cursor-pointer hover:text-blue-500 flex items-center justify-center">
                    <i class="fas fa-{{ $icon }}"></i>
                </button>
            @endforeach
        </div>
    </div>
</div>
