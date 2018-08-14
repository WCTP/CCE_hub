@extends ('layouts.master')


@section ('content')
  <!-- Post Content Column -->
    @foreach ($staff as $member)
      <div class="master-card">
          @include ('staff.member')
      </div>
    @endforeach

@endsection
