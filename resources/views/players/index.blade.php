@extends ('layouts.master')


@section ('content')
  <!-- Post Content Column -->
    @foreach ($players as $player)
      <div class="master-card">
          @include ('players.player')
      </div>
    @endforeach

@endsection
