<!--
  /   Display for an individual player on the index page.
  /
  /   @included index.blade.php
  -->

<span class="title">
    {{ $member->game_name }}
</span>

<div class="flex-options-row">
  <p>Name: {{ $member->full_name }}</p>
  <p>Team: {{ $member->team }}</p>
  <p>Major: {{ $member->major }}</p>
</div>
<div class="flex-options-row">
  <p>Hometown: {{ $member->hometown }}</p>
  <p>Job: {{ $member->job }}</p>
  <p>Main: {{ $member->main }}</p>
</div>
