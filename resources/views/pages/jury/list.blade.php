@extends('layout.main')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">LISTE DES JURYS</h5>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">N°</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">Président</th>
                                    <th scope="col">DM</th>
                                    <th scope="col">Raporteur</th>
                                    <th scope="col">Maitre stage</th>
                                    <th class="text-center" scope="col" colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listes as $list)
                                    <tr>
                                        <th scope="row">{{ $list->id }}</th>
                                        <td>{{ $list->code }}</td>
                                        <td>{{ $list->president }}</td>
                                        <td>{{ $list->dm }}</td>
                                        <td>{{ $list->rapporteur }}</td>
                                        <td>{{ $list->maitre_stage }}</td>
                                        <td><a class="btn btn-success" href="{{ url('detail_demande', [$list->id]) }}"><i class="bi bi-eye"></i></a></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle w-100" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Actions
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('gestion_jury.edit', [$list->id]) }}">Editer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{ url ('supprimer_jury/' .$list->id) }}">Supprimer</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
