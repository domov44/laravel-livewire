<?php

namespace App\Livewire\Recipes;

use App\Models\Recipe;
use Livewire\Component;

class Edit extends Component
{
    public $recipeId;
    public $title;
    public $description;
    public $steps;

    public function mount($recipeId)
    {
        $recipe = Recipe::findOrFail($recipeId);
        $this->recipeId = $recipe->id;
        $this->title = $recipe->title;
        $this->description = $recipe->description;
        $this->steps = $recipe->steps;
    }

    public function update()
    {
        $data = $this->validate([
            "title" => 'required',
            "description" => 'nullable|min:20',
            'steps' => 'required|array|min:1',
            'steps.*.duration' => 'required|integer|min:1',
            'steps.*.description' => 'required|string|min:5',
        ]);

        $recipe = Recipe::findOrFail($this->recipeId);
        $recipe->update($data);

        $this->dispatch('recipe-updated');
    }
}
