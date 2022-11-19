<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class CookingPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'cooking_explanation',
        'image_path',
    ];

    /**
     * 投稿料理全権取得
     *
     * @param Collection
     * @return collection  $cooking_post_list
     */
    public function fetchCookingPostList(): Collection 
    {
        $cooking_post_list = $this->all();
        return $cooking_post_list;
    }

    /**
     * 投稿に紐づくid取得
     *
     * @param int $id
     * @return CookingPost  $post_data
     */
    public function fetchIdAssociateInPosts($id): CookingPost 
    {
        $post_data = $this->where('id', $id)->first();
        return $post_data;
    }
}
