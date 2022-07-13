@extends('layouts.master')

@section('content')

    <!-- Contact Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6" >
            <div class="row g-4 align-items-center">
              <div class="col-sm-6">
                <img class="img-fluid" src="{{ asset('img/img5.jpg') }}" alt="" />
              </div>
              <div class="col-sm-6">
                <h3 class="mb-0">Djeneba Coumare</h3>
                <p>Directrice Service Client</p>
                <h6>Contact Details</h6>
                <p>
                  Joignable entre 8h et 20h30mn.
                </p>
                <p class="mb-0">Call: +223 345 6789</p>
                <p class="mb-0">Email: crm@flymanager.com</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row g-4 align-items-center">
              <div class="col-sm-6">
                <img class="img-fluid" src="{{ asset('img/img5.jpg') }}" alt="" />
              </div>
              <div class="col-sm-6">
                <h3 class="mb-0">Housseyni Barry</h3>
                <p>Chargé Marketing</p>
                <h6>Contact Details</h6>
                <p>
                  Joignable 24h/24 du Lundi au Mercredi.
                </p>
                <p class="mb-0">Call: +223 792 093 37</p>
                <p class="mb-0">Email: contact@flymanager.com</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6" style="min-height: 450px">
            <div class="position-relative h-100">
                <img class="position-relative w-100 h-75" src="{{ asset('img/aero3.jpg') }}" alt="" style="min-height: 450px; border: 0">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h6 class="text-body text-uppercase mb-2">Contactez Nous</h6>
              <h1 class="display-6 mb-0">
                Si vous avez des questions, veuillez nous contacter
              </h1>
            </div>
            <p class="mb-4">
              Nous ferons en sorte de vous repondre le plus vite possible.
              Veillez à etre plus precis dans votre requete.
            </p>
            <form>
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control border-0 bg-light"
                      id="nom"
                      placeholder="Votre Nom"
                    />
                    <label for="nom">Votre Nom</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="email"
                      class="form-control border-0 bg-light"
                      id="email"
                      placeholder="Votre Email"
                    />
                    <label for="email">Votre Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control border-0 bg-light"
                      id="objet"
                      placeholder="objet"
                    />
                    <label for="objet">Objet</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea
                      class="form-control border-0 bg-light"
                      placeholder="Saisir votre message ici"
                      id="message"
                      style="height: 150px"
                    ></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary py-3 px-5" type="submit">
                    Envoyer Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->

@endsection
