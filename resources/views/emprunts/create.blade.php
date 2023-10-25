<style>
    .form {
        display: flex;
        /* flex-direction: column; */
        justify-content: center;
        align-content: center;
        margin-top: 20px;
    }
</style>
@extends('welcome')

@section('content')
    <div class="form">
        <h1>Ajout d'un séjour</h1>
    </div>
    <div class="form">
        <form action="{{ route('emprunt.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <label for="exampleFormControlSelect3">Nom et prénom de l'etudiant</label>
                <select name="id_etudiant" class="form-control form-control-sm"
                    id="exampleFormControlSelect3">
                    @foreach ($etudiants as $etudiant)
                        <option value="{{$etudiant->id_etudiant}}">{{ $etudiant->nom }} {{ $etudiant->prenom }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-4">
                <label for="exampleFormControlSelect3">Livre emprunté</label>
                <select name="id_livre" class="form-control form-control-sm"
                    id="exampleFormControlSelect3">
                    @foreach ($livres as $livre)
                        <option value="{{$livre->id_livre}}">{{ $livre->titre }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Date d'emprunt</label>
                <input type="date" id="form1Example1" name="date_emprunt" placeholder="Date d'emprunt'"
                    class="form-control" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Date prevue du retour</label>
                <input type="date" id="form1Example1" name="date_retour_prevue" placeholder="Date prevue du retour"
                    class="form-control" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Date prevue du retour</label>
                <input type="date" id="form1Example1" name="date_retour_effective" placeholder="Date effective du retour"
                    class="form-control" />
            </div>

            <!-- Submit button -->
            <div class="form">
                <button type="submit" class="btn btn-primary btn-block">Créer</button>
            </div>
        </form>
    </div>
@endsection
