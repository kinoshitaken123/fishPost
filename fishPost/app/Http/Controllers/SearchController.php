<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CookingPost;

class SearchController extends Controller
{
    public function index(Request $request) {
        $key = $request->input('search');
        // dd($key);
        $query = CookingPost::query();

        if (!empty($key)) {
            $query->where('product_name', 'like', '%' . $key . '%')
            ->orWhere('cooking_explanation', 'like', '%' . $key . '%');
        }
        $post_data = $query->orderBy('created_at', 'desc')->paginate(10);
        // dd($post_data);
    
        return view('PostImage.index');
    }
}
