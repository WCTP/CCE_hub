@extends ('layouts.master')

@section ('content')
  <!-- Huge thanks to NicEdit for the awesome text editor! -->
  <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
  <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

  <!-- Post Content Column -->
  <div class="col-lg-8">
    <!-- Title -->
    <h1 class="mt-4">Create a post.</h1>

    <hr>

    <form method="POST" action="/posts">

      {{ csrf_field() }}

      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
      </div>

      <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" id="body" name="body" rows="15" required></textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Publish</button>
      </div>

      @include ('layouts.errors')

    </form>

  </div>
  <!-- /.column -->
@endsection
