<?php

namespace App\Livewire;

use Livewire\Component;

class IconPicker extends Component
{
    public $selectedIcon = '';
    public $icons = [];
    public $bgColor = '#94a3b8';
    public $colors = [ // todas as cores como bg-cor-400
        '#94a3b8', // slate 
        '#f87171', // vermelho
        '#facc15', // amarelo
        '#60a5fa', // azul
        '#4ade80', // verde
        '#000000' // preto
    ];

    public function mount()
    {
        $jsonPath = storage_path('app/icons.json');
        if (file_exists($jsonPath)) {
            $json = file_get_contents($jsonPath);
            $iconsArray = json_decode($json, true);
            $this->icons = array_keys($iconsArray);
        }
    }

    public function selectIcon($icon)
    {
        $this->selectedIcon = "fas fa-" . $icon;
    }

    public function selectColor($color)
    {
        $this->bgColor = $color;
    }

    public function testequalquer()
    {
        dd("ok");
    }

    public function render()
    {
        return view('livewire.icon-picker');
    }

}
