<!--
  /   Display for an individual post on the index page.
  /
  /   @included index.blade.php
  -->

<hr>

<!-- Single Post -->
<p class="lead">
  <a href="/posts/{{ $post->id }}">
    {{ $post->title }}
  </a>
  on {{ $post->created_at->toFormattedDateString() }}
</p>
<p>
  <a href="/admin/edit/{{ $post->id }}">Edit</a> |
  <a href="/admin/delete/{{ $post->id }}">Delete</a>
</p>
