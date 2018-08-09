@extends ('layouts.master')


@section ('content')
  <!-- Post Content Column -->
  <div class="col-lg-8">

    <!-- Title -->
    <h1 class="mt-4">{{ $post->title }}</h1>

    <!-- Author -->
    <p class="lead">
      by
      <a href="#">{{ $post->user->name }}</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p>{{ $post->created_at->toFormattedDateString() }}</p>

    <hr>

    <!-- Preview Image -->
    <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

    <hr>

    <!-- Post Content -->
    {{ $post->body }}

    <hr>

    <!-- Comments Form -->
    <div class="card my-4">
      <h5 class="card-header">Leave a Comment:</h5>
      <div class="card-body">
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
    </div>

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
