@extends('layout.main')

@section('content')
    <div class="card">
        <div class="card-body">

            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Succès !</strong> {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <h5 class="card-title">Ajout de salle</h5>

            <!-- Vertical Form -->
            <form class="row g-3" method="POST" action="{{ route('gestion_salle.store') }}">
                @csrf
                <div class="col-lg-12 mb-3">
                    <label for="inputNanme4" class="form-label">Nom salle</label>
                    <input type="text" name="nom_salle" class="form-control">
                </div>

                <div class="">
                    <button type="submit" class="btn btn-dark">Enregistrer</button>
                    <button type="reset" class="btn btn-danger">Annuler</button>
                </div>
            </form> <!-- Vertical Form -->
        </div>
    </div>
@endsection
