<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Recipe;

class RecipesList extends Component
{
    public function render()
    {
        $recipes = Recipe::latest()->paginate(perPage:2);
        return view('livewire.recipes-list', compact(var_name: 'recipes'));
    }
}
