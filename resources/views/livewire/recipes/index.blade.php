 <div class="overflow-x-auto">
     <div class="flex justify-between">
         <input type="text" name="search" wire:model.live="search">
         <livewire:recipes.create />
     </div>
     <table class="min-w-full bg-gray-50 shadow-md rounded-lg border-collapse">
         <thead>
             <tr class="bg-blue-600 text-white">
                 <th class="py-3 px-4 border-b border-gray-300">Index</th>
                 <th class="py-3 px-4 border-b border-gray-300">Titre</th>
                 <th class="py-3 px-4 border-b border-gray-300">Description</th>
                 <th class="py-3 px-4 border-b border-gray-300">Créé il y a</th>
                 <th class="py-3 px-4 border-b text-center">Actions</th>
             </tr>
         </thead>
         <tbody>
             @foreach ($recipes as $index => $recipe)
                 <tr class="bg-white hover:bg-gray-100 transition duration-300 border-b" wire:key="{{ $recipe->id }}"
                     wire:key="recipe-{{ $recipe->id }}">
                     <td class="py-3 px-4 text-gray-600">{{ $index + 1 }}</td>
                     <td class="py-3 px-4 font-semibold text-gray-700">
                         <a href="{{ route('recipe.show', $recipe->id) }}" class="text-blue-500 hover:underline">
                             {{ $recipe->title }}
                         </a>
                     </td>
                     <td class="py-3 px-4 text-gray-600">{{ str($recipe->description)->words(4) }}</td>
                     <td class="py-3 px-4 text-gray-500">{{ $recipe->created_at->diffForHumans() }}</td>
                     <td class="py-3 px-4 flex gap-1 items-center justify-center">
                         <livewire:recipes.edit :recipeId="$recipe->id" wire:key="recipe-edit-{{ $recipe->id }}" />
                         <livewire:recipes.delete :recipeId="$recipe->id" wire:key="recipe-delete-{{ $recipe->id }}" />
                     </td>
                 </tr>
             @endforeach
         </tbody>
     </table>
     <div class="mt-4">
         {{ $recipes->links() }}
     </div>
 </div>
