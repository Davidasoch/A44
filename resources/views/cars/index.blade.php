@extends('layouts.master')

@section('content')
    Index Screen Cars

<div class="row">

@foreach( $arrayCars as $key => $car )
<div class="col-xs-6 col-sm-4 col-md-3 text-center">

    <a href="{{ url('/car/' . $car->id ) }}">
        <h4 style="min-height:45px;margin:5px 0 10px 0">
            {{$car->make}}
        </h4>
    </a>

</div>
@endforeach

</div>

@stop