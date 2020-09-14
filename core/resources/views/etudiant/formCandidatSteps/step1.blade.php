<h6 class="text-center py-4 bg-light">
    <i class="fa fa-edit"></i> <span class="intitule_diplome"> Choix de votre formation </span> 
</h6>
<div class="form-group">
    <label>  <b>Niveau d'admission</b></label><br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" onchange="setDiplomesParams('niveau', this.value)" name="niveau" type="radio" id="niveau1" value="1ERE_ANNEE">
        <label class="form-check-label" for="niveau1">1ère année</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" onchange="setDiplomesParams('niveau', this.value)" name="niveau" type="radio" id="niveau2" value="2EME_ANNEE">
        <label class="form-check-label" for="niveau2">2ème année</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" onchange="setDiplomesParams('niveau', this.value)" name="niveau" type="radio" id="niveau3" value="3EME_ANNEE">
        <label class="form-check-label" for="niveau3">3ème année</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" onchange="setDiplomesParams('niveau', this.value)" name="niveau" type="radio" id="niveau4" value="4EME_ANNEE">
        <label class="form-check-label" for="niveau4">4ème année</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" onchange="setDiplomesParams('niveau', this.value)" name="niveau" type="radio" id="niveau5" value="5EME_ANNEE">
        <label class="form-check-label" for="niveau5">5ème année</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" onchange="setDiplomesParams('niveau', this.value)" name="niveau" type="radio" id="doctorat" value="DOCTORAT">
        <label class="form-check-label" for="doctorat">Doctorat</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" onchange="setDiplomesParams('niveau', this.value)" name="niveau" type="radio" id="specialite" value="SPECIALITE">
        <label class="form-check-label" for="specialite">Spécialité</label>
    </div>
</div>

<div class="form-group">
    <label for="domaine">  <b>Domaine</b></label>
    <select onchange="setDiplomesParams('domaine', this.value)" class="form-control" id="domaine" name="domaine" required value="{{ old('domaine') }}" >
        <option disabled selected value>Choisir le domaine</option>
        <option value="COMMERCE_GESTION">Commerce et gestion</option>
        <option value="LOGISTIQUE_TRANSPORT">Ecoles de transport et logistique</option>
        <option value="SCIENCES_TECHNIQUES">Sciences et techniques</option>
        <option value="SCIENCES_SANTE">Sciences de la santé</option>
    </select>
</div>

<div class="form-group">
    <label for="diplome"> <b>Diplome préparé</b></label>  <small id="loader_diplomes" style="display:none;" ><i class="fa fa-spinner ml-2 mr-1"></i>Patientez...</small>  
    <select onchange="setFormationsParams('diplome_id', this.value)" id="diplome" name="diplome" class="form-control">
        <option disabled selected value> Choisir le diplôme</option>
    </select>
</div>


<div class="form-group row text-center">
    <div class="col-md-12">
        <button id="step1NextBtn" disabled  onclick="nextStep()" type="button" class="btn _btn-success text-white" style="background-color: #4FAC2E" >Suivant</button>
    </div>
</div>

