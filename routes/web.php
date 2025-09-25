<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;

Route::get('/', function () {
    return view('home');
});


Route::prefix('categories')->name('categories.')->group(function(){
    //create
    Route::get('create', [categoryController::class, 'create'])->name('create');
    Route::post('store', [categoryController::class, 'store'])->name('store');

    //get
    Route::get('list', [categoryController::class, 'list_all'])->name('list');
    Route::get('show/{id}', [categoryController::class, 'show'])->name('show');

    //update
    Route::post('update/{id}', [categoryController::class, 'update'])->name('update');
    Route::get('edit/{id}', [categoryController::class, 'edit'])->name('edit');

    //delete
    Route::get('delete/{id}', [categoryController::class, 'delete'])->name('delete');
});