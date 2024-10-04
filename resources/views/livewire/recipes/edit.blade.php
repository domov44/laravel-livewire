<div class="flex items-center" x-data="{ isOpen: {} }" x-on:recipe-updated="$refs.editmodal.hidePopover()">
    <button x-on:click.prevent="$refs.editmodal.showPopover()"
        class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-2 rounded-full shadow-md">
        <i class="fas fa-edit"></i>
</button>
    <div popover x-ref="editmodal"
        class="bg-white rounded-lg shadow-lg p-6 w-full max-w-3xl mx-auto backdrop:bg-slate-500/20">
        <h2 class="text-2xl font-bold mb-6 text-center">Modifier la recette</h2>
        <form class="space-y-6" wire:submit.prevent="update">
            @csrf
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Nom de la recette</label>
                <input type="text" id="title"
                    class="mt-1 block w-full px-3 py-2 border @error('title') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Ex: Gâteau au chocolat" wire:model="title">
                @error('title')
                    <div class="mt-1 text-sm text-red-600 bg-red-100 p-2 rounded-md">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" cols="30" rows="4"
                    class="mt-1 block w-full px-3 py-2 border @error('description') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Description de la recette" wire:model="description"></textarea>
                @error('description')
                    <div class="mt-1 text-sm text-red-600 bg-red-100 p-2 rounded-md">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <template x-for="(step, index) in $wire.steps" :key="index">
                <div class="border border-gray-300 rounded-lg shadow-sm">
                    <div class="bg-gray-100 px-4 py-2 cursor-pointer" x-on:click="isOpen[index] = !isOpen[index]">
                        <h3 class="text-lg font-medium">Étape <span x-text="index + 1"></span></h3>
                    </div>
                    <div x-show="isOpen[index]" class="px-4 py-3 space-y-4">
                        <div>
                            <label for="step-duration" class="block text-sm font-medium text-gray-700">Durée
                                (minutes)</label>
                            <input type="number" x-model="step.duration"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="Ex: 15">
                        </div>

                        <div>
                            <label for="step-description" class="block text-sm font-medium text-gray-700">Description
                                de l'étape</label>
                            <textarea x-model="step.description" cols="30" rows="4"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                placeholder="Ex: Mélanger les ingrédients"></textarea>
                            <button type="button" class="mt-2 text-red-500 hover:underline"
                                x-on:click="$wire.steps.splice(index, 1)">
                                Supprimer cette étape
                            </button>
                        </div>
                    </div>
                </div>
            </template>
            <div class="flex justify-end">
                <div class="flex space-x-4">
                    <button type="submit"
                        class="w-full inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Valider
                    </button>
                    <button type="button" x-on:click="$refs.editmodal.hidePopover()"
                        class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Annuler
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
