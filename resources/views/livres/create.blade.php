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
        <h1>Ajout d'un livre</h1>
    </div>
    <div class="form">

        <form action="{{route('livre.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Titre</label>
                <input type="text" id="form1Example1" name="titre" placeholder="Titre du livre" class="form-control" />
            </div>


            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example2">Auteur</label>
                <input type="text" id="form1Example2" name="auteur" placeholder="Auteur du livre" class="form-control" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Résumé</label>
                <input type="text" id="form1Example1" name="resume" placeholder="Résumé du livre" class="form-control" />
            </div>


            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Disponibilité</label>
                <div class="form-check form-check-inline ">
                    <input class="form-check-input" checked type="radio" name="disponibilite" id="inlineRadio1"
                        value="disponible">
                    <label class="form-check-label" for="inlineRadio1">Disponible</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="disponibilite" id="inlineRadio2"
                        value="emprunté">
                    <label class="form-check-label" for="inlineRadio2">Emprunté</label>
                </div>
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Localisation</label>
                <input type="text" id="form1Example1" name="localisation" placeholder="Emplacement du livre" class="form-control" />
            </div>

            <!-- Submit button -->
            <div class="form">
                <button type="submit" class="btn btn-primary btn-block">Créer</button>
            </div>
        </form>
    </div>
@endsection
