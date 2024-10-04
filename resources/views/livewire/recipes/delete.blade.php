<button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full shadow-md flex items-center"
    wire:click="deleteRecipe"
    wire:confirm.prompt="Are you sure?\n\nType DELETE to confirm|DELETE">
    <i class="fas fa-trash-alt"></i>
</button>
