@extends ('layouts.master')


@section ('content')
  <div class="master-card">
    <span class="title">EDITING USER</span>

    <form method="POST" action="/users/update/{{ $user->id }}">

      {{ csrf_field() }}

      <div class="flex-form-row">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}" required>
      </div>
      <div class="flex-form-row">
        <label for="name">Email:</label>
        <input type="text" id="email" name="email" value="{{ $user->email }}" required>
      </div>
      <div class="flex-form-row">
        <label for="name">Privilege:</label>
        <input type="text" id="privilege" name="privilege" value="{{ $user->privilege }}" required>
      </div>

      <div class="flex-form-row">
        <button type="submit">Update</button>
      </div>

      @include ('layouts.errors')

    </form>

  </div>

@endsection
