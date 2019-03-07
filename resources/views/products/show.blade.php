
@extends('layouts.masterCart')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <title>Product {{ $product->id }}</title>
  </head>
  <body>
    <h1>Product {{ $product->id }}</h1>
    <ul>
      <li>Name: {{ $product->name }}</li>
      <li>Description: {{ $product->description }}</li>
      <li>Price: {{ $product->price }}</li>
      <li>Quantity: {{ $product->quantity }}</li>
    </ul>

<a href="{{ route('cart-add', $product->id) }}" class="btn btn-success" role="button">Añadir al carrito</a>
<a href="{{ url('/product') }}" class="btn btn-info" role="button">Volver</a>
  </body>
</html>
@stop
