@extends ('layouts.master')


@section ('content')
  <div class="master-card">
      <span class="title">Options</span>
        <div class="flex-options-row">
          <a href="/posts/create">New Post</a>
          <a href="#">Users</a>
          <a href="/logout">Sign Out</a>
        </div>
    </div>


    <div class="card my-4">
      <h1 class="card-header">Posts</h1>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12">
            @foreach ($posts as $post)

              @include ('admin.post')

              <hr>

            @endforeach
          </div>
        </div>
      </div>
  </div>
@endsection
