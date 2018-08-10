@extends ('layouts.master')


@section ('content')
  <!-- Post Content Column -->
    @foreach ($users as $user)
      <div class="master-card">
          @include ('users.user')
      </div>
    @endforeach

@endsection
