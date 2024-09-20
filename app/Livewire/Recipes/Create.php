<?php

namespace App\Livewire\Recipes;

use App\Models\Recipe;
use Livewire\Component;

class Create extends Component
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

        $this->dispatch('recipe-created');
        $this->reset();
    }
}
