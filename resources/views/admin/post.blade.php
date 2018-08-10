<!--
  /   Display for an individual post on the index page.
  /
  /   @included index.blade.php
  -->

<hr>

<!-- Single Post -->
  <div class="flex-options-left">
    <a href="/posts/{{ $post->id }}">{{ $post->title }} on {{ $post->created_at->toFormattedDateString() }}</a> |
    <a href="/admin/edit/{{ $post->id }}">Edit</a> |
    <form action="/admin/delete/{{ $post->id }}" method="POST">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <button type="submit">Delete</button>
    </form>
  </div>
