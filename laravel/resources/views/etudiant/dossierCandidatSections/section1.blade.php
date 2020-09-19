<form method="POST" action="{{ $current_section['action'] }}">
    @csrf
    <div class="card-body mt-2">
        <h6>
            <b class="text-success">Informations sur les parents</b>
            <button id="submit" type="submit" style="float:right" class="btn btn-sm btn-outline-info">
                <b> {{ __('Enregistrer les informations') }}</b>
            </button>
        </h6>
        <hr style="opacity: 0;">
        <!-- Form groups -->

        <div class="form-group row">
            <label for="nom_prenom_pere" class="col-auto col-form-label">  <b>Nom et Prénom du père:</b></label>
            <div class="col">
                <input id="nom_prenom_pere" type="text" placeholder="Nom et Prénom du père" class="form-control @error('nom_prenom_pere') is-invalid @enderror" name="nom_prenom_pere" value="{{ $parentsEtudiant->nom_prenom_pere }}" autocomplete="nom_prenom_pere">
                @error('nom_prenom_pere')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="profession_pere" class="col-auto col-form-label">  <b>Proféssion du père:</b></label>
            <div class="col">
                <input id="profession_pere" type="text" placeholder="Proféssion du père" class="form-control @error('profession_pere') is-invalid @enderror" name="profession_pere" value="{{ $parentsEtudiant->profession_pere }}" autocomplete="nom_prenom_pere">
                @error('profession_pere')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <label for="telephone_pere" class="col-auto col-form-label"><b>Tel:</b></label>
            <div class="col">
                <input id="telephone_pere" type="tel" placeholder="Téléphone du père" class="form-control @error('telephone_pere') is-invalid @enderror" name="telephone_pere" value="{{ $parentsEtudiant->telephone_pere }}" autocomplete="nom_prenom_pere">
                @error('telephone_pere')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <label for="nom_prenom_mere" class="col-auto col-form-label">  <b>Nom et Prénom de la mère:</b></label>
            <div class="col">
                <input id="nom_prenom_mere" type="text" placeholder="Nom et Prénom de la mère" class="form-control @error('nom_prenom_mere') is-invalid @enderror" name="nom_prenom_mere" value="{{ $parentsEtudiant->nom_prenom_mere }}" autocomplete="nom_prenom_mere">
                @error('nom_prenom_mere')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="profession_mere" class="col-auto col-form-label">  <b>Proféssion de la mère:</b></label>
            <div class="col">
                <input id="profession_mere" type="text" placeholder="Proféssion de la mère" class="form-control @error('profession_mere') is-invalid @enderror" name="profession_mere" value="{{ $parentsEtudiant->profession_mere }}" autocomplete="profession_mere">
                @error('profession_mere')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <label for="telephone_mere" class="col-auto col-form-label"><b>Tel:</b></label>
            <div class="col">
                <input id="telephone_mere" type="tel" placeholder="Téléphone de la mère" class="form-control @error('telephone_mere') is-invalid @enderror" name="telephone_mere" value="{{ $parentsEtudiant->telephone_mere }}" autocomplete="telephone_mere">
                @error('telephone_mere')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <label for="nom_prenom_tuteur" class="col-auto col-form-label">  <b>Nom et Prénom du tuteur:</b></label>
            <div class="col">
                <input id="nom_prenom_tuteur" type="text" placeholder="Nom et Prénom du tuteur" class="form-control @error('nom_prenom_tuteur') is-invalid @enderror" name="nom_prenom_tuteur" value="{{ $parentsEtudiant->nom_prenom_tuteur }}" autocomplete="nom_prenom_tuteur">
                @error('nom_prenom_tuteur')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="profession_tuteur" class="col-auto col-form-label">  <b>Proféssion du tuteur:</b></label>
            <div class="col">
                <input id="profession_tuteur" type="text" placeholder="Proféssion du tuteur" class="form-control @error('profession_tuteur') is-invalid @enderror" name="profession_tuteur" value="{{ $parentsEtudiant->profession_tuteur }}" autocomplete="profession_tuteur">
                @error('profession_tuteur')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <label for="telephone_tuteur" class="col-auto col-form-label"><b>Tel:</b></label>
            <div class="col">
                <input id="telephone_tuteur" type="tel" placeholder="Téléphone du tuteur" class="form-control @error('telephone_tuteur') is-invalid @enderror" name="telephone_tuteur" value="{{ $parentsEtudiant->telephone_tuteur }}" autocomplete="telephone_tuteur">
                @error('telephone_tuteur')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="parente_tuteur" class="col-auto col-form-label">  <b>Lien de parneté:</b></label>
            <div class="col">
                <input id="parente_tuteur" type="text" placeholder="Lien de parneté" class="form-control @error('parente_tuteur') is-invalid @enderror" name="parente_tuteur" value="{{ $parentsEtudiant->parente_tuteur }}" autocomplete="parente_tuteur">
                @error('parente_tuteur')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <label for="adresse_postale" class="col-auto col-form-label">  <b>Adresse postale:</b></label>
            <div class="col">
                <input id="adresse_postale" type="text" placeholder="Adresse postale" class="form-control @error('adresse_postale') is-invalid @enderror" name="adresse_postale" value="{{ $parentsEtudiant->adresse_postale }}" autocomplete="adresse_postale">
                @error('adresse_postale')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-auto col-form-label">  <b>Email:</b></label>
            <div class="col">
                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $parentsEtudiant->email }}" autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

    </div>

    <div class="card-footer">
        <div class="form-group row mb-0 text-center">
            <div class="col-md-12 ">
                <button id="submit" type="submit" class="btn btn-info">
                    <b> {{ __('Enregistrer les informations') }}</b>
                </button>
            </div>
        </div>
    </div>
</form>
