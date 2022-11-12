<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CookingPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'cooking_explanation',
        'image_path',
    ];
}
