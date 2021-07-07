<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="{{ asset('img/jmb.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <link href="{{ asset('css/style.css')}}" rel="stylesheet">

</head>

<body>

  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/" class="logo"><img src="{{asset ('img/logo.png') }}" alt="" class="img-fluid"></a></h1>


      <nav id="navbar" class="navbar">
        <ul>
          
          <li><a class="nav-link scrollto active" href="/">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">Acerca</a></li>
          <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
          @guest
          <li><a class="nav-link scrollto" href="{{ route('home') }}">Entrar</a></li>
          @else
          <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Salir') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </li>
          @endguest
        </ul>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

  @yield('content')

  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>PDNQuery</h3>
            <p>
              Puebla, Puebla <br>
              México. <br><br>
              <span style="font-size: 2em;">Contacto</span><br>
              <strong>Teléfono:</strong> <a href="tel:+522223582706">+52 22 23 58 27 06</a><br>
              <strong>Correo:</strong> javier@padelante.com.mx<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Enlaces</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Acerca</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Servicios</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Política de privacidad</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nuestro Servicios</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="">Consulta de Datos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Monitoreo</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Formatos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Gráficas</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Versión Beta</h4>
            <p>PDNQyery se encuentra en desarrollo con la finalidad de vincular con la Plataforma Digital Nacional.</p>
            <!--<form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Suscribir">
            </form>-->
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          2021 &copy; Copyright <strong><span>Honorable Tribunal Superior de Justicia | Poder Judicial del Estado de Puebla.</span></strong>. All Rights Reserved
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">        
        <a href="" target="_blank"><i class="bx bxl-facebook"></i></a>
        <a href="" target="_blank"><i class="bx bxl-instagram"></i></a>
        <a href="" target="_blank"><i class="bx bxl-whatsapp"></i></a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>

  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>