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


    <div class="master-card">
      <span class="title">Posts</span>
        @foreach ($posts as $post)

        @include ('admin.post')

        <hr>

        @endforeach
    </div>
@endsection
