<form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
  @csrf
  <div class="col-md-7">
    <label class="form-label">料理名</label>
    <input type="text" name="product_name" class="form-control">
  </div>
  <div class="col-md-7">
    <label class="form-label">説明</label>
    <input type="text" name="cooking_explanation" class="form-control">
  </div>

  <div class="input-group mb-3">
    <input type="file" class="form-control" name="image_path" aria-label="Upload">
    <button type="submit" class="btn btn-primary btn-sm">投稿</button>
  </div>
</form>