<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MainMenuController;
use App\Http\Controllers\CarritoController;

Route::get('/', [HomeController::class, 'index']);

Route::get ('/menu', [MenuController::class, 'menu']);

Route::get ('/menuP', [MainMenuController::class, 'menuP']);

Route::get ('/carrito', [CarritoController::class, 'index']);