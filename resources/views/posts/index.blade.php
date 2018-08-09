@extends ('layouts.master')


@section ('content')
  <!-- Post Content Column -->
    @foreach ($posts as $post)
      <div class="master-card">
          @include ('posts.post')
      </div>
    @endforeach

@endsection
