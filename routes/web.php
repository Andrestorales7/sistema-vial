<?php

use App\Http\Controllers\IncidenciaController;
use Illuminate\Support\Facades\Route;

Route::resource('incidencias', IncidenciaController::class);