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
                            <h4 class="font-weight-bold mb-0">Reserveringen</h4>
                        </div>

                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-0">Reservering Vandaag</p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Voornaam</th>
                                        <th>Achternaam</th>
                                        <th>Email</th>
                                        <th>Telefoonnummer</th>
                                        <th>Adres</th>
                                        <th>Plaats + Postcode</th>
                                        <th>Datum + Tijd</th>
                                        <th>Actie</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($db_get_1 as $value)
                                        <tr>
                                            <td>{{$value->voornaam}}</td>
                                            <td>{{$value->achternaam}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$value->telefoonnummer}}</td>
                                            <td>{{$value->adres}}</td>
                                            <td>{{$value->plaats}}, {{$value->postcode}}</td>
                                            <td>{{$value->date}} {{$value->tijd}}</td>
                                            <td><a href="http://localhost/Reserveringssysteem_Hogeschool/public/accept/{{$value->id}}"><label class="badge badge-success" style="cursor: pointer;">Bewerken</label></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-0">Reservering afgelopen week</p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Voornaam</th>
                                        <th>Achternaam</th>
                                        <th>Email</th>
                                        <th>Telefoonnummer</th>
                                        <th>Adres</th>
                                        <th>Plaats + Postcode</th>
                                        <th>Datum + Tijd</th>
                                        <th>Actie</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($db_get_7 as $value)
                                        <tr>
                                            <td>{{$value->voornaam}}</td>
                                            <td>{{$value->achternaam}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$value->telefoonnummer}}</td>
                                            <td>{{$value->adres}}</td>
                                            <td>{{$value->plaats}}, {{$value->postcode}}</td>
                                            <td>{{$value->date}} {{$value->tijd}}</td>
                                            <td><a href="http://localhost/Reserveringssysteem_Hogeschool/public/accept/{{$value->id}}"><label class="badge badge-success" style="cursor: pointer;">Bewerken</label></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-0">Reservering Verzoeken</p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th><span class="ti-trash menu-icon"></span></th>
                                        <th>Voornaam</th>
                                        <th>Achternaam</th>
                                        <th>Email</th>
                                        <th>Telefoonnummer</th>
                                        <th>Adres</th>
                                        <th>Plaats + Postcode</th>
                                        <th>Datum + Tijd</th>
                                        <th>Actie</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($db as $value)
                                        <tr>
                                            <td><a href="http://localhost/Reserveringssysteem_Hogeschool/public/delete/{{$value->id}}"><label class="badge badge-danger" style="cursor: pointer;"><span class="ti-trash menu-icon"></span></label></a></td>
                                            <td>{{$value->voornaam}}</td>
                                            <td>{{$value->achternaam}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$value->telefoonnummer}}</td>
                                            <td>{{$value->adres}}</td>
                                            <td>{{$value->plaats}}, {{$value->postcode}}</td>
                                            <td>{{$value->date}} {{$value->tijd}}</td>
                                            <td><a href="http://localhost/Reserveringssysteem_Hogeschool/public/accept/{{$value->id}}"><label class="badge badge-success" style="cursor: pointer;">Accepteren</label></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


<script src="{{asset('vendors/base/vendor.bundle.base.js')}}"></script>

</body>

</html>

@endsection

