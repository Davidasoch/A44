@extends('layouts.masterCart')

@section('content')
<h2 align="center">Products</h2>

<div class="row">

@foreach( $arrayProducts as $key => $product )
<div class="col-xs-6 col-sm-4 col-md-3 text-center">

    <a href="{{ route('product.show',  ['$id' => $product->id]) }}">
        <h4 style="min-height:45px;margin:5px 0 10px 0">
            {{$product->name}}
        </h4>
    </a>

</div>
@endforeach

</div>

@stop