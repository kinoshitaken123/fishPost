<?php

namespace App\Http\Controllers;

use App\Models\CookingPost;
use Illuminate\Http\Request;

class PostImageController extends Controller
{
    /**
     * 投稿一覧
     *
     * @return
     */
    public function index()
    {
        $post_data = CookingPost::all();

        return view('PostImage.index', compact('post_data'));
    }

    /**
     * 投稿
     *
     * @param 
     * @return void
     */
    public function store(Request $request)
    {
        // アップロードされたファイル名を取得
        $upload_image = $request->file('image_path');
        // storageへの保存
        $path = $upload_image->store('uploads', "public");

        CookingPost::create([
            "product_name" => $request->product_name,
            "cooking_explanation" => $request->cooking_explanation,
            "image_path" => $path,
        ]);

        return redirect()->route('posts.index');
    }

    /**
     *投稿詳細
     *
     * @param int $id
     * @return void
     */
    public function show($id)
    {
        $post_data = CookingPost::where('id', $id)->first();
        return view('PostImage.show', compact('post_data'));
    }

    /**
     *投稿編集
     *
     * @param  int 
     * @return void
     */
    public function edit($id)
    {
        $post_data = CookingPost::where('id', $id)->first();
        return view('PostImage.show', compact('post_data'));
    }

    /**
     * 投稿更新
     *
     * @param
     * @param  int
     * @return 
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 投稿削除
     *
     * @param  int
     * @return
     */
    public function destroy($id)
    {
        //
    }
}
