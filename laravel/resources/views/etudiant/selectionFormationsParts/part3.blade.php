<h5 class="text-center text-info py-4 bg-light">
    <i class="fa fa-info"></i> <span> Votre sélection a été enregistrée </span> 
</h5>


<div class="row text-center">
    @if (Auth::user()->etudiant->profil_complet)
        <div class="col-md-12">
            <h6> Soumettre votre candidature pour les formations sélectionnées</h6>
        </div>
        <div class="col-md-12">
            <p>
                Si vous souhaitez éditer votre profil candidat avant de soumettre votre candidature cliquez ici 
                <a href="{{ route('dossierCandidatEtudiant') }}" class="btn btn-sm btn-outline-secondary my-2"> <i class="fa fa-edit"></i> Modifier mon dossier de candidat </a>
            </p>
        </div>
        
    @else
        <div class="col-md-12 py-2">
            <h6> <b> Prochaine étape > </b> Completer mon dossier candidat</h6>
        </div>
        <div class="col-md-12">
            <p>
                {{ Auth::user()->etudiant->prenom }} vous devez maintenant completer votre dossier candidat en fournissant les informations et documents nécessaires pour votre demande d'admission <br>
            </p>
        </div>
    @endif
</div>


<div class="row text-center">
    <div class="col-md-12">
        @if (Auth::user()->etudiant->profil_complet)
            <a href="{{ route('inscriptionSelectionFormationsEtudiant') }}" class="btn _btn-success text-white my-2" style="background-color: #4FAC2E"> <i class="fa fa-share-square"></i> SOUMETTRE MA CANDIDATURE </a>
            <br> <i>En cliquant sur ce boutton vous reconnaissez que les informations renseignées sont vraies </i>
        @else
            <a href="{{ route('dossierCandidatEtudiant') }}" class="btn btn-info my-2"> <i class="fa fa-edit"></i> Completer mon dossier </a>
        @endif
    </div>
</div>

