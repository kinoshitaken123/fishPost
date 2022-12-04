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
    public function store(Request $request, $id)
    {
        $post_comment = new Comment;
        $post_comment->comment = $request->comment;
        $post_comment->post_id = $request->post_id;
        $post_comment->save();


        return redirect()->route('posts.index');
        
    }
}
