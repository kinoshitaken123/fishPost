<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\CookingPost;
use Illuminate\Http\Request;
use Auth;

class CommentController extends Controller
{
    /**
     * 投稿一覧
     *
     * @return void
     */
    public function store(Request $request, $id)
    {
        $post_comment = new Comment;
        $post_comment->comment = $request->comment;
        // $post_data = $request;
        $post_comment->post_id = $request->post_id;
        // $user = Auth::user();
        // dd($user);
        // dd($post_data);
        $post_comment->save();
        return view('PostImage.show', compact('post_comment'));
    }
}
