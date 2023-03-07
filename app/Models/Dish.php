<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;
use App\Models\Order;

class Dish extends Model
{
    use HasFactory;

    protected $guarded = ['slug'];
    protected $fillable = [];
    
    public function restaurant() {
        return $this->belongsTo(Restaurant::class);
    }

    public function orders() {
        return $this->belongsToMany(Order::class);
    }
}
