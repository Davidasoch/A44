@extends('layouts.master')

@section('content')
    Create Car Screen

    <div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Add car
         </div>
         <div class="card-body" style="padding:30px">

         <form action="/car" method="POST">

         @csrf

            <div class="form-group">
               <label for="title">Make</label>
               <input type="text" name="make" id="make" class="form-control">
            </div>

            <div class="form-group">
            <label for="title">Model</label>
            <input type="model" name="model" class="form-control">
            </div>

            <div class="form-group">
            <label for="title">Produced on</label>
            <input type="produced_on" name="produced_on" class="form-control">
            </div>
           
            <div class="form-group text-center">
               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Add car
               </button>
            </div>

        </form>

         </div>
      </div>
   </div>
</div>
@stop
