@extends('layouts.master')

@section('content')
  <div class="master-card">
    <!-- Title -->
    <span class="title">Sign In</span>
      <form method="POST" action="/login">
        {{ csrf_field() }}
        <div class="flex-form-row">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" required>
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="flex-form-row">
          <button type="submit" class="btn btn-primary">Sign In</button>
        </div>
      </form>

      @include ('layouts.errors')
      <h3 class="mt-4">Don't have an account? Register <a href="/register">here</a>!</h1>
  </div>

@endsection
