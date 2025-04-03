<div>
    <h3>Selecione um Ícone</h3>

    <div style="display: flex; flex-wrap: wrap; gap: 10px;">
        @foreach ($icons as $icon)
            <button wire:click="selectIcon('{{ $icon }}')" class="icon-button">
                <i class="fas fa-{{ $icon }}"></i>
            </button>
        @endforeach
    </div>

    <div style="margin-top: 20px;">
        @if ($selectedIcon)
            <h4>Ícone Selecionado:</h4>
            <i class="fas fa-{{ $selectedIcon }}" style="font-size: 32px;"></i>
        @endif
    </div>
</div>
