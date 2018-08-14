@extends ('layouts.master')


@section ('content')

  <div class="master-card">
    <div class="flex-options-row">
      <a href="/staff/create">New Staff Member</a>
    </div>
  </div>
  <!-- Post Content Column -->
    @foreach ($staff as $member)
      <div class="master-card">
        <div class="flex-options-row">
          <span>{{ $member->full_name }} | {{ $member->game_name }} </span>
          <a href="/players/edit/{{ $member->id }}">Edit</a>
          <form action="/staff/delete/{{ $member->id }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit">Delete</button>
          </form>
        </div>
      </div>
    @endforeach

@endsection
