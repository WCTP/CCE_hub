<!--
  /   Display for an individual post on the index page.
  /
  /   @included index.blade.php
  -->

<!-- Title -->
<span class="title">
  <a href="/posts/{{ $post->id }}">
    {{ $post->title }}
  </a>
</span>

<!-- Author -->
<p class="lead">
  by
  <a href="#">{{ $post->user->name }}</a> on {{ $post->created_at->toFormattedDateString() }}
</p>

<hr>

<!-- Preview Image -->
<img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

<hr>

<!-- Post Content -->
{{ $post->body }}
