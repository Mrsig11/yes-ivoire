@extends('layouts.app')

@section('content')
<div class="" style="height: 85px; width:100%"></div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('assets/present-0.jpg') }}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title text-center">03 Raison pour utilser Terminus</h5>
                      <p class="card-text"></p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title text-center">
                        <a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#cross"/></svg></a>
                      </h5>
                      <p class="card-text text-center">Eviter tout déplacement unitil pour vous gagner du temps.</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <img src="{{ asset('assets/present-1.jpg') }}" class="img-fluid rounded-start" alt="...">
                  </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('assets/present-2.jpg') }}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title text-right">
                        <a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#localisation"/></svg></a>
                        </h5>
                      <p class="card-text text-right">Trouver tout les arrêts en un clic</p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title text-center">
                        <a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#trajet"/></svg></a>
                      </h5>
                      <p class="card-text">Voir le trajet de tout vos moyen de transport favoris</p>
                      <p class="card-text"><small class="text-muted">Et ça en un clin d'oeil</small></p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <img src="{{ asset('assets/present-3.jpg') }}" class="img-fluid rounded-start" alt="...">
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
