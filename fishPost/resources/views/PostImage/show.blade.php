@extends('layouts.app')

@section('contents')
<h1>料理詳細ページ</h1>
<table class="center-block">
  <tbody>
    <tr>
      <div class="mx-auto" style="width: 500px; ">
        <img src="{{ Storage::url($post_data->image_path) }}" style="width:65%;" />
        <p>料理名:"{{ $post_data->product_name }}"</p>
        <p>説明:"{{ $post_data->cooking_explanation }}"</p>
        <a href="{{ route('posts.index') }}" class="btn btn-primary">一覧に戻る</a>
        <a href="{{ route('posts.edit', $post_data) }}" class="btn btn-success">編集</a>
      </div>
    </tr>
  </tbody>
</table>

@endsection