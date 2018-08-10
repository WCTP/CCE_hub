<!--
  /   Display for an individual user on the index page.
  /
  /   @included index.blade.php
  -->

<span class="title">
    {{ $user->name }}
</span>

<div class="flex-options-row">
  <h3>Email: {{ $user->email }}</h3>
  <h3>Privilege: {{ $user->privilege }}</h3>
</div>
<div class="flex-options-row">
  <a href="/users/edit/{{ $user->id }}">Edit User</a>
  <form method="POST" action="/users/reset-password/{{ $user->id }}">
    {{ csrf_field() }}
    <input type="text" id="new-password" name="new-password" placeholder="new password" required>
    <button type="submit">Reset Password</button>
  </form>
  <form action="/users/delete/{{ $user->id }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit">Delete User</button>
  </form>
</div>
