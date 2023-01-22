<header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{ asset('assets/img/turgut.jpg') }}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Turgut Salgın</a></h1>
        <div class="social-links mt-3 text-center">
          <a target="_blank" href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a target="_blank" href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a target="_blank" href="https://www.instagram.com/turgutsalgin/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a target="_blank" href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a target="_blank" href="https://www.linkedin.com/in/turgut-salgin-4b8a211a4/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <select class="mt-2 changeLang" data-width="fit">
        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }} data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
        <option value="tr" {{ session()->get('locale') == 'tr' ? 'selected' : '' }}  data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Türkçe</option>
        <option value="pl" {{ session()->get('locale') == 'pl' ? 'selected' : '' }}  data-content='<span class="flag-icon flag-icon-mx"></span> Polski'>Polski</option>
        <option value="de" {{ session()->get('locale') == 'de' ? 'selected' : '' }}  data-content='<span class="flag-icon flag-icon-mx"></span> Deutsch'>Deutsch</option>
        <option value="es" {{ session()->get('locale') == 'es' ? 'selected' : '' }}  data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Español</option>
        
    </select>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>{{ __('index.homepage') }}</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>{{ __('index.about') }}</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>{{ __('index.resume') }}</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>{{ __('index.portfolio') }}</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>{{ __('index.services') }}</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>{{ __('index.contact') }}</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->