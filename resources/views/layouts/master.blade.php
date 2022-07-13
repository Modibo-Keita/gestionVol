<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>FlyManager: Accueil</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="{{ asset('logo/logo1.jpg') }}" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    {{-- <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" /> --}}

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('bootstrap5.2/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet" />
  </head>

  <body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
      <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
          <div
            class="h-100 d-inline-flex align-items-center border-start border-end px-3"
          >
            <small class="fa fa-phone-alt me-2"></small>
            <small>+223 79 20 93 37</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center border-end px-3">
            <small class="far fa-envelope-open me-2"></small>
            <small>info@flymanager.com</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center border-end px-3">
            <small class="far fa-clock me-2"></small>
            <small>Mon - Fri : 09 AM - 09 PM</small>
          </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
          <div class="h-100 d-inline-flex align-items-center">
            <a class="btn btn-square border-end border-start" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square border-end" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square border-end" href=""><i class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-square border-end" href=""><i class="fab fa-instagram"></i></a>
            <a class="btn btn-success btn-sm me-2" href="#"> <span><i class="fab fa-facebook-f"></i></span> Se connecter</a>
            <a class="btn btn-primary btn-sm" href="#"> <span><i class="fab fa-facebook-f"></i></span> Creer mon compte</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
      <a href="index.html" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">
            <img class="text-primary" src="{{ asset('logo/logo1.jpg') }}" width="100px" height="60px" alt="">
          <!-- <i class="fa fa-building text-primary me-3"></i> -->
          FlyManager
        </h1>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-3 py-lg-0">
          <a href="{{ url('passager/create') }}" class="nav-item nav-link active">Accueil</a>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Passagers</a
            >
            <div class="dropdown-menu bg-light m-0">
              <a href="/passagers" class="dropdown-item">Ajouter un Passager</a>
              <a href="#" class="dropdown-item">Consulter les Passagers</a>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Reservation</a
            >
            <div class="dropdown-menu bg-light m-0">
              <a href="#" class="dropdown-item">Reserver un vol</a>
              <a href="#" class="dropdown-item">Mes Reservations</a>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Programme</a
            >
            <div class="dropdown-menu bg-light m-0">
              <a href="#" class="dropdown-item">Programmer un vol</a>
              <a href="#" class="dropdown-item">Consulter le programme des vols</a>
            </div>
          </div>
          <a href="contact.html" class="nav-item nav-link">Contactez Nous</a>
          <a href="service.html" class="nav-item nav-link">Apropos de Nous</a>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->



    <!-- content Start -->
    @yield("content")
    <!-- content End -->


    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark footer mt-5 pt-5">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h3 class="text-white mb-4">
              <img class="rounded-3 me-3" src="{{ asset('logo/logo1.jpg') }}" width="50px" alt="Logo">FLYMANAGER
            </h3>
            <p>
              Votre solution de gestion de vols tout en un.
            </p>
            <div class="d-flex pt-2">
              <a class="btn btn-square btn-outline-primary me-1" href=""
                ><i class="fab fa-twitter"></i
              ></a>
              <a class="btn btn-square btn-outline-primary me-1" href=""
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a class="btn btn-square btn-outline-primary me-1" href=""
                ><i class="fab fa-youtube"></i
              ></a>
              <a class="btn btn-square btn-outline-primary me-0" href=""
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Adresse</h4>
            <p>
              <i class="fa fa-map-marker-alt me-3"></i>Senou Rue 39, Bamako, MALI
            </p>
            <p><i class="fa fa-phone-alt me-3"></i>+223 7920 9337</p>
            <p><i class="fa fa-envelope me-3"></i>info@flymanager.com</p>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Liens Rapides</h4>
            <a class="btn btn-link" href="">Passagers</a>
            <a class="btn btn-link" href="">Contactez-Nous</a>
            <a class="btn btn-link" href="">Nos Autres Services</a>
            <a class="btn btn-link" href="">Programme de Vols</a>
            <a class="btn btn-link" href="">Reservations</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Newsletter</h4>
            <p>Inscrivez-vous à notre Newsletter pour ne rien rater de notre dernieres nouvelles.</p>
            <div class="position-relative mx-auto" style="max-width: 500px">
              <input
                class="form-control  w-100 py-3 ps-4 pe-5"
                type="text"
                placeholder="Votre email"
              />
              <button
                type="button"
                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
              >
                S'abonner
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a href="#">FlyManager</a>, Tous droits reservés.
            </div>
            <div class="col-md-6 text-center text-md-end">
              Developper avec <a href="https://laravel.com" target="_blank">LARAVEL 9.X</a>
              <br />Par:
              <a href="#">Modibo Keita</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="{{ asset('bootstrap5.2/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/main.js') }}"></script>
  </body>
</html>
