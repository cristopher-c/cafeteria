<ul>
  @foreach($productos as $producto)
    <li>{{$producto['nombre']}} - ${{$producto['precio']}} @if($producto['precio'] >= 3000) <span>Producto Premium</span>@endif </li>
  @endforeach
</ul>

