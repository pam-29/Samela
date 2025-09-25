<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;

    Route::get('list', [categoryController::class, 'list_all'])->name('list');