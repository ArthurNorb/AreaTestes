<?php

namespace App\Livewire;

use Livewire\Component;

class IconPicker extends Component
{
    public $selectedIcon = '';
    public $icons = [];

    public function mount()
    {
        // Lê o arquivo JSON e transforma em array
        $jsonPath = storage_path('app/icons.json');
        if (file_exists($jsonPath)) {
            $json = file_get_contents($jsonPath);
            $iconsArray = json_decode($json, true);
            $this->icons = array_keys($iconsArray); // Pegamos só os nomes dos ícones
        }
    }

    public function render()
    {
        return view('livewire.icon-picker');
    }

    public function selectIcon($icon)
    {
        $this->selectedIcon = $icon;
    }
}
