<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = DB::table('cars')->get();
        return view('cars.index',array('arrayCars'=> $cars));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $make = $request->input('make');
        $model = $request->input('model');
        $produced_on = $request->input('produced_on');

        $c = new Car;
        $c->make = $make;
        $c->model = $model;
        $c->produced_on = $produced_on;
        $c->save();
        return redirect()->action('CarController@show',$c->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        return view('cars.show', array('car' => $car));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $targetcar = Car::findOrFail($id);
        return view('cars.edit', array('car'=>$targetcar));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateDetails=array(
            'make' => $request->input('make'),
            'model' => $request->input('model'),
           'produced_on' => $request->input('produced_on')
        );
        
        DB::table('cars')
        ->where('id', $id)
        ->update($updateDetails);
        return redirect()->action('CarController@index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('cars')->where('id', '=', $id)->delete();
        return redirect()->action('CarController@index');
    }
}
