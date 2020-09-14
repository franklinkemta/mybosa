<h6 class="text-center py-4 bg-light">
    <i class="fa fa-user"></i> <span class="intitule_diplome"> Choix de votre formation </span> 
</h6>


<div class="form-group">
    <label for="identite"> <b>Identité </b> </label>
    <input type="text" placeholder="Saisissez votre identité (Telle qu'indiquée sur le passeport)" class="form-control" name="identite" id="identite" required autofocus value="{{ old('identite') }}">
    @error('identite')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="identite"> <b>Filiation </b> </label>
    <input type="text" placeholder="Filiation" class="form-control" name="identite" id="identite" required autofocus value="{{ old('identite') }}">
    @error('identite')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="identite"> <b>Parcour </b> </label>
    <input type="text" placeholder="Parcour" class="form-control" name="identite" id="identite" required autofocus value="{{ old('identite') }}">
    @error('identite')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>


<div class="form-group row text-center">
    <div class="col-md-12">
        <button  onclick="prevStep()" type="button" class="btn btn-light" >Précédent</button>
        <button  onclick="" type="button" class="btn _btn-success text-white" style="background-color: #4FAC2E" >Soumettre</button>

    </div>
</div>

