@foreach($comment_list as $post_comment)
    <div class="mb-2">
      {{ $post_comment->comment }}
    </div>
@endforeach