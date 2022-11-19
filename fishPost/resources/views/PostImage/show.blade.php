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
<div class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-8">
        <form action="{{ route('posts.destroy', $post_data) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">削除</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection