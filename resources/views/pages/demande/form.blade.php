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

            <h5 class="card-title">Ajout de demande</h5>

            <!-- Vertical Form -->
            <form class="row g-3" method="POST" action="{{ route('add_demande') }}" enctype="multipart/form-data">
                @csrf
                <input type="text" name="users_id" value="{{ Auth::user()->id }}" class="form-control" hidden>
                <input type="text" name="statut" value="en cours" class="form-control" hidden>
                <div class="col-lg-12 mb-3">
                    <label for="inputNanme4" class="form-label">Thème de soutenance</label>
                    <input type="text" name="theme" class="form-control">
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="inputEmail4" class="form-label">Date</label>
                    <input type="date" name="date_demande" class="form-control">
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="inputPassword4" class="form-label">Session</label>
                    <select name="session" class="form-control">
                        <option value="Janvier">Janvier</option>
                        <option value="Juin">Juin</option>
                        <option value="Decembre">Decembre</option>
                    </select>
                </div>
                <div class="col-12 mb-3">
                    <label for="inputAddress" class="form-label">Document</label>
                    <input type="file" name="document" class="form-control">
                </div>
                <div class="">
                    <button type="submit" class="btn btn-dark">Enregistrer</button>
                    <button type="reset" class="btn btn-danger">Annuler</button>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
@endsection
