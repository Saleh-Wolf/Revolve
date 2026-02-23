<header class="header-top bg-grey justify-content-center">
  <div class="container">
    <div class="row align-items-center">

      <!-- Logo -->
      <div class="col-lg-2 text-center d-none d-lg-block">
        <a class="navbar-brand" href="{{ route('home') }}">
          <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid">
        </a>
      </div>

      <!-- Menu -->
      <div class="col-lg-8">
        <nav class="navbar navbar-expand-lg navigation-2 navigation">
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">

              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                   href="{{ route('home') }}">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                   href="{{ route('about') }}">About</a>
              </li>

              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                   href="{{ route('contact') }}">Contact</a>
              </li>

            </ul>
          </div>
        </nav>
      </div>

      <!-- Search Button -->
    <div class="col-lg-2 text-right d-none d-lg-block">
        <div class="search-toggle-btn" style="cursor:pointer;">
            <i class="ti-search"></i>
        </div>
    </div>

    </div>
  </div>
</header>