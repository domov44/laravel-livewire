<?php

namespace App\Livewire\Recipes;

use App\Models\Recipe;
use Livewire\Component;

class Create extends Component
{
    public $title;
    public $description;
    public $duration;
    public $steps = [];

    public function create()
    {
        $data = $this->validate([
            'title' => 'required',
            'description' => 'nullable|min:20',
            'steps' => 'required|array|min:1',
            'steps.*.duration' => 'required|integer|min:1',
            'steps.*.description' => 'required|string|min:5',
        ]);

        Recipe::create($data);
        $this->dispatch('recipe-created');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.recipes.create');
    }
}
