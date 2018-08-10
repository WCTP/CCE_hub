<!-- Navigation -->
<div class="sidenav">
  <a href="/">
    <img src="{{ asset('images/CCE Logo.png') }}" class="logo">
  </a>
  <div class="link-container">
    <a href="#" class="main-link">Players</a>
  </div>
  <div class="link-container">
    <a href="#" class="main-link">Staff</a>
  </div>
  <div class="link-container">
    <a href="/calendar" class="main-link">Calendar</a>
  </div>
  <div class="link-container">
    <a href="/posts/index" class="main-link">Updates</a>
  </div>
  <div class="link-container">
    <a href="#" class="main-link">Resources</a>
  </div>
  @if (Auth::check())
    <div class="link-container">
      <a href="/admin" class="main-link">{{ Auth::user()->name }}</a>
    </div>
  @else
    <div class="link-container">
      <a href="/login" class="main-link">Sign In</a>
    </div>
  @endif

</div>
