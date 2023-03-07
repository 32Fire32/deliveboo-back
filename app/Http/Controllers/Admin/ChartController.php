<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
{
    $user = Auth::user();
    $restaurant = Restaurant::where('user_id', $user->id)->first();

    $orders = Order::whereHas('dishes', function ($query) use ($restaurant) {
        $query->where('dishes.restaurant_id', $restaurant->id);
    })->with('dishes')->get();
 
        $data = $orders->values();

    return view('admin.chart', compact('data'));
}
}
