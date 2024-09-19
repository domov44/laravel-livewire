 <div class="mb-4" x-data="{ open: false }" x-on:click.away="open = false">
     <a x-on:click.prevent="open = ! open" href="#"
         class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded shadow-md transition duration-300">
         Ajouter une nouvelle recette
     </a>
     <dialog :open="open" class="bg-white rounded-lg shadow-lg p-6 w-full max-w-3xl mx-auto">
         <h2 class="text-2xl font-bold mb-6 text-center">Créer une Recette</h2>
         <form class="space-y-6" wire:submit="create">
             @csrf
             <div>
                 <label for="title" class="block text-sm font-medium text-gray-700">Nom de la recette</label>
                 <input type="text" id="title" value="{{ old('title') }}"
                     class="mt-1 block w-full px-3 py-2 border @error('title') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                     placeholder="Ex: Gâteau au chocolat" wire:model="title">
                 @error('title')
                     <div class="mt-1 text-sm text-red-600 bg-red-100 p-2 rounded-md">
                         {{ $message }}
                     </div>
                 @enderror
             </div>
             <div>
                 <label for="duration" class="block text-sm font-medium text-gray-700">Durée (en minutes)</label>
                 <input type="number" id="duration" value="{{ old('duration') }}"
                     class="mt-1 block w-full px-3 py-2 border @error('duration') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                     placeholder="Ex: 45" wire:model="duration">
                 @error('duration')
                     <div class="mt-1 text-sm text-red-600 bg-red-100 p-2 rounded-md">
                         {{ $message }}
                     </div>
                 @enderror
             </div>
             <div>
                 <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                 <textarea id="description" cols="30" rows="4" value="{{ old('description') }}"
                     class="mt-1 block w-full px-3 py-2 border @error('description') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                     placeholder="Description de la recette" wire:model="description"></textarea>
                 @error('description')
                     <div class="mt-1 text-sm text-red-600 bg-red-100 p-2 rounded-md">
                         {{ $message }}
                     </div>
                 @enderror
             </div>
             <div>
                 <button type="submit"
                     class="w-full inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                     Envoyer
                 </button>
             </div>
         </form>
     </dialog>

 </div>
