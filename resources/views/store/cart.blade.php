@extends('layouts.masterCart')

@section('content')

<div class="container text_center">
<div class="page-header">
<h1><i class="fa fa-shopping-cart">Carrito de compras</h1></i>
</div>
<div class ="table-cart">
@if(count($cart))  

<p>
<a href="{{ route('cart-trash')}}" class="btn danger">
Remove cart 
</a>
</p>

    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>price</th>
        <th>Quantity</th>
        <th>Total</th>
        <th>------------</th>
    </tr>
    </thead>
</tbody>
@foreach($cart as $item)
<tr>
<td>{{$item->id}}</td>
<td>{{$item->name}}</td>
<td>{{$item->description}}</td>
<td>{{$item->price}}</td>
<td>
<input
type="number"
min="1"
max="100"
value="{{ $item->quantity }}"
id="product_{{ $item->id }}"
>

<a
    href="#"
    class="btn btn-warning btn-update-item"
    data-href="#"
    data-id = "{{ $item->id }}"
    >
    <i class="fa fa-refresh"></i>
    </a>

</td>
<td>{{number_format($item->price * $item->quantity,2)}}</td>
<td>
<a href="{{ route('cart-delete', $item->id)}}" class="btn btn-danger">Delete</a>
<i class="fa fa-remove"></i>
    </td>
    </tr>
    @endforeach
            </tbody>
        </table>
        <h3 align="right">
        <span class="label label-succes" >
        Total: {{number_format($total,2)}}
        </span>
        </h3>

    @else
    <h3-><span class="label label-warning">No hay productos en el carrito</span></h3->
    @endif
    <div align="center">
    <hr>
    <p>
    <a href="{{route('product.index')}}" class="btn btn-primary">
    <i class="fa fa-chevron-circle-left"></i> Seguir comprando
    </a>

    <a href="#" class="btn btn-primary">
    Continuar <i class="fa fa-chevron-circle-right"></i> 
    </a>
        </div>
    </div>
</div>
@stop