<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Dish;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function createOrder(Dish $dish, Request $request)
    {

        $request->validate([
            'firstname' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'code' => 'required|integer',
            'price' => 'required|decimal:0,2',
            'address' => 'required|string|max:100',
            'email' => 'required|email',
            'phone_number' => 'required|string|max:20',
            'order_date' => 'required|date',
            'additional_info' => 'nullable|string',
            'dishes_Id' => 'required|exists:dishes,id',
            'dishes_Id.*' => 'required|integer',
            'tot_quantity' => 'required|array',
            'tot_quantity.*' => 'required|integer',

        ]);

        $data = $request->all();

        $new_order = new Order();
        $new_order->firstname = $data['firstname'];
        $new_order->lastname = $data['lastname'];
        $new_order->code = $data['code'];
        $new_order->price = $data['price'];
        $new_order->address = $data['address'];
        $new_order->email = $data['email'];
        $new_order->phone_number = $data['phone_number'];
        $new_order->order_date = $data['order_date'];
        $new_order->additional_info = $data['additional_info'];

        $new_order->save();

        $dishes_Id = [];
        $tot_quantity = [];
        foreach ($data['dishes_Id'] as $index => $dish) {
            $dishes_Id[] = $dish;
            $tot_quantity[] = $data['tot_quantity'][$index];
        }

        $sync_data = [];
        foreach ($dishes_Id as $index => $dish) {
            $sync_data[$dish] = ['quantity' => $tot_quantity[$index]];
        }


        $new_order->dishes()->sync($sync_data);

        // if($new_order)
        // {
        //     Mail::to('info@boolfolio.com')->send(new NewOrder($new_order));
        // }

        return $new_order;
    }
}
