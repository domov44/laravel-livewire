<?php

namespace App\Livewire\Recipes;

use App\Models\Recipe;
use Livewire\Component;

class Edit extends Component
{
    public $recipeId;
    public $title;
    public $description;
    public $duration;

    public function mount($recipeId)
    {
        $recipe = Recipe::findOrFail($recipeId);
        $this->recipeId = $recipe->id;
        $this->title = $recipe->title;
        $this->description = $recipe->description;
        $this->duration = $recipe->duration;
    }

    public function update()
    {
        $data = $this->validate([
            "title" => 'required',
            "description" => 'nullable|min:20',
            "duration" => 'nullable|integer|min:1|max:999',
        ]);

        $recipe = Recipe::findOrFail($this->recipeId);
        $recipe->update($data);

        $this->dispatch('recipe-updated');
    }
}
