<div class="p-6 bg-white rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold mb-4">{{ $recipe->title }}</h1>

    <p class="text-gray-700">
        <strong>Durée:</strong> {{ $recipe->duration }} minutes
    </p>

    <p class="text-gray-700 mt-2">
        <strong>Description:</strong> {{ $recipe->description }}
    </p>
</div>
