
<?php 
    $maxFormationsRecentes = 3;
    $formations_recentes = $educationsExperiencesEtudiant->formations_recentes;
    $formations_remplis = false;
    if ($formations_recentes && count($formations_recentes) != 0) $formations_remplis = true;
    else $formations_recentes = array();

    $maxDiplomesRecents = 3;
    $diplomes_recents = $educationsExperiencesEtudiant->diplomes_recents;
    $diplomes_remplis = false;
    if ($diplomes_recents && count($diplomes_recents) != 0) $diplomes_remplis = true;
    else $diplomes_recents = array();
    
    $maxExperiencesProfessionnelles = 6;
    $experiences_professionnelles = $educationsExperiencesEtudiant->experiences_professionnelles;
    $experiencesProfessionnelles_remplis = false;
    if ($experiences_professionnelles && count($experiences_professionnelles) != 0) $experiencesProfessionnelles_remplis = true;
    else $experiences_professionnelles = array();
?>
<div class="container px-5">
    <hr class="">
    <h6>
        <b class="text-success title">Educations et Expériences</b>
    </h6>
    <hr class="hide">
    <!-- Form groups -->

    <p>
        <b class="">Formations suivies durant les 3 dernières années précédant votre <br> candidature actuelle :</b>
    </p>
    <table class="table table-bordered table-sm text-center">
        <caption>
            @error('formations_recentes')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </caption>
        <thead class="text-white" style="background-color: #4FAC2E !important;">
            <tr> 
                <th scope="col">Année</th> 
                <th scope="col">Etablissements</th>
                <th scope="col">Filières</th>
                <th scope="col">Niveau</th>
                <th scope="col">Moyenne générale</th>
                <th class="none"><i  class="fa fa-edit"></i></th>
            </tr>
        </thead>
        <tbody id="formations_recentes" maxFormationsRecentes="{{ $maxFormationsRecentes }}">
            <input type="hidden" name="formations_recentes[]">
            @if($formations_remplis)
                @foreach($formations_recentes as $formation_recente)
                    <tr class="formation_recente">
                        <input type="hidden" name="formations_recentes[]" value="{{ json_encode($formation_recente) }}">
                        <th scope="row">
                            {{ $formation_recente['annee'] }}
                        </th>
                        <td>{{ $formation_recente['etablissement'] }}</td>
                        <td>{{ $formation_recente['filiere'] }}</td>
                        <td>{{ $formation_recente['niveau'] }}</td>
                        <td>{{ $formation_recente['moyenne'] }}</td>
                        <td class="none"><i onclick="deleteFormation(this)" class="fa fa-close text-danger" style="cursor: pointer;"></i></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        <tfoot class="none">
            @if (count($formations_recentes) < $maxFormationsRecentes)
                <tr id="add_formation">
                    <td>
                        <input id="add_formation_annee" type="text" placeholder="Année-Année" class="form-control" autocomplete="add_formation_annee">
                    </td>
                    <td>
                        <input id="add_formation_etablissement" type="text" placeholder="Etablissement" class="form-control" autocomplete="add_formation_etablissement">
                    </td>
                    <td>
                        <input id="add_formation_filiere" type="text" placeholder="Filière" class="form-control" autocomplete="add_formation_filiere">
                    </td>
                    <td>
                        <input id="add_formation_niveau" type="text" placeholder="Niveau" class="form-control" autocomplete="add_formation_niveau">
                    </td>
                    <td>
                        <input id="add_formation_moyenne" type="text" placeholder="Moyenne" class="form-control" autocomplete="add_formation_moyenne">
                    </td>
                    <td>
                        <button type="button" onclick="addFormation()" class="btn"> <i class="fa fa-plus"></i></button> 
                    </td>
                </tr>
            @endif
        </tfoot>
    </table>

    <h6>
        <b class="">Diplômes obtenus en ordre décroissant</b>
    </h6>
    <hr style="opacity: 0; margin-bottom: 0">
    <!-- Form groups -->
    <table class="table table-bordered table-sm text-center">
        <caption>
            @error('diplomes_recents')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </caption>
        <thead class="text-white" style="background-color: #4FAC2E !important;">
            <tr> 
                <th scope="col">Session</th> 
                <th scope="col">Nature du diplôme</th>
                <th scope="col">Série(Spécialité)</th>
                <th scope="col">Mention</th>
                <th scope="col">Moyenne générale</th>
                <th scope="col">Lieu d'obtention</th>
                <th class="none"><i  class="fa fa-edit"></i></th>
            </tr>
        </thead>
        <tbody id="diplomes_recents" maxDiplomesRecents="{{ $maxDiplomesRecents }}">
            <input type="hidden" name="diplomes_recents[]">
            @if($diplomes_remplis)
                @foreach($diplomes_recents as $diplome_recent)
                    <tr class="diplome_recent">
                        <input type="hidden" name="diplomes_recents[]" value="{{ json_encode($diplome_recent) }}">
                        <th scope="row">
                            {{ $diplome_recent['session'] }}
                        </th>
                        <td>{{ $diplome_recent['nature'] }}</td>
                        <td>{{ $diplome_recent['specialite'] }}</td>
                        <td>{{ $diplome_recent['mention'] }}</td>
                        <td>{{ $diplome_recent['moyenne'] }}</td>
                        <td>{{ $diplome_recent['lieu'] }}</td>
                        <td class="none"><i onclick="deleteDiplome(this)" class="fa fa-close text-danger" style="cursor: pointer;"></i></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        <tfoot class="none">
            @if (count($diplomes_recents) < $maxDiplomesRecents)
                <tr id="add_diplome">
                    <td>
                        <input id="add_diplome_session" type="text" placeholder="Année-Année" class="form-control" autocomplete="add_diplome_session">
                    </td>
                    <td>
                        <input id="add_diplome_nature" type="text" placeholder="Nature diplôme" class="form-control" autocomplete="add_diplome_nature">
                    </td>
                    <td>
                        <input id="add_diplome_specialite" type="text" placeholder="Spécialité" class="form-control" autocomplete="add_diplome_specialite">
                    </td>
                    <td>
                        <input id="add_diplome_mention" type="text" placeholder="Mention" class="form-control" autocomplete="add_diplome_mention">
                    </td>
                    <td>
                        <input id="add_diplome_moyenne" type="text" placeholder="Moyenne" class="form-control" autocomplete="add_diplome_moyenne">
                    </td>
                    <td>
                        <input id="add_diplome_lieu" type="text" placeholder="Lieu" class="form-control" autocomplete="add_diplome_lieu">
                    </td>
                    <td>
                        <button type="button" onclick="addDiplome()" class="btn"> <i class="fa fa-plus"></i></button> 
                    </td>
                </tr>
            @endif
        </tfoot>
    </table>

    <h6>
        <b class="">Expériences ou stages en entreprise</b>
    </h6>
    <p>Avez-vous exercé une ou plusisuers activités en entreprises ?</p>
    <b>Si oui :</b>
    <hr style="opacity: 0; margin-bottom: 0">
    <!-- Form groups -->
    <table class="table table-bordered table-sm text-center" >
        <caption>
            @error('formations_recentes')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </caption>
        <thead class="text-white" style="background-color: #4FAC2E !important;">
            <tr> 
                <th scope="col">Année</th> 
                <th scope="col">Poste occupé</th>
                <th scope="col">Entreprise</th>
                <th scope="col">Durée</th>
                <th class="none"><i  class="fa fa-edit"></i></th>
            </tr>
        </thead>
        <tbody id="experiences_professionnelles" maxExperiencesProfessionnelles="{{ $maxExperiencesProfessionnelles }}">
            <input type="hidden" name="experiences_professionnelles[]">
            @if($formations_remplis)
                @foreach($experiences_professionnelles as $experience_professionnelle)
                    <tr class="experience_professionnelle">
                        <input type="hidden" name="experiences_professionnelles[]" value="{{ json_encode($experience_professionnelle) }}">
                        <th scope="row">
                            {{ $experience_professionnelle['annee'] }}
                        </th>
                        <td>{{ $experience_professionnelle['poste'] }}</td>
                        <td>{{ $experience_professionnelle['entreprise'] }}</td>
                        <td>{{ $experience_professionnelle['duree'] }}</td>
                        <td class="none"><i onclick="deleteExperience(this)" class="fa fa-close text-danger" style="cursor: pointer;"></i></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        <tfoot class="none">
            @if (count($experiences_professionnelles) < $maxExperiencesProfessionnelles)
                <tr id="add_experience">
                    <td>
                        <input id="add_experience_annee" type="text" placeholder="Année" class="form-control" autocomplete="add_experience_annee">
                    </td>
                    <td>
                        <input id="add_experience_poste" type="text" placeholder="Poste" class="form-control" autocomplete="add_experience_poste">
                    </td>
                    <td>
                        <input id="add_experience_entreprise" type="text" placeholder="Entreprise" class="form-control" autocomplete="add_experience_entreprise">
                    </td>
                    <td>
                        <input id="add_experience_duree" type="text" placeholder="Durée" class="form-control" autocomplete="add_experience_duree">
                    </td>
                    <td>
                        <button type="button" onclick="addExperience()" class="btn"> <i class="fa fa-plus"></i></button> 
                    </td>
                </tr>
            @endif
        </tfoot>
    </table>

</div>