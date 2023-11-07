<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.style')
</head>

<body>

    <section class="container-fluid">
        <div class="row p-3">
            <div class="col-lg-9 col-md-12">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/img/news-3.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/slides-2.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/slides-3.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 shadow">

                @if (session('status'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error !</strong> {{session('status')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <h3 class="text-center mt-3">AUTHENTIFICATION</h3>
                <div class="text-center m-3">
                    <img src="{{ asset('images/Burkina_Faso.png') }}" alt="logo" style="width: 50%;">
                </div>
                <p class="mt-5" style="font-size: 12px;">
                    Veuillez renseigner vos information pour vous connecter
                </p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                    </div>
                    <button type="submit" class="btn btn-dark">Se connecter</button>
                </form>

                <p class="mt-4" style="font-size: 12px;">
                    Vous n'avez pas de compte ? <span><a class="text-danger" href="{{route('register')}}">Créez-un</a></span>
                </p>
            </div>
        </div>
    </section>

    @include('layout.script')
</body>

</html>
