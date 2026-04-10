<ul>
  @foreach($carrito as $producto)
    <li>{{$producto['nombre']}} x{{$producto['cantidad']}} = {{number_format($producto['precio'] * $producto['cantidad'])}}</li>
  @endforeach
</ul>
  <h3>
    Total= $ {{number_format($total)}}
  </h3>

  @if($total >= 40000)
    <p>Por el valor de tu compra, te obsequiamos el envio.</p>
  @else
    <p>El valor de tu compra es muy bajo para el envio gratis.</p>
  @endif
