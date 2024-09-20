<?php

namespace App\Livewire\Recipes;

use App\Models\Recipe;
use Livewire\Component;

class Show extends Component
{
    public $recipeId;
    public $recipe;

    public function mount($recipeId)
    {
        $this->recipeId = $recipeId;
        $this->recipe = Recipe::findOrFail($recipeId);
    }

    public function render()
    {
        return view('livewire.recipes.show', [
            'recipe' => $this->recipe,
        ]);
    }
}
