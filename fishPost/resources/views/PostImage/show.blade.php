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
      @if ($post_data != null && is_array($post_data)) {
        <form action="{{ route('posts.destroy', $post_data) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">削除</button>
        </form>
      @endif
      </div>
    </div>
  </div>
  <div id="comment-post-{{ $post_data->id }}">
    @include('parts.comment_list')
  </div>
  <div class="row">
    <div class="row actions" id="comment-form-post-{{ $post_data->id }}">
      <form class="w-100" id="new_comment" action="/posts/{{ $post_data->id }}/comments" accept-charset="UTF-8" data-remote="true" method="post">
          <input name="utf8" type="hidden" value="&#x2713;" />
          {{csrf_field()}}
          <!-- <input value="{{ Auth::user() }}" type="hidden" name="user_id" /> -->
          <input value="{{ $post_data->id }}" type="hidden" name="post_id" />
          <input class="form-control comment-input" placeholder="コメント ..." autocomplete="off" type="text" name="comment" />
          <button type="submit" class="btn btn-success">投稿</button>
      </form>
    </div>
  </div>
</div>
@endsection