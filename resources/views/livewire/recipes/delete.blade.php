<button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded shadow-md"
    onclick="if (confirm('Voulez-vous vraiment supprimer cette recette ?')) { @this.call('deleteRecipe') }">
    Supprimer
</button>
