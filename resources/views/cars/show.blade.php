
@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <title>Car {{ $car->id }}</title>
  </head>
  <body>
    <h1>Car {{ $car->id }}</h1>
    <ul>
      <li>Make: {{ $car->make }}</li>
      <li>Model: {{ $car->model }}</li>
      <li>Produced on: {{ $car->produced_on }}</li>
    </ul>
    <a href="{{ url('/car/'.$car->id.'/edit') }}" class="btn btn-warning" role="button">Editar</a>
<form action="{{action('CarController@destroy', $car->id)}}" 
    method="POST" style="display:inline">
    <input type="hidden" name="_method" value="DELETE">
    @csrf
    <button type="submit" class="btn btn-danger" style="display:inline">
        Borrar
    </button>
</form>

<a href="{{ url('/car') }}" class="btn btn-info" role="button">Volver</a>
  </body>
</html>
@stop
