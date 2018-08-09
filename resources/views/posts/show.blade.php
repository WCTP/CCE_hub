@extends ('layouts.master')


@section ('content')
  <div class="master-card">
    <!-- Title -->
    <span class="title">{{ $post->title }}</span>

    <!-- Author -->
    <p class="lead">
      by
      <a href="#">{{ $post->user->name }}</a> on {{ $post->created_at->toFormattedDateString() }}
    </p>

    <hr>

    <!-- Post Content -->
    {{ $post->body }}
  </div>

  <div class="master-card">

    <!-- Comments Form -->
    <span class="title">Leave a Comment:</span>
    <form method="POST" action="/posts/{{ $post->id }}/comments">
      {{ csrf_field() }}
      <div class="form-group">
        <textarea class="form-control" rows="3" id="body" name="body" required></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>

    @include ('layouts.errors')
  </div>

  <div class="master-card">
    <!-- Single Comment -->
    @foreach ($post->comments as $comment)
      <div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
        <div class="media-body">
          <h5 class="mt-0">Commenter Name</h5>
          <strong>
            {{ $comment->created_at->diffForHumans() }}
          </strong>
          {{ $comment->body }}
        </div>
      </div>
    @endforeach

  </div>
  <!-- /.column -->

@endsection
