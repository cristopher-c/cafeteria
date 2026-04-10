@php
$productos = ['Cafe', 'Te', 'Chocolate'];
@endphp

@foreach($productos as $producto)
  <p>{{$producto}}</p>
@endforeach