<?php

namespace App\Http\Controllers;

class CarritoController {
  public function index(){
    $carrito = [
      ["nombre" => "Cafe", "precio" => 2500, "cantidad" => 2],
      ["nombre" => "Pan", "precio" => 1000, "cantidad" => 4],
      ["nombre" => "Huevos", "precio" => 2000, "cantidad" => 2],
      ["nombre" => "Gaseosa", "precio" => 5000, "cantidad" => 6]
    ];

    $total = 0;

    foreach($carrito as $producto){
      $total += $producto['cantidad'] * $producto['precio'];
    }

    return view('carrito', compact('total', 'carrito'));
  }
}