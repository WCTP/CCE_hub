<!--
  /   Display for an individual post on the index page.
  /
  /   @included index.blade.php
  -->

<hr>

<!-- Single Post -->
<p>
  <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
  on {{ $post->created_at->toFormattedDateString() }}
  <a href="/admin/edit/{{ $post->id }}">Edit</a> |
  <a href="/admin/delete/{{ $post->id }}">Delete</a>
</p>
