@extends ('layouts.master')


@section ('content')

  <div class="master-card">
    <div class="flex-options-row">
      <a href="/players/create">New Player</a>
    </div>
  </div>
  <!-- Post Content Column -->
    @foreach ($players as $player)
      <div class="master-card">
        <div class="flex-options-row">
          <span>{{ $player->full_name }} | {{ $player->game_name }} </span>
          <a href="/players/edit/{{ $player->id }}">Edit</a>
          <form action="/players/delete/{{ $player->id }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit">Delete</button>
          </form>
        </div>
      </div>
    @endforeach

@endsection
