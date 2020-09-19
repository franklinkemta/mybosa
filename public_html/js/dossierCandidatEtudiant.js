var maxFormationsRecentes = null;

var maxDiplomesRecents = null;

var maxExperiencesProfessionnelles = null;

$(document).ready(function () {

  // INITIALIZE DATAS
  maxFormationsRecentes = $('#formations_recentes').attr('maxFormationsRecentes');

  maxDiplomesRecents = $('#diplomes_recents').attr('maxDiplomesRecents');

  maxExperiencesProfessionnelles = $('#experiences_professionnelles').attr('maxExperiencesProfessionnelles');

  checkFormationsCount = function() {
    // check if is the max authorised numbers of items
    const count_formations = $('#formations_recentes').find('.formation_recente').length;
    console.info('check formations count', count_formations);
    if (count_formations < maxFormationsRecentes)$('#add_formation').show();
    else $('#add_formation').hide();
  }

  checkDiplomesCount = function() {
    // check if is the max authorised numbers of items
    const count_diplomes = $('#diplomes_recents').find('.diplome_recent').length;
    console.info('check diplomes count', count_diplomes);
    if (count_diplomes < maxDiplomesRecents)$('#add_diplome').show();
    else $('#add_diplome').hide();
  }

  checkExperiencesCount = function() {
    // check if is the max authorised numbers of items
    const count_experiences = $('#experiences_professionnelles').find('.experience_professionnelle').length;
    console.info('check experiences count', count_experiences);
    if (count_experiences < maxExperiencesProfessionnelles)$('#add_experience').show();
    else $('#add_experience').hide();
  }

  // Add Formation Récente
  addFormation = function() {
    
    const regex_annee = RegExp(/^20\d{2}-20\d{2}$/, 'g'); // regex for 20AA-20AA
    const regex_etablissement = RegExp(/^[a-zA-Z\s]*$/, 'g'); // regex for other text cells
    const regex_filiere = RegExp(/^[a-zA-Z\s]*$/, 'g'); // regex for other text cells
    const regex_niveau = RegExp(/^[a-zA-Z0-9\s]*$/, 'g'); // regex for other text cells
    const regex_moyenne = RegExp(/^[0-9]*.[0-9]*$/, 'g'); // regex for moyenne as a float

    var formation = {
      annee: null,
      etablissement: null,
      filiere: null,
      niveau: null,
      moyenne: null
    }
    var add_formation_error = false;

    // add new formation table rows from inputs cells
    var add_formation_annee = $('#add_formation_annee');
    var add_formation_etablissement = $('#add_formation_etablissement');
    var add_formation_filiere = $('#add_formation_filiere');
    var add_formation_niveau = $('#add_formation_niveau');
    var add_formation_moyenne = $('#add_formation_moyenne');

    
    if(add_formation_annee.val() && regex_annee.test(add_formation_annee.val())){
      formation.annee = add_formation_annee.val() // its a JSonStringifyed object
      add_formation_annee.removeClass("is-invalid");
    } else{
      add_formation_error = true;
      add_formation_annee.addClass("is-invalid");
    }

    if(add_formation_etablissement.val() && regex_etablissement.test(add_formation_etablissement.val())){
      formation.etablissement = add_formation_etablissement.val() // its a JSonStringifyed object
      add_formation_etablissement.removeClass("is-invalid");
    } else{
      add_formation_error = true;
      add_formation_etablissement.addClass("is-invalid");
    }

    if(add_formation_filiere.val() && regex_filiere.test(add_formation_filiere.val())){
      formation.filiere = add_formation_filiere.val() // its a JSonStringifyed object
      add_formation_filiere.removeClass("is-invalid");
    } else{
      add_formation_error = true;
      add_formation_filiere.addClass("is-invalid");
    }

    if(add_formation_niveau.val() && regex_niveau.test(add_formation_niveau.val())){
      formation.niveau = add_formation_niveau.val() // its a JSonStringifyed object
      add_formation_niveau.removeClass("is-invalid");
    } else{
      add_formation_error = true;
      add_formation_niveau.addClass("is-invalid");
    }

    if(add_formation_moyenne.val() && regex_moyenne.test(add_formation_moyenne.val())){
      formation.moyenne = add_formation_moyenne.val() // its a JSonStringifyed object
      add_formation_moyenne.removeClass("is-invalid");
    } else{
      add_formation_error = true;
      add_formation_moyenne.addClass("is-invalid");
    }

    if (!add_formation_error) {
      console.warn('addFormationRecente', formation);
      add_formation_row = `
        <tr class="formation_recente" id="${ formation.id }">
          <input type="hidden" name="formations_recentes[]" value='${JSON.stringify(formation)}'>
          <th scope="row">${formation.annee}</th>
          <td>${formation.etablissement}</td>
          <td>${formation.filiere}</td>
          <td>${formation.niveau}</td>
          <td>${formation.moyenne}</td>
          <td><i onclick="deleteFormation(this)" class="fa fa-close text-danger" style="cursor: pointer;" ></i></td>
        </tr>
      `;
      $('#formations_recentes').append(add_formation_row);

      // check the formations items count
      checkFormationsCount();

      // clear the inputs
      add_formation_annee.val('');
      add_formation_etablissement.val('');
      add_formation_filiere.val('');
      add_formation_niveau.val('');
      add_formation_moyenne.val('');
    }
    
  }

  // Add Diplome Recent
  addDiplome = function() {
    const regex_session = RegExp(/^20\d{2}-20\d{2}$/, 'g'); // regex for 20AA-20AA
    const regex_nature = RegExp(/^[a-zA-Z\s]*$/, 'g'); // regex for other text cells
    const regex_specialite = RegExp(/^[a-zA-Z\s]*$/, 'g'); // regex for other text cells
    const regex_mention = RegExp(/^[a-zA-Z\s]*$/, 'g'); // regex for other text cells
    const regex_moyenne = RegExp(/^[0-9]*.[0-9]*$/, 'g'); // regex for moyenne as a float
    const regex_lieu = RegExp(/^[a-zA-Z\s]*$/, 'g'); // regex for other text cells

    var diplome = {
      session: null,
      nature: null,
      specialite: null,
      mention: null,
      moyenne: null,
      lieu: null
    }
    var add_diplome_error = false;

    // add new diplome table rows from inputs cells
    var add_diplome_session = $('#add_diplome_session');
    var add_diplome_nature = $('#add_diplome_nature');
    var add_diplome_specialite = $('#add_diplome_specialite');
    var add_diplome_mention = $('#add_diplome_mention');
    var add_diplome_moyenne = $('#add_diplome_moyenne');
    var add_diplome_lieu = $('#add_diplome_lieu');

    
    if(add_diplome_session.val() && regex_session.test(add_diplome_session.val())){
      diplome.session = add_diplome_session.val() // its a JSonStringifyed object
      add_diplome_session.removeClass("is-invalid");
    } else{
      add_diplome_error = true;
      add_diplome_session.addClass("is-invalid");
    }

    if(add_diplome_nature.val() && regex_nature.test(add_diplome_nature.val())){
      diplome.nature = add_diplome_nature.val() // its a JSonStringifyed object
      add_diplome_nature.removeClass("is-invalid");
    } else{
      add_diplome_error = true;
      add_diplome_nature.addClass("is-invalid");
    }

    if(add_diplome_specialite.val() && regex_specialite.test(add_diplome_specialite.val())){
      diplome.specialite = add_diplome_specialite.val() // its a JSonStringifyed object
      add_diplome_specialite.removeClass("is-invalid");
    } else{
      add_diplome_error = true;
      add_diplome_specialite.addClass("is-invalid");
    }

    if(add_diplome_mention.val() && regex_mention.test(add_diplome_mention.val())){
      diplome.mention = add_diplome_mention.val() // its a JSonStringifyed object
      add_diplome_mention.removeClass("is-invalid");
    } else{
      add_diplome_error = true;
      add_diplome_mention.addClass("is-invalid");
    }

    if(add_diplome_moyenne.val() && regex_moyenne.test(add_diplome_moyenne.val())){
      diplome.moyenne = add_diplome_moyenne.val() // its a JSonStringifyed object
      add_diplome_moyenne.removeClass("is-invalid");
    } else{
      add_diplome_error = true;
      add_diplome_moyenne.addClass("is-invalid");
    }

    if(add_diplome_lieu.val() && regex_lieu.test(add_diplome_lieu.val())){
      diplome.lieu = add_diplome_lieu.val() // its a JSonStringifyed object
      add_diplome_lieu.removeClass("is-invalid");
    } else{
      add_diplome_error = true;
      add_diplome_lieu.addClass("is-invalid");
    }

    if (!add_diplome_error) {
      console.warn('addDiplomeRecent', diplome);
      add_diplome_row = `
        <tr class="diplome_recent" id="${ diplome.id }">
          <input type="hidden" name="diplomes_recents[]" value='${JSON.stringify(diplome)}'>
          <th scope="row">${diplome.session}</th>
          <td>${diplome.nature}</td>
          <td>${diplome.specialite}</td>
          <td>${diplome.mention}</td>
          <td>${diplome.moyenne}</td>
          <td>${diplome.lieu}</td>
          <td><i onclick="deleteDiplome(this)" class="fa fa-close text-danger" style="cursor: pointer;" ></i></td>
        </tr>
      `;
      $('#diplomes_recents').append(add_diplome_row);

      // check the diplomes items count
      checkDiplomesCount();

      // clear the inputs
      add_diplome_session.val('');
      add_diplome_nature.val('');
      add_diplome_specialite.val('');
      add_diplome_mention.val('');
      add_diplome_moyenne.val('');
      add_diplome_lieu.val('');
    }
  }

  addExperience = function() {
    const regex_annee = RegExp(/^20\d{2}$/, 'g'); // regex for 20AA-20AA
    const regex_poste = RegExp(/^[a-zA-Z\s]*$/, 'g'); // regex for other text cells
    const regex_entreprise = RegExp(/^[a-zA-Z\s]*$/, 'g'); // regex for other text cells
    const regex_duree = RegExp(/^[a-zA-Z0-9\s]*$/, 'g'); // regex for other text cells

    var experience = {
      annee: null,
      poste: null,
      entreprise: null,
      duree: null
    }
    var add_experience_error = false;

    // add new experience table rows from inputs cells
    var add_experience_annee = $('#add_experience_annee');
    var add_experience_poste = $('#add_experience_poste');
    var add_experience_entreprise = $('#add_experience_entreprise');
    var add_experience_duree = $('#add_experience_duree');

    
    if(add_experience_annee.val() && regex_annee.test(add_experience_annee.val())){
      experience.annee = add_experience_annee.val() // its a JSonStringifyed object
      add_experience_annee.removeClass("is-invalid");
    } else{
      add_experience_error = true;
      add_experience_annee.addClass("is-invalid");
    }

    if(add_experience_poste.val() && regex_poste.test(add_experience_poste.val())){
      experience.poste = add_experience_poste.val() // its a JSonStringifyed object
      add_experience_poste.removeClass("is-invalid");
    } else{
      add_experience_error = true;
      add_experience_poste.addClass("is-invalid");
    }

    if(add_experience_entreprise.val() && regex_entreprise.test(add_experience_entreprise.val())){
      experience.entreprise = add_experience_entreprise.val() // its a JSonStringifyed object
      add_experience_entreprise.removeClass("is-invalid");
    } else{
      add_experience_error = true;
      add_experience_entreprise.addClass("is-invalid");
    }

    if(add_experience_duree.val() && regex_duree.test(add_experience_duree.val())){
      experience.duree = add_experience_duree.val() // its a JSonStringifyed object
      add_experience_duree.removeClass("is-invalid");
    } else{
      add_experience_error = true;
      add_experience_duree.addClass("is-invalid");
    }

    if (!add_experience_error) {
      console.warn('addExperienceProfessionnelle', experience);
      add_experience_row = `
        <tr class="experience_professionnelle" id="${ experience.id }">
          <input type="hidden" name="experiences_professionnelles[]" value='${JSON.stringify(experience)}'>
          <th scope="row">${experience.annee}</th>
          <td>${experience.poste}</td>
          <td>${experience.entreprise}</td>
          <td>${experience.duree}</td>
          <td><i onclick="deleteExperience(this)" class="fa fa-close text-danger" style="cursor: pointer;" ></i></td>
        </tr>
      `;
      $('#experiences_professionnelles').append(add_experience_row);

      // check the experiences items count
      checkExperiencesCount();

      // clear the inputs
      add_experience_annee.val('');
      add_experience_poste.val('');
      add_experience_entreprise.val('');
      add_experience_duree.val('');
    }
  }

  deleteFormation = function (element) {
    $(element).closest('.formation_recente').remove();
    // check the formations items count
    checkFormationsCount();
  }

  deleteDiplome = function (element) {
    $(element).closest('.diplome_recent').remove();
    // check the diplomes items count
    checkDiplomesCount();
  }

  deleteExperience = function (element) {
    $(element).closest('.experience_professionnelle').remove();
    // check the experiences items count
    checkExperiencesCount();
  }

  $('#photo').hover(
    function() {
      $('#photo_preview').fadeIn(800);
    }, function() {
      $('#photo_preview').fadeOut(100);
    }
  );

})