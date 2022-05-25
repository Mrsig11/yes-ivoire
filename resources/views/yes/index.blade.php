@extends('layouts.app')

@section('style')
<style>

                /* GLOBAL STYLES
            -------------------------------------------------- */
            /* Padding below the footer and lighter body text */

            body {
            padding-top: 3rem;
            padding-bottom: 3rem;
            color: #5a5a5a;
            }


            /* CUSTOMIZE THE CAROUSEL
            -------------------------------------------------- */

            /* Carousel base class */
            .carousel {
            margin-bottom: 4rem;
            }
            /* Since positioning the image, we need to help out the caption */
            .carousel-caption {
            bottom: 3rem;
            z-index: 10;
            }

            /* Declare heights because of positioning of img element */
            .carousel-item {
            height: 32rem;
            }
            .carousel-item > img {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            height: 32rem;
            }


            /* MARKETING CONTENT
            -------------------------------------------------- */

            /* Center align the text within the three columns below the carousel */
            .marketing .col-lg-4 {
            margin-bottom: 1.5rem;
            text-align: center;
            }
            .marketing h2 {
            font-weight: 400;
            }
            /* rtl:begin:ignore */
            .marketing .col-lg-4 p {
            margin-right: .75rem;
            margin-left: .75rem;
            }
            /* rtl:end:ignore */


            /* Featurettes
            ------------------------- */

            .featurette-divider {
            margin: 5rem 0; /* Space out the Bootstrap <hr> more */
            }

            /* Thin out the marketing headings */
            .featurette-heading {
            font-weight: 300;
            line-height: 1;
            /* rtl:remove */
            letter-spacing: -.05rem;
            }


            /* RESPONSIVE CSS
            -------------------------------------------------- */

            @media (min-width: 40em) {
            /* Bump up size of carousel content */
            .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
            }

            .featurette-heading {
            font-size: 50px;
            }
            }

            @media (min-width: 62em) {
            .featurette-heading {
            margin-top: 7rem;
            }
            }
                .bd-placeholder-img {
                    font-size: 1.125rem;
                    text-anchor: middle;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    user-select: none;
                }

                @media (min-width: 768px) {
                    .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                    }
                }


                .b-divider {
                    height: .6rem;
                    width: 80px;
                    background-color: rgba(243, 146, 0, 1);
                    border: solid rgba(0, 0, 0, .15);
                    border-width: 1px 0;
                    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
                }

                .filtre-carousel {
                    filter: brightness(20%);
                    height: 70%;
                }
</style>
<style>
   span {
       font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif
   }
   .filter-carousel {
       filter: brightness(20%);
   }
</style>
@endsection

@section('content')

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('assets/present-0.jpg') }}" class="filter-carousel" alt="">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Trois raison.</h1>
            <p><a class="btn btn-lg bg-yes-o" href="#">Télécharger</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/present-1.jpg') }}" class="filter-carousel" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>01</h1>
            <p>Utiliser Terminus pour éviter les déplacememnt unitils</p>
            <p><a class="btn btn-lg bg-yes-o" href="#">Télécharger</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/present-2.jpg') }}" class="filter-carousel" alt="">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>02</h1>
            <p>Utiliser Terminus pour avoir les arrêts à proximité</p>
            <p><a class="btn btn-lg bg-yes-o" href="#">Télécharger</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/present-3.jpg') }}" class="filter-carousel" alt="">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>03</h1>
            <p>Utiliser Terminus pour rechercher les arrêts et les bus à emprunter</p>
            <p><a class="btn btn-lg bg-yes-o" href="#">Télécharger</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="container">
    <div class="position-relative p-4 mb-5">
        <h2 class="position-absolute top-25 start-50">A propos de <span>YES IVOIRE</span></h2>
        <div class="b-divider position-absolute top-100 start-50 mt-3"></div>
    </div>
    <div class="row">
        <div class="col-6 position-relative">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="text-center">
                    <span>YES IVOIRE</span> est une structure ivoirienne spécialisé dans le domaine informatique.
                    Créer par un groupe d'etudiant, <span>YES IVOIRE</span> est à votre disposition pour ltout vos besoin informatique.
                </div>
            </div>
        </div>
        <div class="col-6 d-sm-block">
            <img src="{{ asset('assets/logo.jpg') }}" class="figure-img img-fluid rounded" alt="...">
        </div>
    </div>
</div>
@endsection
