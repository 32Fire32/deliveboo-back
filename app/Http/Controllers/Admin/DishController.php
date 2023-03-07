<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreDishRequest;
use App\Http\Requests\UpdateDishRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;




use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $user = Auth::user();
        $restaurant = Restaurant::where('user_id', $user->id)->first();

        $dishes = Dish::where('restaurant_id', $restaurant->id)->get();
        return view('admin.dishes.index', compact('dishes','user','restaurant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDishRequest $request)
    {
        $data = $request->validated();

        $user = Auth::user();
        $restaurant = Restaurant::where('user_id', $user->id)->first();

        $new_dish = new Dish();

        $new_dish->fill($data);

        $new_dish->restaurant_id = $restaurant->id; 
        $new_dish->slug = Str::slug($new_dish->name);

        if ( isset($data['img']) ) {
            $new_dish->img = Storage::disk('public')->put('uploads', $data['img']);
        }
        $new_dish->save();

        return redirect()->route('admin.dishes.index')->with('message', "Il piatto $new_dish->name è stato creato con successo!");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        $user = Auth::user();
        $restaurant = Restaurant::where('user_id', $user->id)->first();
        $dishes = Dish::where('restaurant_id', $restaurant->id)->get();
        return view('admin.dishes.edit', compact('dish', 'dishes', 'user', 'restaurant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDishRequest $request, Dish $dish)
    {
        $data = $request->validated();

        $user = Auth::user();
        $restaurant = Restaurant::where('user_id', $user->id)->first();

        // $dish->restaurant_id = $restaurant->id; 
        $dish->slug = Str::slug($dish->name);

        if(isset($data['img'])){
            if($dish->img){
              Storage::disk('public')->delete($dish->img);
            }
            $dish->img = Storage::disk('public')->put('uploads', $data['img']);
        }

        if(isset($data['no_image']) && $dish->img){
            Storage::disk('public')->delete($dish->img);
            $dish->img = null;
        }

        $dish->update($data);

        return redirect()->route('admin.dishes.index')->with('message', "Il piatto $dish->name è stato modificato con successo!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {

        if($dish->img){
            Storage::disk('public')->delete($dish->img);
        }

        $dish->delete();

        return redirect()->route('admin.dishes.index')->with('message', "Il piatto $dish->name è stato cancellato con successo!");

    }
}
