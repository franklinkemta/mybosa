<?php
    $etudiant = Auth::user()->etudiant;
    $selection_formations =  $etudiant->selection_formations;
    $choix_formation = $selection_formations && count($selection_formations) != 0;
?>

<div class="card-body justify-content-center text-center" style="min-height:60vh;">
    -- <b > STATUS</b>  -- 
    <p class="my-4">
            @if ($etudiant->profil_complet)
                @if ($choix_formation)
                    <b class="text-success">Félicitations ! Vous pouvez maintenant envoyer votre candidature</b>
                @else
                    <b class="text-info">Avez vous déja sélectionné vos formations ?</b>
                @endif
            @else
                <b class="text-warning">Dossier incomplet : Vérifiez que vous avez fourni les informations qui vous ont été demandé !</b>
            @endif
        </p>
    @if ($choix_formation)
        <table class="table table-bordered" style="min-height:100px;">
            <thead class="thead-light">
                <tr> 
                    <th scope="col">Niveau</th> 
                    <th scope="col">Formation</th>
                    <th scope="col">Etablissement</th>
                    <th scope="col">Ville</th>
                </tr>
            </thead>
            <tbody >
                @foreach($selection_formations as $formation)
                    <tr id="{{ $formation['id'] }}">
                        <td>{{ ucwords(str_replace('_', ' ', strtolower($formation['diplome_niveau']))) }} </td>
                        <th scope="row">
                            {{ $formation['intitule_filiere'] }}
                        </th>
                        <td>
                            <btn class="btn btn-dark btn-sm" 
                                data-toggle="tooltip" 
                                data-html="true" 
                                title="{{ $formation['etablissement_nom'] }}" 
                                disabled>
                                {{ $formation['etablissement_sigle'] }}
                            </btn>
                        </td>
                        <td>{{ $formation['etablissement_ville'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('selectionFormationsEtudiant') }}" class="btn btn-light mb-3"> <i class="fa fa-edit"></i> Modifier ma sélection de formation </a>
        <p> <b> Prochaine étape > </b> <br>
            @if ($etudiant->profil_complet)
                <a href="{{ route('inscriptionSelectionFormationsEtudiant') }}" class="btn text-white mt-3" style="background-color: #4FAC2E"> <i class="fa fa-arrow-right"></i> Soumettre ma candidature  </a>
                <br><br> <i>En cliquant sur ce boutton vous reconnaissez que les informations renseignées sont vraies </i>
            @else
                Assurez vous d'avoir rempli chaque section de votre dossier
            @endif
        </p>
    @else
        <p> Un instant {{ $etudiant->nom_complet }} ! Il semble que vous n'ayez pas encore fait de sélection de formation </p>
        <a href="{{ route('selectionFormationsEtudiant') }}" class="btn btn-outline-info my-2"> <i class="fa fa-edit"></i> Faire ma sélection maintenant </a>
    @endif

</div>

<div class="card-footer">
    <div class="form-group row mb-0 text-center">
        <div class="col-md-12">
             <b class=""> <i> MATRICULE: #{{ $etudiant->id }}</i> </b> 
        </div>
    </div>
</div>