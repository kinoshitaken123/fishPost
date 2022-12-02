<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CookingPost;

class SearchController extends Controller
{
    $key = $request->input('search');
    $query = CookingPost::query();

    if (!empty($key)) {
        $query->where('product_name', 'like', '%' . $key . '%')
        ->orWhere('explanation', 'like', '%' . $key . '%');
    }
    $posts = $query->orderBy('created_at', 'desc')->paginate(10);

    return view('posts.index', compact('posts'));
}
