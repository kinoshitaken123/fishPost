<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\CookingPost;

class Comment extends Model
{
    use HasFactory;

    Public function user()
    {
        return $this->belongsTo(User::class);
    }

    Public function cookingpost()
    {
        return $this->belongsTo(CookingPost::class);
    }

    /**
     * コメントに紐づくid取得
     *
     * @param Collection
     * @return collection  $cooking_post_list
     */
    public function fetchCommentList() 
    {
        $comment_list = $this->all();
        return $comment_list;
    }
}
