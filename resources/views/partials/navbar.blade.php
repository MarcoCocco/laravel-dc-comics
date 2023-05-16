  <div class="container">
      <nav>
          <div class="navbar-container">
              <div class="logo">
                  <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo">
              </div>
              <div class="links">
                  <ul>
                      @foreach ($navLinks as $link)
                          <li><strong>{{ $link }}</strong></li>
                      @endforeach
                  </ul>
              </div>
              <div class="search-bar">
                  <input type="text" placeholder="Search">
              </div>
          </div>
      </nav>
  </div>
