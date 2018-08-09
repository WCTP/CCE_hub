@extends ('layouts.master')


@section ('content')
  <!-- Post Content Column -->
  <div class="col-lg-8">

    <div class="card my-4">
      <h1 class="card-header">Options</h1>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12">
            <ul class="admin-option">
              <li>
                <a href="/posts/create">New Post</a>
              </li>
              <li>
                <a href="#">HTML</a>
              </li>
              <li>
                <a href="/logout">Sign Out</a>
              </li>
            </ul>
          </div>
        </div>
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

  </div>

@endsection
