<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    /********************************************CRUD IN ELOQUENT******************************************************* */    


class FlightController extends Controller
{       
    //Insertion function
    public function store(Request $request)
    {
        $flight = new Flight;
        $flight->name = $request->name;
        $flight->save();
    }
    public function delete($id){
    $flight = Flight::find($id);
    $flight->delete($id);
    }
}
