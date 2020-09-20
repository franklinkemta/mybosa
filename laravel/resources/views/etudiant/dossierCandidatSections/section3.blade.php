<form method="POST" action="{{ $current_section['action'] }}">
    @csrf
    <div class="card-body mt-2">
        <h6>
            <b class="">Langues parlées</b>
            <button id="submit" type="submit" style="float:right" class="btn btn-sm btn-outline-info">
                <b> {{ __('Enregistrer les informations') }}</b>
            </button>
        </h6>
        <hr style="opacity: 0;">
        <!-- Form groups -->

        <div class="form-group row">
            <div class="form-check col">
                <label class="form-check-label" for="langue_arabe">Arabe</label>
                <input class="form-check-input ml-1" name="langue_arabe" type="checkbox" id="langue_arabe" value="{{ $aProposEtudiant->langue_arabe ? 'on' : 'off' }}" {{ $aProposEtudiant->langue_francais ? 'checked' : '' }}>
            </div>
            <div class="form-check col">
                <label class="form-check-label" for="langue_francais">Français</label>
                <input class="form-check-input ml-1" name="langue_francais" type="checkbox" id="langue_francais" value="{{ $aProposEtudiant->langue_francais ? 'on' : 'off' }}" {{ $aProposEtudiant->langue_francais ? 'checked' : '' }}>
            </div>
            <div class="form-check col">
                <label class="form-check-label" for="langue_anglais">Anglais</label>
                <input class="form-check-input ml-1" name="langue_anglais" type="checkbox" id="langue_anglais" value="{{ $aProposEtudiant->langue_anglais ? 'on' : 'off' }}" {{ $aProposEtudiant->langue_anglais ? 'checked' : '' }}>
            </div>
            <div class="form-check col">
                <label class="form-check-label" for="langue_espagnol">Espagnol</label>
                <input class="form-check-input ml-1" name="langue_espagnol" type="checkbox" id="langue_espagnol" value="{{ $aProposEtudiant->langue_espagnol ? 'on' : 'off' }}" {{ $aProposEtudiant->langue_espagnol ? 'checked' : '' }}>
            </div>
            <div class="form-check col">
                <label class="form-check-label" for="langue_allemand">Allemand</label>
                <input class="form-check-input ml-1" name="langue_allemand" type="checkbox" id="langue_allemand" value="{{ $aProposEtudiant->langue_allemand ? 'on' : 'off' }}" {{ $aProposEtudiant->langue_allemand ? 'checked' : '' }}>
            </div>
        </div>

        <div class="form-group row">
            <label for="langue_autres" class="col-auto col-form-label">  Autres (à préciser) : </label>
            <div class="col">
                <input id="langue_autres" type="text" placeholder="Autres langues" class="form-control @error('langue_autres') is-invalid @enderror" name="langue_autres" value="{{ $aProposEtudiant->langue_autres }}" autocomplete="langue_autres">
                @error('langue_autres')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <hr style="opacity: 0;">

        <div class="form-group row">
            <label for="sejours_etranger" class="col-auto col-form-label">  <b>Avez-vous déjà éffectué des séjours à l'étranger ? </b></label>
            <div class="form-check form-check-inline ">
                <input class="form-check-input" name="sejours_etranger" type="radio" id="sejours_etranger_oui" value="1" {{ $aProposEtudiant->sejours_etranger == true ? 'checked' : '' }}>
                <label class="form-check-label" for="sejours_etranger_oui">Oui</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" name="sejours_etranger" type="radio" id="sejours_etranger_non" value="0" {{ $aProposEtudiant->sejours_etranger == false ? 'checked' : '' }}>
                <label class="form-check-label" for="sejours_etranger_non">Pas encore</label>
            </div>
            @error('sejours_etranger')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group row">
            <label for="pays_sejours_etranger" class="col-auto col-form-label">  <b>Si oui dans quel(s) pays ? </b></label>
            <div class="col">
                <input id="pays_sejours_etranger" type="text" placeholder="Pays" class="form-control @error('pays_sejours_etranger') is-invalid @enderror" name="pays_sejours_etranger" value="{{ $aProposEtudiant->pays_sejours_etranger }}" autocomplete="pays_sejours_etranger">
                @error('pays_sejours_etranger')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
 
        <div class="form-group row">
            <label for="loisirs" class="col-auto col-form-label">  <b>Vos loisirs ? </b></label>
            <div class="col">
                <input id="loisirs" type="text" placeholder="Loisirs" class="form-control @error('loisirs') is-invalid @enderror" name="loisirs" value="{{ $aProposEtudiant->loisirs }}" autocomplete="loisirs">
                @error('loisirs')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="sports" class="col-auto col-form-label">  <b>Quel(s) sport(s) pratiquez-vous ? </b></label>
            <div class="col">
                <input id="sports" type="text" placeholder="Sports" class="form-control @error('sports') is-invalid @enderror" name="sports" value="{{ $aProposEtudiant->sports }}" autocomplete="sports">
                @error('sports')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="autres_activites" class="col-auto col-form-label">  <b>Quels autres activités pratiquez-vous ? </b></label>
            <div class="col">
                <input id="autres_activites" type="text" placeholder="Autres activités" class="form-control @error('autres_activites') is-invalid @enderror" name="autres_activites" value="{{ $aProposEtudiant->autres_activites }}" autocomplete="autres_activites">
                @error('autres_activites')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="motivations_candidatures">  <b>Quels sont vos motivations pour votre canditure ? </b></label>
            <textarea id="motivations_candidatures" class="form-control @error('motivations_candidatures') is-invalid @enderror" name="motivations_candidatures" autocomplete="motivations_candidatures"  rows="2" maxlength="300">{{ $aProposEtudiant->motivations_candidatures }}</textarea>
            @error('motivations_candidatures')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="projets_carriere">  <b>Quels sont vos projets de carrière ? </b></label>
            <textarea id="projets_carriere" class="form-control @error('projets_carriere') is-invalid @enderror" name="projets_carriere" autocomplete="projets_carriere"  rows="2" maxlength="300">{{ $aProposEtudiant->projets_carriere }}</textarea>
            @error('projets_carriere')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
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
