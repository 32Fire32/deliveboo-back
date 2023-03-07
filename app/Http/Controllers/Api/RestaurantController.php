<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(Request $request){

        $query = $request->query('query');
        
        $restaurants = Restaurant::with('categories')->where('slug', 'like', "%$query%")->get();
        // $restaurants = Restaurant::with('user', 'dishes', 'categories')->get();

        return $restaurants;
    }

    public function show($slug)
    {
        try {
            $restaurant = Restaurant::where('slug', $slug)->with('user', 'dishes', 'categories')->firstOrFail();
            return $restaurant;
            
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response([
                'error' => '404 restaurant not found'
            ], 404);
        }
    }
}
