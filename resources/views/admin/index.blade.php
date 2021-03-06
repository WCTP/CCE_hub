@extends ('layouts.master')


@section ('content')
  <div class="master-card">
      <span class="title">Options</span>
        <div class="flex-options-row">
          <a href="/posts/create">New Post</a>
          @if (Auth::user()->privilege == 'admin')
            <a href="/users/index">Users</a>
          @endif
          <a href="/logout">Sign Out</a>
        </div>
        @if (Auth::user()->privilege == 'admin')
          <div class="flex-options-row">
            <a href="/players/edit-list">Players</a>
            <a href="/staff/edit-list">Staff</a>
          </div>
        @endif
    </div>


    <div class="master-card">
      <span class="title">Posts</span>
        @foreach ($posts as $post)

        @include ('admin.post')

        <hr>

        @endforeach
    </div>
@endsection
