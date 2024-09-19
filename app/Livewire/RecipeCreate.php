<?php

namespace App\Livewire;

use App\Models\Recipe;
use Livewire\Component;

class RecipeCreate extends Component
{

    public $title;
    public $description;
    public $duration;

    public function create()
    {
        $data = $this->validate([
            "title" => 'required',
            "description" => 'nullable|min:20',
            "duration" => 'nullable|integer|min:1|max:999',
        ]);

        Recipe::create(attributes: $data);
    }

    public function render()
    {
        return view('livewire.recipe-create');
    }
}
