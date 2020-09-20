<div class="container  px-5">
    <hr class="my-4">
    <h5 style="font-weight: 600;">Convocation MyBosa</h5>
    <hr class="hide">
    <h6>
        <b class="text-success">Enregistrement MyBosa</b>
    </h6>
    <hr class="hide">
    <!-- Form groups -->

    <div class="form-group row">
        <label for="nom_commission" class="col-auto col-form-label col-form-label-sm">  Nom:</label>
        <div class="col">
            <input id="nom_commission" type="text" placeholder="Nom" class="form-control form-control-sm @error('nom_commission') is-invalid @enderror" name="nom_commission" value="{{ $etudiant->nom }}" required autocomplete="nom_commission">
            @error('nom_commission')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="prenom_commission" class="col-auto col-form-label col-form-label-sm">  Prénom:</label>
        <div class="col">
            <input id="prenom_commission" type="text" placeholder="Prénom" class="form-control form-control-sm @error('prenom_commission') is-invalid @enderror" name="prenom_commission" value="{{ $etudiant->prenom }}" required autocomplete="prenom_commission">
            @error('prenom_commission')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="date_commission" class="col-auto col-form-label col-form-label-sm">  Date de commission:</label>
        <div class="col">
            <input id="date_commission" type="text" placeholder="Date de commission" class="form-control form-control-sm @error('date_commission') is-invalid @enderror" name="date_commission" value="{{ now() }}" required autocomplete="date_commission">
            @error('date_commission')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="niveau_commission" class="col-auto col-form-label col-form-label-sm">  Niveau :</label>
        <div class="col">
            <input id="niveau_commission" type="text" placeholder="Niveau" class="form-control form-control-sm @error('niveau_commission') is-invalid @enderror" name="niveau_commission" value="{{ ucwords(str_replace('_', ' ', strtolower($candidature['diplome_niveau']))) }}" required autocomplete="niveau_commission">
            @error('niveau_commission')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="parcours_commission" class="col-auto col-form-label col-form-label-sm">  Parcours :</label>
        <div class="col">
            <input id="parcours_commission" type="text" placeholder="Parcours" class="form-control form-control-sm @error('parcours_commission') is-invalid @enderror" name="parcours_commission" value="{{ $candidature['diplome_intitule'] }}" required autocomplete="parcours_commission">
            @error('parcour_commission')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="parcours_annee_universitaire" class="col-auto col-form-label col-form-label-sm">  Année Universitaire :</label>
        <div class="col">
            <input id="parcours_annee_universitaire" type="text" placeholder="Année Universitaire" class="form-control form-control-sm @error('parcours_annee_universitaire') is-invalid @enderror" name="parcours_annee_universitaire" value="{{ now()->year() }}" required autocomplete="parcours_annee_universitaire">
            @error('parcours_annee_universitaire')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="parcours_annee_universitaire" class="col-auto col-form-label col-form-label-sm">  Année Universitaire :</label>
        <div class="col">
            <input id="parcours_annee_universitaire" type="text" placeholder="Année Universitaire" class="form-control form-control-sm @error('parcours_annee_universitaire') is-invalid @enderror" name="parcours_annee_universitaire" value="{{ now()->year }} - {{ now()->addYears(1)->year }}" required autocomplete="parcours_annee_universitaire">
            @error('parcours_annee_universitaire')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="numero_dossier_commission" class="col-auto col-form-label col-form-label-sm">  Numéro de dossier :</label>
        <div class="col">
            <input id="numero_dossier_commission" type="text" placeholder="Numéro de dossier" class="form-control form-control-sm @error('numero_dossier_commission') is-invalid @enderror" name="numero_dossier_commission" value="# {{ $candidature->id }}" required autocomplete="numero_dossier_commission">
            @error('numero_dossier_commission')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="signature_candidat_commission" class="col-auto col-form-label col-form-label-sm">  Signature du candidat  :</label>
        <div class="col-3">
            <textarea id="signature_candidat_commission" class="form-control form-control-sm @error('signature_candidat_commission') is-invalid @enderror" name="signature_candidat_commission" autocomplete="signature_candidat_commission"  rows="2" maxlength="300"></textarea>
            @error('signature_candidat_commission')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>  

    <hr class="hide">
    <h6>
        <b class="text-black">Inscription par MyBosa</b>
    </h6>
    <div class="row">
        <p class="col-8" style="font-size: 13px;">
            MyBosa : Plateforme d'orientation académique <br>
            Contact : Dan Ayub <br>
            Adresse : BAHHMAD, Casablanc - Maroc <br>
            Téléphone : 00212 7 66 37 24 33 <br>
            E-mail : Hello@mybosa.com <br>
            Siteweb : www.mybosa.com <br>
        </p>
        <div class="col-auto" style="margin-top:;">
            <b class="mt-5 disabled color _shadow" style="font-weight: 900; font-size: 24px; text-decoration: none;" >
                <img class="_shadow" src="{{ asset('favicon.png') }}" width="90" height="90" alt="">
                MyBosa
            </b>
        </div>
    </div>

    <hr class="hide">
    <h6>
        <b class="text-black">Inscription à {{ $candidature['etablissement_sigle'] }} : {{ $candidature['etablissement_nom'] }} </b>
    </h6>
    <div class="row">
        <p class="col-12" style="font-size: 13px;">
            Ecole : {{ $candidature['etablissement_sigle'] }} # {{ $candidature['etablissement_nom'] }} <br>
            Contact : {{ $userEtablissement['email'] }}  <br>
            Adresse : {{ $candidature['etablissement_adresse'] }} <br>
            Téléphone : {{ $candidature['etablissement_telephone'] }} <br>
            E-mail : {{ $candidature['etablissement_email_contact'] }} <br>
            Siteweb : {{ $candidature['etablissement_siteweb'] }} <br>
        </p>
    </div>


</div>

<div class="py-1 mt-3 bg-color" >       
</div>