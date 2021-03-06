<form method="POST" action="{{ $current_section['action'] }}">
    @csrf
    <div class="card-body mt-2">
        <h6>
            <b class="text-success">Identité</b> <small>(Telle qu'indiquée sur votre pièce d'identité)</small> 
            <button id="submit" type="submit" style="float:right" class="btn btn-sm btn-outline-info">
                <b> {{ __('Enregistrer les informations') }}</b>
            </button>
        </h6>
        <hr style="opacity: 0;">
        <!-- Form groups -->

        <div class="form-group row">
            <label for="type_piece_identite" class="col-auto col-form-label">  <b>Type de pièce d'identité</b>  <small>(C.I.N / CI /Passeport)<b>:</b> </small> </label>
            <div class="col">
                <select class="form-control form-control @error('type_piece_identite') is-invalid @enderror" id="type_piece_identite" name="type_piece_identite" required value="{{ $etudiant->type_piece_identite }}" >
                    <option value>Type de pièce d'identité</option>
                    @include('partials.selectTypePieceIdentiteOptions', ['selected' => $etudiant->type_piece_identite ])
                </select>
                @error('type_piece_identite')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="numero_piece_identite" class="col-auto col-form-label">  <b>Numéro de la pièce d'identité:</b></label>
            <div class="col">
                <input id="numero_piece_identite" type="text" placeholder="Numéro de la pièce d'identité" class="form-control @error('numero_piece_identite') is-invalid @enderror" name="numero_piece_identite" value="{{ $etudiant->numero_piece_identite }}" required autocomplete="numero_piece_identite">
                @error('numero_piece_identite')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="nom" class="col-auto col-form-label">  <b>Nom:</b></label>
            <div class="col">
                <input id="nom" type="text" placeholder="Nom" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ $etudiant->nom }}" required autocomplete="nom">
                @error('nom')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="prenom" class="col-auto col-form-label">  <b>Prénom:</b></label>
            <div class="col">
                <input id="prenom" type="text" placeholder="Prénom" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ $etudiant->prenom }}" required autocomplete="prenom">
                @error('prenom')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="date_naissance" class="col-auto col-form-label">  <b>Date de naissance:</b> <small>(JJ/MM/AAAA)</small> <b>:</b> </label>
            <div class="col">
                <input id="date_naissance" pattern="(0?[1-9]|[12]\d|30|31)[^\w\d\r\n:](0?[1-9]|1[0-2])[^\w\d\r\n:](\d{4}|\d{2})" title="6 Caractères aumoins" type="text" placeholder="JJ/MM/AAAA" class="form-control @error('date_naissance') is-invalid @enderror" name="date_naissance" value="{{ $etudiant->date_naissance }}" required autocomplete="date_naissance">
                @error('date_naissance')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="pays_naissance" class="col-auto col-form-label">  <b>Pays de naissance:</b> </label>
            <div class="col">
                <select id="pays_naissance" class="form-control form-control @error('pays_naissance') is-invalid @enderror" name="pays_naissance" required value="{{ $etudiant->pays_naissance }}">
                    <option value>Pays de naissance</option>
                    @include('partials.selectPaysOptions', ['selected' => $etudiant->pays_naissance ])
                </select>
                @error('pays_naissance')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="ville_naissance" class="col-auto col-form-label">  <b>Ville de naissance:</b> </label>
            <div class="col">
                <input id="ville_naissance" type="text" placeholder="Ville de naissance" class="form-control @error('ville_naissance') is-invalid @enderror" name="ville_naissance" value="{{ $etudiant->ville_naissance }}" required autocomplete="ville_naissance">
                @error('ville_naissance')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="nationalite" class="col-auto col-form-label">  <b>Nationalité:</b> </label>
            <div class="col">
                <select  id="nationalite" class="form-control form-control @error('nationalite') is-invalid @enderror" name="nationalite" required value="{{ $etudiant->nationalite }}">
                    <option value>Nationalité</option>
                    @include('partials.selectNationaliteOptions', ['selected' => $etudiant->nationalite ])
                </select>
                @error('nationalite')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="coordones" class="col-auto col-form-label">  <b>Coordonnes:</b> </label>
            <div class="col">
                <input id="coordones" type="text" placeholder="Coordonnes" class="form-control @error('coordones') is-invalid @enderror" name="coordones" value="{{ $etudiant->coordones }}" required autocomplete="coordones">
                @error('coordones')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="pays_residence" class="col-auto col-form-label">  <b>Pays de résidence:</b> </label>
            <div class="col">
                <select  id="pays_residence" class="form-control form-control @error('pays_residence') is-invalid @enderror" name="pays_residence" required value="{{ $etudiant->pays_residence }}">
                    <option value>Pays de résidence</option>
                    @include('partials.selectPaysOptions', ['selected' => $etudiant->pays_residence ])
                </select>
                @error('pays_residence')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="ville_residence" class="col-auto col-form-label">  <b>Ville de résidence:</b> </label>
            <div class="col">
                <input id="ville_residence" type="text" placeholder="Ville de résidence" class="form-control @error('ville_residence') is-invalid @enderror" name="ville_residence" value="{{ $etudiant->ville_residence }}" required autocomplete="pays_residence">
                @error('ville_residence')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="code_postal" class="col-auto col-form-label">  <b>Code Postal:</b> </label>
            <div class="col">
                <input id="code_postal" type="text" placeholder="Code Postal" class="form-control @error('code_postal') is-invalid @enderror" name="code_postal" value="{{ $etudiant->code_postal }}" required autocomplete="code_postal">
                @error('code_postal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="adresse_postale" class="col-auto col-form-label">  <b>Adresse Postal:</b> </label>
            <div class="col">
                <input id="adresse_postale" type="text" placeholder="Adresse Postal" class="form-control @error('adresse_postale') is-invalid @enderror" name="adresse_postale" value="{{ $etudiant->adresse_postale }}" required autocomplete="adresse_postale">
                @error('adresse_postale')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="telephone" class="col-auto col-form-label">  <b>Téléphone:</b>  <small>(Y compris indicatifs) <b>:</b> </small> </label>
            <div class="col">
                <input id="telephone" type="text" placeholder="Téléphone" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ $etudiant->telephone }}" required autocomplete="telephone">
                @error('telephone')
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
