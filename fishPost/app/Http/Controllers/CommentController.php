<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Auth;

class CommentController extends Controller
{
    /**
     * 投稿一覧
     *
     * @return void
     */
    public function store(Request $request)
    {
        $post_data = new Comment;
        $post_data->comment = $request->comment;
        dd($post_data);
        $post_data->post_id = $request->post_id;
        $post_data->user_id = Auth::user()->id;
        $post_data->save();

        return redirect()->route('posts.index', compact('comment_post'));
    }
}
