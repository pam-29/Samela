<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\songController;
use App\Http\Controllers\singerController;

Route::get('/', function () {
    return view('home');
});

Route::get('admin', [songController::class, 'dashboard'])->name('admin');


Route::prefix('songs')->name('songs.')->group(function(){
    //create
    Route::get('create', [songController::class, 'create'])->name('create');
    Route::post('store', [songController::class, 'store'])->name('store');
    Route::get('enter', [singerController::class, 'create_singer'])->name('enter'); //recuperer le/la chanteur.euse
    Route::post('fill', [singerController::class, 'fill'])->name('fill'); //entrer le/la chanteur.euse

    //get
    Route::get('list', [songController::class, 'list_all'])->name('list');
    Route::get('show/{id}', [songController::class, 'show'])->name('show');
    Route::get('singer', [singerController::class, 'list_singer'])->name('singer');  //afficher tous.es les chanteurs.euses
    Route::get('singerlist/{id}', [singerController::class, 'show_singer'])->name('singerlist'); //afficher les chansons associées à leur chanteur
    
    //update
    Route::post('update/{id}', [songController::class, 'update'])->name('update');
    Route::get('edit/{id}', [songController::class, 'edit'])->name('edit');

    //delete
    Route::get('delete/{id}', [songController::class, 'delete'])->name('delete');
});