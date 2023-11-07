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

            <h5 class="card-title">Modification du jury N° {{ $find->code}} </h5>

            <!-- Vertical Form -->
            <form class="row g-3" method="POST" action="{{ route('gestion_jury.update', [$find->id]) }}">
                @csrf
                @method('PATCH')
                <div class="col-lg-12 mb-3">
                    <label for="inputNanme4" class="form-label">Code jury</label>
                    <input type="text" name="code" value="{{ $find->code}}" class="form-control">
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="inputEmail4" class="form-label">Président jury</label>
                    <input type="text" name="president" value="{{ $find->president}}" class="form-control">
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="inputPassword4" class="form-label">Directeur de memoire</label>
                    <input type="text" name="dm" value="{{ $find->dm}}" class="form-control">
                </div>
                <div class="col-12 mb-3">
                    <label for="inputAddress" class="form-label">Rapporteur</label>
                    <input type="text" name="rapporteur" value="{{ $find->rapporteur}}" class="form-control">
                </div>
                <div class="col-12 mb-3">
                    <label for="inputAddress" class="form-label">Maitre de stage</label>
                    <input type="text" name="maitre_stage" value="{{ $find->maitre_stage}}" class="form-control">
                </div>
                <div class="">
                    <button type="submit" class="btn btn-dark">Modifier</button>
                    <button type="reset" class="btn btn-danger">Annuler</button>
                </div>
            </form> <!-- Vertical Form -->
        </div>
    </div>
@endsection
