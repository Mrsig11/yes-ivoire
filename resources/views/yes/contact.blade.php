@extends('layouts.app')

@section('style')

<style>
    .figure-img {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .contact {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .bgimg-1 {
        position: relative;
        opacity: 0.75;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .bgimg-1 {
        background-image: url("{{ asset('assets/logo.jpg') }}");
        min-height: 100%;
    }
    /* Turn off parallax scrolling for tablets and phones */
    @media only screen and (max-device-width: 1024px) {
        .bgimg-1 {
            background-attachment: scroll;
        }
    }

</style>

@endsection


@section('content')
<div class="container mb-5">
    <div class="position-relative p-4 mb-5">
        <h2 class="position-absolute top-25 start-50">Nos contacts</h2>
        <div class="b-divider position-absolute top-100 start-50 mt-3"></div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 d-sm-block">
            <div class="figure-img img-fluid rounded"></div>
            <img src="{{ asset('assets/logo.jpg') }}" class="figure-img img-fluid rounded" alt="...">
        </div>

        <div class="col-12 col-md-6 position-relative d-none d-md-block d-lg-none">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="">
                    <p>
                        <a class="link-dark" href="mailto:yesivoire@gmail.com">
                            <svg class="bi" width="24" height="24"><use xlink:href="#mail"/></svg>
                            yesivoire@gmail.com
                        </a>
                    </p>
                    <p>
                        <a class="link-dark" href="#">
                            <svg class="bi" width="24" height="24"><use xlink:href="#localisation"/></svg>
                            Abidjan TreichVille
                        </a>
                    </p>
                    <p>
                        <a class="link-dark" href="tel:+2250575773403">
                            <svg class="bi" width="24" height="24"><use xlink:href="#tel"/></svg>
                            0575773403
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 position-relative d-none d-xl-block d-xxl-none">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="">
                    <p>
                        <a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#mail"/></svg></a>
                        yesivoire@gmail.com</p>
                    <p>
                        <a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#localisation"/></svg></a>
                        Abidjan TreichVille</p>
                    <p>
                        <a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#tel"/></svg></a>
                        0575773403</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 position-relative d-none d-lg-block d-xl-none">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="">
                    <p>
                        <a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#mail"/></svg></a>
                        yesivoire@gmail.com</p>
                    <p>
                        <a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#localisation"/></svg></a>
                        Abidjan TreichVille</p>
                    <p>
                        <a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#tel"/></svg></a>
                        0575773403</p>
                </div>
            </div>
        </div>
        <div class="col-12 d-none d-sm-block d-md-none contact">
            <p>
                <a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#mail"/></svg></a>
                yesivoire@gmail.com</p>
            <p>
                <a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#localisation"/></svg></a>
                Abidjan TreichVille</p>
            <p>
                <a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#tel"/></svg></a>
                0575773403</p>
        </div>
        <div class="col-12 col-md-6 d-block d-sm-none contact">
            <p>
                <a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#mail"/></svg></a>
                yesivoire@gmail.com</p>
            <p>
                <a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#localisation"/></svg></a>
                Abidjan TreichVille</p>
            <p>
                <a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#tel"/></svg></a>
                0575773403</p>
        </div>
    </div>
</div>

<div class="bgimg-1">
    <div class="caption">
        <span class="border">
            <div class="container mb-5">
                <form method="POST" action="{{ route('message.a.yes') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email">Adresse Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" checked class="form-check-input" name="abonner" id="abonner">
                        <label class="form-check-label" for="abonner">S'abonner à la New Letter</label>
                    </div>
                    <button type="submit" class="btn bg-yes-o">Envoyer</button>
                </form>
            </div>
        </span>
    </div>
</div>

@endsection


@section('script')
    <script>
        const abonner = document.querySelector('#message');
        console.log(abonner.value);
    </script>
@endsection
