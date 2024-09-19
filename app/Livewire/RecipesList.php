<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Recipe;
use Livewire\WithPagination;

class RecipesList extends Component
{
    public $search = '';

    public function updatedSearch() {
        $this->resetPage();
    }

    use WithPagination;
    public function render()
    {
        $recipes = Recipe::when($this->search, fn ($query) => $query-> where('title', 'like', "%$this->search%"))
        ->latest()
        ->paginate(2);
        return view('livewire.recipes-list', compact(var_name: 'recipes'));
    }
}
