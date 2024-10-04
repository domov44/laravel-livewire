<button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full shadow-md flex items-center"
    onclick="if (confirm('Voulez-vous vraiment supprimer cette recette ?')) { @this.call('deleteRecipe') }">
    <i class="fas fa-trash-alt"></i>
</button>
