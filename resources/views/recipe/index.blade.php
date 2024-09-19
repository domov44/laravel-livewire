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

        <!-- Table des recettes -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-gray-50 shadow-md rounded-lg border-collapse">
                <thead>
                    <tr class="bg-blue-600 text-white">
                        <th class="py-3 px-4 border-b border-gray-300">Titre</th>
                        <th class="py-3 px-4 border-b border-gray-300">Description</th>
                        <th class="py-3 px-4 border-b border-gray-300">Durée</th>
                        <th class="py-3 px-4 border-b border-gray-300">Créé il y a</th>
                        {{-- <th class="py-3 px-4 border-b text-center">Actions</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recipes as $recipe)
                        <tr class="bg-white hover:bg-gray-100 transition duration-300 border-b">
                            <td class="py-3 px-4 font-semibold text-gray-700">{{ $recipe->title }}</td>
                            <td class="py-3 px-4 text-gray-600">{{ str($recipe->description)->words(4) }}</td>
                            <td class="py-3 px-4 text-gray-600">{{ $recipe->duration }} minutes</td>
                            <td class="py-3 px-4 text-gray-500">{{ $recipe->created_at->diffForHumans() }}</td>
                            {{-- <td class="py-3 px-4 text-center">
                                <a href="{{ route('recipes.edit', $recipe->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-2 rounded shadow-md">
                                    Modifier
                                </a>
                                <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded shadow-md" onclick="return confirm('Voulez-vous vraiment supprimer cette recette ?')">
                                        Supprimer
                                    </button>
                                </form>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $recipes->links() }}
            </div>
        </div>
    </div>
</x-layout>
