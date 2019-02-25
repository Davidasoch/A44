@extends('layouts.master')

@section('content')
    Editing car with id: 
    <?php
    echo $car->id;
?>

<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Modify Car
         </div>
         <div class="card-body" style="padding:30px">

         <form action="/car/{{$car->id}}" method="POST">
         <input type="hidden" name="_method" value="PUT">

         @csrf

            <div class="form-group">
               <label for="title">Make</label>
               <input type="text" name="make" id="make" class="form-control" value="{{$car->make}}">
            </div>

            <div class="form-group">
            <label for="title">Model</label>
            <input type="text" name="model" class="form-control" value="{{$car->model}}" >
            </div>

            <div class="form-group">
            <label for="title">Produced on</label>
            <input type="date" name="produced_on" class="form-control" value="{{$car->produced_on}}">
            </div>
           
            <div class="form-group text-center">
               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Modify Car
               </button>
            </div>
        </form>

         </div>
      </div>
   </div>
</div>
@stop



