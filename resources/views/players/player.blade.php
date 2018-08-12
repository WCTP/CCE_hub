<!--
  /   Display for an individual player on the index page.
  /
  /   @included index.blade.php
  -->

<span class="title">
    {{ $player->game_name }}
</span>

<div class="flex-options-row">
  <p>Name: {{ $player->full_name }}</p>
  <p>Team: {{ $player->team }}</p>
  <p>Major: {{ $player->major }}</p>
</div>
<div class="flex-options-row">
  <p>Hometown: {{ $player->hometown }}</p>
  <p>Role: {{ $player->role }}</p>
  <p>Main: {{ $player->main }}</p>
</div>
