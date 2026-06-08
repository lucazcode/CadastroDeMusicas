<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicaController;

Route::get('/', function () {
    return redirect()->route('musicas.index');
});

Route::resource('musicas', MusicaController::class);
