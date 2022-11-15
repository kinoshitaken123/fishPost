  @extends('layouts.app')

  @section('contents')
  <h1>料理投稿</h1>
  {{-- 画像投稿 --}}
  @include('parts.post')

  <h1>商品一覧</h1>
  @forelse ($post_data as $value)
  <div class="card" style="width: 18rem; display: inline-block;">
    <img src="{{ Storage::url($value->image_path) }}" class="col-auto" style="width:100%;" />
    <a href="{{ route('posts.show', $value->id) }}">詳細</a>
    <p class=" col-auto">{{ $value->product_name }}</p>
    <p class="col-auto">{{ $value->cooking_explanation }}</p>
  </div>
  @empty
  {{ config('const.index.NO_DISPLAY') }}
  @endforelse

  @endsection