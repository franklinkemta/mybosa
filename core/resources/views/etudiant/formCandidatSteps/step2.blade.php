<div class="form-group">
    <label for="pays"> <b>Pays</b></label>
    <select class="form-control" name="pays" id="pays" required value="{{ old('pays') }}">
        <option value="MAROC">(+212) Maroc</option>
    </select>
    @error('pays')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="ville"> <b>Ville</b></label>
    <select class="form-control" name="ville" id="ville" required value="{{ old('ville') }}">
        <option value="CASABLANCA">Casablanca </option>
        <option value="RABAT">Rabat</option>
        <option value="SETTAT">Settat</option>
        <option value="MARRAKECH">Marrakech</option>
        <option value="TANGER">Tanger</option>
    </select>
    @error('ville')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="ville"> <b>Prix (en Dirhams) </b></label>
    <select class="form-control" name="prix" id="prix" required value="{{ old('prix') }}">
        <option value="30000DH"> <= 30 000 DH </option>
        <option value="40000DH">30 000 - 40 000 DH</option>
        <option value="50000DH">40 000 - 50 000 DH</option>
        <option value="60000DH"> >= 60 000 DH</option>
    </select>
    @error('ville')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group row text-center">
    <div class="col-md-12">
        <i class="fa fa-spinner"></i> Ecoles répondants aux critères
    </div>
</div>

<div class="form-group row px-3 py-2 bg-light">
    <label> <b>Sélectionner les écoles auxquelles vous souhaitez postuler </b></label>
    <div class="form-check col-md-10">
        <input class="form-check-input" name="ecole[]" type="checkbox" id="ecole1" value="ESCA">
        <label class="form-check-label" for="ecole1">ESCA Casablanca </label>
    </div>
    <div class="form-check col-md-10">
        <input class="form-check-input" name="ecole[]" type="checkbox" id="ecole1" value="IGA">
        <label class="form-check-label" for="ecole1">IGA Casablanca </label>
    </div>
    <div class="form-check col-md-10">
        <input class="form-check-input" name="ecole[]" type="checkbox" id="ecole1" value="SUPINFO">
        <label class="form-check-label" for="ecole1">SUP Info Casablanca </label>
    </div>
    <div class="form-check col-md-10">
        <input class="form-check-input" name="ecole[]" type="checkbox" id="ecole1" value="IGA">
        <label class="form-check-label" for="ecole1">SUP Info Casablanca </label>
    </div>
    <div class="form-check col-md-10">
        <input class="form-check-input" name="ecole[]" type="checkbox" id="ecole1" value="EFET">
        <label class="form-check-label" for="ecole1">Efet Casablanca</label>
    </div>
    <div class="form-check col-md-10">
        <input class="form-check-input" name="ecole[]" type="checkbox" id="ecole1" value="FSTSETTAT">
        <label class="form-check-label" for="ecole1">FST Settat</label>
    </div>
    @error('ecole')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group row text-center">
    <div class="col-md-12">
        <button  onclick="prevStep()" type="button" class="btn btn-light" >Précédent</button>
        <button  onclick="nextStep()" type="button" class="btn _btn-success text-white" style="background-color: #4FAC2E" >Suivant</button>

    </div>
</div>

