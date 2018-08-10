@extends ('layouts.master')

@section ('content')
  <!-- Post Content Column -->
  <div class="master-card">
    <!-- Title -->
    <span class="title">Edit Post</span>

    <form method="POST" action="/admin/update/{{ $post->id }}">

      {{ csrf_field() }}

      <div class="flex-form-row">
        <label for="title">Title</label>
      </div>

      <div class="flex-form-row">
        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
      </div>

      <div class="flex-form-row">
        <label for="body">Body</label>
      </div>

      <textarea class="form-control" id="body" name="body" rows="15" required>{{ $post->body }}</textarea>

      <div class="flex-form-row">
        <button type="submit">Update</button>
      </div>

      @include ('layouts.errors')

    </form>
  </div>
@endsection
