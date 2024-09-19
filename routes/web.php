<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::resource('recipe', controller: RecipeController::class);
