@extends('welcome')

@section('content')
    <div style="margin-top: 50px;"></div>
    <div class="container-fluid">
        <div class="row">
            <h1>Liste des emprunts</h1>
        </div>
        <div class="d-flex justify-content-between">
            <form class="d-flex" action="{{ route('emprunt.index') }}" method="get" accept-charset="UTF-8" role="search">
                <input class="form-control me-2" type="search" name="search" value="{{ request()->search }}"
                    placeholder="Recherche" aria-label="Search">
                <button class="btn btn-primary" type="submit">Recherche</button>
            </form>
            <a href="{{ route('emprunt.create') }}" class="btn btn-primary">
                <i class="fa-solid fa-plus"></i>
                Ajouter un emprunt
            </a>
        </div>

        <table class="table">
            <thead class="">
                <tr>
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col">Nom et prénom de l'etudiant</th>
                    <th scope="col">Livre emprunté</th>
                    <th scope="col">Date d'emprunt</th>
                    <th scope="col">Date de retour</th>
                    <th scope="col">Date de retour effective</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($emprunts as $emprunt)
                    <tr>
                        {{-- <th scope="row">{{ $emprunt->id_emprunt }}</th> --}}
                        <td>{{ $emprunt->etudiant->nom }} {{ $emprunt->etudiant->prenom }}</td>
                        <td>{{ $emprunt->livre->titre }}</td>
                        <td>{{ $emprunt->date_emprunt }} </td>
                        <td>
                            {{ $emprunt->date_retour_prevue }}
                        </td>
                        <td>
                            {{ $emprunt->date_retour_effective }}
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{ route('emprunt.edit', $emprunt->id) }}">
                                {{-- <i class="fa-solid fa-pen-to-square"></i> --}}
                                Modifier
                            </a>

                            <a class="btn btn-danger" href="#delete{{ $emprunt->id }}" data-bs-toggle="modal"
                                type="button">
                                {{-- <i class="fa-solid fa-trash-can"></i> --}}
                                Supprimer

                            </a>
                        </td>
                    </tr>
                    @include('emprunts.delete')
                @endforeach
            </tbody>
        </table>
    </div>
        @if (count($emprunts) > 0)
            <div style="float: right; margin-right:50px;">
                {{ $emprunts->links() }}
            </div>
        @else
            <div class="d-flex justify-content-center align-items-center">
                <p class="">Pas de emprunts.</p>
            </div>
        @endif
@endsection
