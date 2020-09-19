
<h6 class="text-center py-4 bg-light">
    <i class="fa fa-graduation-cap"></i> <span class="intitule_diplome"> Formations répondants aux critères </span> 
</h6>
<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="pays"> <b>Pays</b></label>
            <select disabled onchange="setFormationsParams('pays', this.value)" class="form-control" name="pays" id="pays" required value="{{ old('pays') }}">
                <option disabled value>Sélectionner le pays</option>
                @include('partials.selectPaysOptions', ['selected' => 'MA' ])
            </select>
        </div>
    </div>

    <div class="col">
        <div class="form-group">
            <label for="ville"> <b>Ville</b></label>
            <select onchange="setFormationsParams('ville', this.value)" class="form-control" name="ville" id="ville" required value="{{ old('ville') }}">
                <option selected value>Toutes les villes</option>
                <option value="CASABLANCA">Casablanca </option>
                <option value="RABAT">Rabat</option>
                <option value="SETTAT">Settat</option>
                <option value="MARRAKECH">Marrakech</option>
                <option value="TANGER">Tanger</option>
            </select>
        </div>
    </div>

    <div class="col">
        <div class="form-group">
            <label for="ville"> <b>Prix (en Dirhams) </b></label>
            <select onchange="setFormationsParams('prix', this.value)" class="form-control" name="prix" id="prix" required value="{{ old('prix') }}">
                <option selected value>Tous les prix</option>
                <option value="30000DH"> < 30 000 DH </option>
                <option value="45000DH">30 000 - 45 000 DH</option>
                <option value="60000DH">45 000 - 60 000 DH</option>
                <option value="100000DH"> > 60 000 DH</option>
            </select>
        </div>
    </div>
</div>

<hr>
<h6 class="text-left py-2">
    <b>Sélectionner les formations auxquelles vous souhaitez postuler </b> <small id="loader_formations" style="display:none;"><i class="fa fa-spinner ml-2 mr-1"></i>Patientez...</small>
</h6>

<table class="table form-group" style="min-height:200px">
    <thead class="thead-light">
        <tr>  
            <th scope="col">Formation</th>
            <th scope="col">Niveau</th>
            <th scope="col">Etablissement</th>
            <th scope="col">Spécialité</th>
            <th scope="col">Durée</th>
            <th scope="col">Prix(dh)</th>
            <th scope="col">Ville</th>
        </tr>
    </thead>
    <tbody id="formations" class="mt-3">
    </tbody>
</table>



<div class="form-group row text-center">
    <div class="col-md-12">
        <button  onclick="prevStep()" type="button" class="btn btn-light" >Précédent</button>
        <button  id="step2NextBtn" disabled onclick="saveSelection('{{ route('save_selection_formations') }}')" type="button" class="btn _btn-success text-white" style="background-color: #4FAC2E" >Enregistrer ma sélection</button>
    </div>
</div>

