@extends ('layouts.master')

@section ('content')
  <div class="master-card">
    <span class="title">Register</span>
    <form method="POST" action="/register">
      {{ csrf_field() }}

      <div class="flex-form-row">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>

      <div class="flex-form-row">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>

      <div class="flex-form-row">
        <label for="password_confirmation">Password Confirmation:</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
      </div>

      <div class="flex-form-row">
        <label for="privilege">Privilege:</label>
        <select name="privilege" id="privilege">
          <option value="player" selected>Player</option>
          <option value="coach">Staff</option>
          <option value="admin">Admin</option>
        </select>
      </div>

      <div class="flex-form-row">
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </div>
    </form>

    @include ('layouts.errors')

  </div>
@endsection
