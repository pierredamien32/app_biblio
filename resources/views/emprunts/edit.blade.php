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
        <h1>Modifier un séjour</h1>
    </div>
    <div class="form">
        <form action="{{ route('emprunt.update', $emprunt->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group mb-4">
                <label for="exampleFormControlSelect3">Nom et prénom de l'étudiant</label>
                <select name="id_etudiant" class="form-control form-control-sm"
                    id="exampleFormControlSelect3">
                    <option value="{{$emprunt->etudiant->id_etudiant}}">{{ $emprunt->etudiant->nom }} {{ $emprunt->etudiant->prenom }}</option>
                    @foreach ($etudiants as $etudiant)
                        @if ($emprunt->etudiant->id_etudiant == $etudiant->id_etudiant)
                            {{-- <option value="{{$etudiant->id_etudiant}}">{{ $etudiant->nom }} {{ $etudiant->prenom }}</option> --}}
                        @else
                            <option value="{{$etudiant->id_etudiant}}">{{ $etudiant->nom }} {{ $etudiant->prenom }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-4">
                <label for="exampleFormControlSelect3">Livre emprunté</label>
                <select name="id_livre" class="form-control form-control-sm"
                    id="exampleFormControlSelect3">
                    <option value="{{$emprunt->livre->id_livre}}">{{ $emprunt->livre->titre }}</option>
                    @foreach ($livres as $livre)
                        @if ($emprunt->livre->id_livre == $livre->id_livre)
                            
                        @else
                            <option value="{{$livre->id_livre}}">{{ $livre->titre }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Date d'emprunt</label>
                <input type="date" id="form1Example1" value="{{$emprunt->date_emprunt}}" name="date_emprunt" placeholder="Date d'emprunt'"
                    class="form-control" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Date prevue du retour</label>
                <input type="date" id="form1Example1" value="{{$emprunt->date_retour_prevue}}" name="date_retour_prevue" placeholder="Date prevue du retour"
                    class="form-control" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Date prevue du retour</label>
                <input type="date" id="form1Example1" value="{{$emprunt->date_retour_effective}}" name="date_retour_effective" placeholder="Date effective du retour"
                    class="form-control" />
            </div>

            <!-- Submit button -->
            <div class="form">
                <button type="submit" class="btn btn-primary btn-block">Modifier</button>
            </div>
        </form>
    </div>
@endsection
