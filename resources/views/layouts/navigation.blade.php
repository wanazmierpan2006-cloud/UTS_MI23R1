<nav class="nav-container">
    <div class="nav-brand">POLGAN</div>
    <ul class="nav-links">
        <li><a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ url('/gallery') }}" class="nav-link {{ request()->is('gallery') ? 'active' : '' }}">Gallery</a></li>
        <li><a href="{{ url('/about') }}" class="nav-link {{ request()->is('about') ? 'active' : '' }}">About</a></li>
    </ul>
</nav>
