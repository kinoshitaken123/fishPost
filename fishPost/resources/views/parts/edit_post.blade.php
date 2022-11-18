<form method="put" action="{{ route('posts.update', $post_data) }}" enctype="multipart/form-data">
  @csrf
  <div class="col-md-7">
    <label class="form-label">料理名</label>
    <input type="text" value="{{ $post_data->product_name }}" name="product_name" class="form-control">
  </div>
  <div class="col-md-7">
    <label class="form-label">説明</label>
    <input type="text" value="{{ $post_data->cooking_explanation }}" name="cooking_explanation" class="form-control">
  </div>

  <div class="input-group mb-3">
    <img src="{{ Storage::url($post_data->image_path) }}" style="width:20%;" />
    <!-- <input type="file" class="form-control" name="image_path" value="{{ Storage::url($post_data->image_path) }}" aria-label="Upload"> -->
  </div>
  <div class="input-group mb-3">
    <input type="file" class="form-control" name="image_path" aria-label="Upload">
  </div>
  <a href="{{ route('posts.index') }}" class="btn btn-primary">一覧に戻る</a>
  <a href="{{ route('posts.update', $post_data) }}" class="btn btn-success">更新</a>
</form>