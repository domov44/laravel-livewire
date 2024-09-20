<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Recipe;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class RecipesList extends Component
{
    use WithPagination;
    public $search = '';

    public function updatedSearch() {
        $this->resetPage();
    }

    #[On('recipe-created')]

    public function render()
    {
        $recipes = Recipe::when($this->search, fn ($query) => $query-> where('title', 'like', "%$this->search%"))
        ->latest()
        ->paginate(5);
        return view('livewire.recipes-list', compact(var_name: 'recipes'));
    }
}
