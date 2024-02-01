<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index() {

       $cars = Car::all();

       return view('new.index', ['cars' => $cars]);
    }

    public function create() {
        return view('new.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate
        ([
            'name' => 'required',
            'price' => 'required|numeric',
            'model' => 'required',
            'description' => 'nullable'
            
        ]);

        $newcars = Car::create($data);

        return redirect(route("new.index"));

    }

    public function edit(car $car) 
    {         
        return view('new.edit', ['car' => $car]);
    }

    public function update(Request $request,Car $car) 
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'model' => 'required',
            'description' => 'nullable'
            
        ]);

        $car->update($data);

        return redirect(route('new.index'));
    }

    public function delete(Car $car)
    {

        $car->delete();

        return redirect(route('new.index'));
    }

    public function add(Request $request) 
    {
        
        return redirect(route('new.add'));
    }

} 
 