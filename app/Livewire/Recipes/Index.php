<?php

namespace App\Livewire\Recipes;

use Livewire\Component;

use App\Models\Recipe;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search = '';

    public function updatedSearch() {
        $this->resetPage();
    }

    #[On('recipe-created')]
    #[On('recipe-updated')]
    #[On('recipe-deleted')]

    public function render()
    {
        $recipes = Recipe::when($this->search, fn ($query) => $query-> where('title', 'like', "%$this->search%"))
        ->latest()
        ->paginate(5);
        return view('livewire.recipes.index', compact(var_name: 'recipes'));
    }
}
