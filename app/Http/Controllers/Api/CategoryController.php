<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        return Category::with('restaurants')->get();
    }

    public function show($slug) {
        try {
            return Category::where('slug', $slug)->with('restaurants')->get();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response([
                'error' => '404 Category not found'
            ], 404);
        }
    }
}
