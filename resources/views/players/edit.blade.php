@extends ('layouts.master')

@section ('content')
  <!-- Post Content Column -->
  <div class="master-card">
    <span class="title">New Player</span>
    <form method="POST" action="/players/update/{{ $player->id }}">

      {{ csrf_field() }}

      <div class="flex-form-row">
        <label for="title">Game Name</label>
        <input type="text" class="form-control" id="game_name" name="game_name" value="{{ $player->game_name }}" required>
        <label for="title">Full Name</label>
        <input type="text" class="form-control" id="full_name" name="full_name" value="{{ $player->full_name }}" required>
      </div>
      <div class="flex-form-row">
        <label for="title">Team</label>
        <input type="text" class="form-control" id="team" name="team" value="{{ $player->team }}" required>
        <label for="title">Major</label>
        <input type="text" class="form-control" id="major" name="major" value="{{ $player->major }}" required>
      </div>
      <div class="flex-form-row">
        <label for="title">Hometown</label>
        <input type="text" class="form-control" id="hometown" name="hometown" value="{{ $player->hometown }}" required>
        <label for="title">Role</label>
        <input type="text" class="form-control" id="role" name="role" value="{{ $player->role }}" required>
      </div>
      <div class="flex-form-row">
        <label for="title">Main</label>
        <input type="text" class="form-control" id="main" name="main" value="{{ $player->main }}" required>
        <label for="title">Position</label>
        <input type="number" class="form-control" id="postion" name="position" value="{{ $player->position }}" required>
      </div>

      <div class="flex-form-row">
        <button type="submit">Publish</button>
      </div>

      @include ('layouts.errors')

    </form>
  </div>
@endsection
