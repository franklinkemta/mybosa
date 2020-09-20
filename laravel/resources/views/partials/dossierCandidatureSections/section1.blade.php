<div class="container px-5">

    <div class="form-group row mt-5 ">
        <label class=" form-check-label col-auto" >  <b>Niveau d'admission : </b></label>
        <div class="form-check form-check-inline ">
            <input class="form-check-input" name="niveau" type="checkbox" id="niveau1" {{ $candidature->diplome_niveau == '1ERE_ANNEE' ? 'checked' : '' }}>
            <label class="form-check-label" for="niveau1">1ère année</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="niveau" type="checkbox" id="niveau2" {{ $candidature->diplome_niveau == '2EME_ANNEE' ? 'checked' : '' }}>
            <label class="form-check-label" for="niveau2">2ème année</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="niveau" type="checkbox" id="niveau3" {{ $candidature->diplome_niveau == '3EME_ANNEE' ? 'checked' : '' }}>
            <label class="form-check-label" for="niveau3">3ème année</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="niveau" type="checkbox" id="niveau4" {{ $candidature->diplome_niveau == '4EME_ANNEE' ? 'checked' : '' }}>
            <label class="form-check-label" for="niveau4">4ème année</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="niveau" type="checkbox" id="niveau5" {{ $candidature->diplome_niveau == '5EME_ANNEE' ? 'checked' : '' }}>
            <label class="form-check-label" for="niveau5">5ème année</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="niveau" type="checkbox" id="doctorat" {{ $candidature->diplome_niveau == 'DOCTORAT' ? 'checked' : '' }}>
            <label class="form-check-label" for="doctorat">Doctorat</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="niveau" type="checkbox" id="specialite" {{ $candidature->diplome_niveau == 'SPECIALITE' ? 'checked' : '' }}>
            <label class="form-check-label" for="specialite">Spécialité</label>
        </div>
    </div>

    <div class="form-group row">
        <label for="intitule_filiere" class="col-auto col-form-label">  <b>Filère:</b></label>
        <div class="col">
            <input id="intitule_filiere" type="text" placeholder="Nom et Prénom du père" class="form-control" name="intitule_filiere" value="{{ $candidature->intitule_filiere }}">
        </div>
    </div>


</div>