<?php

namespace App\Livewire;

use Livewire\Component;

class IconPicker extends Component
{
    public $selectedIcon = '';
    public $icons = [];

    public function mount()
    {
        $jsonPath = storage_path('app/icons.json');
        if (file_exists($jsonPath)) {
            $json = file_get_contents($jsonPath);
            $iconsArray = json_decode($json, true);
            $this->icons = array_keys($iconsArray);
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
