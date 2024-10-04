<div class="p-6 bg-white rounded-lg shadow-lg max-w-2xl mx-auto">
    <h1 class="text-4xl font-bold text-center mb-4 text-gray-800">{{ $recipe->title }}</h1>

    <p class="text-gray-700 mt-2 text-lg">
        <strong>Description:</strong> {{ $recipe->description }}
    </p>

    <div class="mt-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-2">Étapes</h2>
        @foreach ($recipe->steps as $index => $step)
            <div class="bg-gray-100 p-4 mb-4 rounded-lg shadow">
                <p class="text-gray-700 font-bold">
                    Étape {{ $index + 1 }} :
                </p>
                <p class="text-gray-700 mt-1">
                    {{ $step['description'] }}
                </p>
                <p class="text-gray-500 mt-1">
                    <strong>Durée :</strong> {{ $step['duration'] }}
                </p>
            </div>
        @endforeach
    </div>
</div>
