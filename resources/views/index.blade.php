@if (Route::has('login'))

@auth
<li class="nav-item d-none d-sm-inline-block">
    <a class="nav-link" href="{{ url('/admin') }}">Admin</a>
  </li>
@else
<li class="nav-item d-none d-sm-inline-block">
    <a class="nav-link" href="{{ route('login') }}">Login</a>
  </li>

    @if (Route::has('register'))
    <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" href="{{ route('register') }}">Register</a>
      </li>
    @endif
@endauth
@endif
