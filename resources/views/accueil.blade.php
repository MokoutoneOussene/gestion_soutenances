@extends('layout.main')

@section('content')
    <div class="pagetitle">
        <h1 class="text-center">BIENVENUE DANS GESTION ETUDIANTS</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Acceuil</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nos etudiants en images</h5>

                        <!-- Slides only carousel -->
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('assets/img/news-3.jpg')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/slides-2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/slides-3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div><!-- End Slides only carousel-->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
