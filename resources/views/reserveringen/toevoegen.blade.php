@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
{{--<div class="row justify-content-center">--}}
{{--<div class="col-md-8">--}}
{{--<div class="card">--}}
{{--<div class="card-header">Dashboard</div>--}}

{{--<div class="card-body">--}}
{{--@if (session('status'))--}}
{{--<div class="alert alert-success" role="alert">--}}
{{--{{ session('status') }}--}}
{{--</div>--}}
{{--@endif--}}

{{--You are logged in!--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RoyalUI Admin</title>
    <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/base/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<body>

<!-- partial -->
<div class="container-fluid page-body-wrapper" style="margin-top:-95px;">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">
                    <i class="ti-home menu-icon"></i>
                    <span class="menu-title">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <i class="ti-pin2 menu-icon"></i>
                    <span class="menu-title">Reserveringen</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('reserveringen')}}">Bekijken</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('reserveringen_toevoegen')}}">Toevoegen</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/agenda/agenda.php">
                    <i class="ti-agenda menu-icon"></i>
                    <span class="menu-title">Agenda</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('klanten')}}">
                    <i class="ti-face-smile menu-icon"></i>
                    <span class="menu-title">Klanten</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/tables/basic-table.html">
                    <i class="ti-zip menu-icon"></i>
                    <span class="menu-title">PDF Formulieren</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="ti-power-off menu-icon"></i>
                    <span class="menu-title">Uitloggen</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="font-weight-bold mb-0">Reserveringen Toevoegen</h4>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
            <form class="needs-validation" novalidate style="width: 90%; margin-left:70px;" action="{{route('toevoegen')}}" method='POST'>
                {{csrf_field()}}
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Voornaam</label>
                        <input type="text" name="voornaam" class="form-control" id="validationCustom01" placeholder="Voornaam" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Achternaam</label>
                        <input type="text" class="form-control" name="achternaam" id="validationCustom02" placeholder="Achternaam" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                            </div>
                            <input type="text" name="email" class="form-control" id="validationCustomUsername" placeholder="Email" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Adres + Huisnr.</label>
                        <input type="text" name="adres" class="form-control" id="validationCustom03" placeholder="Adres" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom04">Plaats</label>
                        <input type="text" name="plaats" class="form-control" id="validationCustom04" placeholder="Plaats" required>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom05">Postcode</label>
                        <input type="text" name="postcode" class="form-control" id="validationCustom05" placeholder="Postcode" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom03">Telefoonnummer</label>
                        <input type="text" name="tel" class="form-control" id="validationCustom03" placeholder="Telefoonnummer" required>
                        <div class="invalid-feedback">
                            Please provide a valid phone number.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom04">Datum</label>
                        <input type="date" name="datum" class="form-control" id="validationCustom04" placeholder="Datum" required>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom05">Tijd</label>
                        <input type="time" name="time" class="form-control" id="validationCustom05" placeholder="Tijd" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary button-kleur" type="submit" >Reserveren</button>
            </form>
            </div>
            <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName('needs-validation');
                        // Loop over them and prevent submission
                        var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add('was-validated');
                            }, false);
                        });
                    }, false);
                })();
            </script>

        </div>
    </div>
</div>


<script src="{{asset('vendors/base/vendor.bundle.base.js')}}"></script>

</body>

</html>

@endsection

