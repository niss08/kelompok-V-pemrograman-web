<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
      <!-- Logo dan Brand -->
      <img src="{{ asset('img/logo-removebg-preview.png') }}" alt="Logo STT Cipasung" width="55" height="55">
      <a class="navbar-brand" href="#">STT Cipasung <span style="display: block; font-size: small;">Higher Education For All</span></a>
  
      <!-- Button Toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <!-- Menu -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- Link Menu -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/PROFILE/">Profile</a>
          </li>
  
          <!-- Dropdown Fasilitas -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownFasilitas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Fasilitas
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownFasilitas">
              <li><a class="dropdown-item" href="/Masjid/">Masjid</a></li>
              <li><a class="dropdown-item" href="/Perpustakaan/">Perpustakaan</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/Kantin/">Kantin</a></li>
            </ul>
          </li>
  
          <!-- Dropdown Layanan -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLayanan" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Layanan
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownLayanan">
              <li><a class="dropdown-item" href="/Informasi Pmb/">Layanan PMB</a></li>
              <li><a class="dropdown-item" href="#">Hubungi Kami</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>  