<x-layout>
    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-extrabold text-gray-800 mb-6">Les recettes</h1>

        <!-- Bouton Ajouter -->
        <div class="mb-4">
            <a href="{{ route('recipe.create') }}"
                class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded shadow-md transition duration-300">
                Ajouter une nouvelle recette
            </a>
        </div>
       <livewire:recipes-list />
    </div>
</x-layout>
