<?php

namespace App\Livewire\Recipes;

use App\Models\Recipe;
use Livewire\Component;

class Delete extends Component
{
    public $recipeId;

    public function deleteRecipe()
    {
        $recipe = Recipe::findOrFail($this->recipeId);
        $recipe->delete();
        $this->dispatch('recipe-deleted');
        $this->dispatch('toast', title: 'Recette supprimée avec succès', variant: 'success');
        $this->recipeId = null;
    }
}
