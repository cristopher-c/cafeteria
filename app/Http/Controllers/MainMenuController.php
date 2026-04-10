<?php

namespace App\Http\Controllers;

class MainMenuController {
  public function menuP(){
    $productos = [
    ["nombre" => "Cafe", "precio" => 2500],
    ["nombre" => "Pan", "precio" => 1000],
    ["nombre" => "Huevos", "precio" => 2000],
    ["nombre" => "Gaseosa", "precio" => 5000]
    ];

    return view ('menuP', compact('productos'));
  }
}