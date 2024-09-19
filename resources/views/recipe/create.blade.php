<x-layout>
    <div class="max-w-lg mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold mb-6 text-center">Créer une Recette</h1>
        <form action="{{ route('recipe.store') }}" method="POST" class="space-y-6">
            @csrf
            <!-- Nom de la recette -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Nom de la recette</label>
                <input type="text" name="title" id="title" value="{{old("title")}}"
                    class="mt-1 block w-full px-3 py-2 border @error('title') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Ex: Gâteau au chocolat">
                @error('title')
                    <div class="mt-1 text-sm text-red-600 bg-red-100 p-2 rounded-md">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Durée de préparation -->
            <div>
                <label for="duration" class="block text-sm font-medium text-gray-700">Durée (en minutes)</label>
                <input type="number" name="duration" id="duration" value="{{old("duration")}}"
                    class="mt-1 block w-full px-3 py-2 border @error('duration') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Ex: 45">
                @error('duration')
                    <div class="mt-1 text-sm text-red-600 bg-red-100 p-2 rounded-md">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" cols="30" rows="4" value="{{old("description")}}"
                    class="mt-1 block w-full px-3 py-2 border @error('description') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Description de la recette"></textarea>
                @error('description')
                    <div class="mt-1 text-sm text-red-600 bg-red-100 p-2 rounded-md">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Bouton de soumission -->
            <div>
                <button type="submit"
                    class="w-full inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Envoyer
                </button>
            </div>
        </form>
    </div>
</x-layout>
