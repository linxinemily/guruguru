<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drinks = Drink::all();
        // dd($drinks);
        return view('drinks.drinks', compact('drinks'));
    }

    public function create()
    {
        return view('drinks.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'shop_id' => 'required',
        ], [ 'name.required' => 'fsdfasdfafsafs' ]);

        $drink = new Drink;
        $drink->name = $data['name'];
        $drink->price = $data['price'];
        $drink->shop_id = $data['shop_id'];
        $drink->save();

        return redirect('/drinks');

    }

    public function show(Drink $drink)
    {
        return view('drinks.show', [
            'drink' => $drink
        ]);
    }


    public function edit(Drink $drink)
    {
        return view('drinks.edit', [
            'drink' => $drink
        ]);
    }

    public function update(Request $request, Drink $drink)
    {
      
        $data = $request->all();


        $drink->drinkName = $data['drinkName'];
        $drink->drinkPrice = $data['drinkPrice'];
        $drink->save();
 
  
        return redirect('/drinks');
    }

    public function destroy(Drink $drink)
    {
        $drink->delete();

        return redirect('/drinks');
    }


    
}
