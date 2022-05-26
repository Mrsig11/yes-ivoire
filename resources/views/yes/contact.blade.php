@extends('layouts.app')

@section('content')
<div class="container">
    <div class="position-relative p-4 mb-5">
        <h2 class="position-absolute top-25 start-50">Nos contacts</h2>
        <div class="b-divider position-absolute top-100 start-50 mt-3"></div>
    </div>
    <div class="row">
        <div class="col-6 d-sm-block">
            <img src="{{ asset('assets/logo.jpg') }}" class="figure-img img-fluid rounded" alt="...">
        </div>
        <div class="col-6 position-relative">
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
    </div>
</div>

<div class="container mb-5">
    <div class="card">
        <div class="card-title">Message</div>
        <div class="card-body">
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
    </div>

</div>
@endsection


@section('script')
    <script>
        const abonner = document.querySelector('#message');
        console.log(abonner.value);
    </script>
@endsection
