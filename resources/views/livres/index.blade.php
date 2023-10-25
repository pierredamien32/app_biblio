@extends('welcome')

@section('content')
    <div style="margin-top: 50px;"></div>
    <div class="container-fluid">
        <div class="row">
            <h1>Liste des livres</h1>
        </div>
        <div class="d-flex justify-content-between">
            <form class="d-flex" action="{{ route('livre.index') }}" method="get" accept-charset="UTF-8" role="search">
                {{-- <input class="form-control me-2" type="search" name="search" value="{{ request()->search }}"
                    placeholder="Recherche" aria-label="Search">
                <button class="btn btn-primary" type="submit">Recherche</button> --}}
            </form>
            <a href="{{ route('livre.create') }}" class="btn btn-primary">
                <i class="fa-solid fa-plus"></i>
                Ajouter un livre
            </a>
        </div>

        <table class="table">
            <thead class="">
                <tr>
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col">Titre</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Résumé</th>
                    <th scope="col">Disponibilité</th>
                    <th scope="col">Localisation</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($livres as $livre)
                    <tr>
                        {{-- <th scope="row">{{ $livre->code }}</th> --}}
                        <td>{{ $livre->titre }}</td>
                        <td>{{ $livre->auteur }}</td>
                        <td>{{ $livre->resume }}</td>
                        <td>{{ $livre->disponibilite }}</td>
                        <td>{{ $livre->localisation }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('livre.edit', $livre->id_livre) }}">
                                {{-- <i class="fa-solid fa-pen-to-square"></i> --}}
                                Modifier
                            </a>

                            <a class="btn btn-danger" href="#delete{{ $livre->id_livre }}" data-bs-toggle="modal"
                                type="button">
                                {{-- <i class="fa-solid fa-trash-can"></i> --}}
                                Supprimer

                            </a>
                        </td>

                    </tr>
                    @include('livres.delete')
                @endforeach
            </tbody>
        </table>
    </div>

        {{-- @if (count($livres) > 0)
            <div style="float: right; margin-right:50px;">
                {{ $livres->links() }}
            </div>
        @else
            <div class="d-flex justify-content-center align-items-center">
                <p class="card-description">Pas de livres.</p>
            </div>
        @endif --}}

@endsection
