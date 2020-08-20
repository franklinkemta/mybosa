<div class="form-group">
    <label>  <b>Niveau d'admission</b></label><br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" name="niveau" type="radio" id="niveau1" value="NIVEAU1">
        <label class="form-check-label" for="niveau1">1ère année</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" name="niveau" type="radio" id="niveau2" value="NIVEAU2">
        <label class="form-check-label" for="niveau2">2ème année</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" name="niveau" type="radio" id="niveau3" value="NIVEAU3">
        <label class="form-check-label" for="niveau3">3ème année</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" name="niveau" type="radio" id="niveau4" value="NIVEAU4">
        <label class="form-check-label" for="niveau4">4ème année</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" name="niveau" type="radio" id="niveau5" value="NIVEAU5">
        <label class="form-check-label" for="niveau5">5ème année</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" name="niveau" type="radio" id="doctorat" value="DOCTORAT">
        <label class="form-check-label" for="doctorat">Doctorat</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" name="niveau" type="radio" id="specialite" value="SPECIALITE">
        <label class="form-check-label" for="specialite">Spécialité</label>
    </div>
    @error('niveau')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="domaine">  <b>Domaine</b></label>
    <select id="domaine" name="domaine" class="form-control">
        <option selected>Choisir le domaine</option>
        <option>...</option>
    </select>
    @error('domaine')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>

<div class="form-group">
    <label for="diplome">  <b>Diplome préparé</b></label>
    <select id="diplome" name="diplome" class="form-control">
        <option selected>Choisir le diplôme</option>
        <option>...</option>
    </select>
    @error('diplome')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group row text-center">
    <div class="col-md-12">
        <button  onclick="nextStep()" type="button" class="btn _btn-success text-white" style="background-color: #4FAC2E" >Suivant</button>
    </div>
</div>

