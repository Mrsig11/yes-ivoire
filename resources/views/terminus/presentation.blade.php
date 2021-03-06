@extends('layouts.app')

@section('style')
    <style>
        button {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
@endsection

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
                      <h5 class="card-title text-center">03 Raisons pour utiliser Terminus</h5>
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
                      <p class="card-text text-center">Eviter tout déplacement inutile pour gagner du temps.</p>
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
<div class="container mb-5">
    <button class="btn bg-yes-o" style="float: right"><a href="https://play.google.com/store/apps/details?id=com.yesivoire.terminus" target="_blank" rel="noopener noreferrer">Télécharger</a></button>
</div>
@endsection
