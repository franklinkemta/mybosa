var diplomesParams =  {
  niveau: null,
  domaine: null,
  limit: 20
};

var formationsParams = {
  diplome_id: null,
  pays: null,
  ville: null,
  prix: null,
  limit: 100
}

const maxFormationSelection = 2;
var selectedFormations = [];

$(document).ready(function () {
    var stepperEl = $('.bs-stepper')[0];
    var stepper = new Stepper(stepperEl, {
      linear: false,
      animation: true
    });
    
    nextStep = function ()
    {
      stepper.next();
    }

    prevStep = function ()
    {
      stepper.previous();
    }

    toStep = function (step)
    {
      stepper.to(step);
    }

    resetStepper = function ()
    {
      stepper.reset();
    }

    destroyStepper = function ()
    {
      stepper.destroy();
    }

    stepperEl.addEventListener('show.bs-stepper', function (event) {
    // You can call preventDefault to stop the rendering of your step
    // event.preventDefault()
        console.warn('show step', event.detail.indexStep)
    })

    stepperEl.addEventListener('shown.bs-stepper', function (event) {
        console.warn('step shown')
    })

    // CHECK IF THE USER HAS ALREADY MADE HIS SELECTION

    // STEP 1 FORMULAIRE CANDIDATURE

    setDiplomesParams = function(key, val) {
      diplomesParams[key] = val;
      console.warn('setDiplomesParams', diplomesParams);
      if (diplomesParams.domaine) getDiplomes();
    }

    getDiplomes = function () 
    {
      console.warn('getDiplomes', diplomesParams);
      // const HOST = window.location.origin;
      // const API_URL = HOST + "/api/etudiant/diplomes";
      $("#loader_diplomes").show();

      const API_URL = $("#part-1").attr("action");
      console.warn('API_URL', API_URL);
      // moved getJSON to ajax    
      $.ajax({
        type: 'GET',
        url: API_URL,
        data: { ...diplomesParams, token: $('meta[name="jwt-token"]').attr('content') },
        async: true,
        dataType: 'json',
        headers: {
          // 'Authorization': 'Bearer ' + $('meta[name="jwt-token"]').attr('content')
        }
      }).done(function (jsonData) {
          var items = ["<option disabled selected value>Choisir le diplôme</option>"];

          $.each(jsonData.data, function( key, val ) {
            items.push( `<option value="${val.id}" data-info='${JSON.stringify(val)}'>${val.intitule} </option>` );
            // console.warn(key, val);
          });
  
          $("#diplome").html(items.join(""));
        })               
        .fail(function (jqXHR, textStatus, err) {
          console.error(err);
        })
        .always(function () { 
          setFormationsParams('diplome_id', null);
          $("#loader_diplomes").hide(); 
        });
    }

    // STEP 2 FORMULAIRE CANDIDATURE
    setFormationsParams = function(key, val) {
      if (key == 'prix') {
        switch (val) {
          case '30000DH': formationsParams[key] = [0, 30000];
            break;
          case '45000DH': formationsParams[key] = [30001, 45000];
            break;
          case '60000DH': formationsParams[key] = [40001, 60000];
            break;
            case '100000DH': formationsParams[key] = [60001, 100000];
            break;
          default:
            formationsParams[key] = null;
            break;
        }
      } else {
        formationsParams[key] = val;
      }
      console.warn('setFormationsParams', formationsParams);
      
      if (formationsParams.diplome_id) {
        // change the title of the step 2
        // console.log(formationsParams.diplome_id);

        const selected_diplome = $('#diplome').find(':selected').data('info');
        intitule_diplome = selected_diplome ? selected_diplome.intitule : 'Formations répondants aux critères';
        console.log('intitule_diplome', intitule_diplome);
        $('.intitule_diplome').html(intitule_diplome.toUpperCase());

        $('#step1NextBtn').attr('disabled', false); // because the diplome is ready
        $('#step2NextBtn').attr('disabled', true); // because the selection was reset

        // get the list of formations
        getFormations();
      } else $('#step1NextBtn').attr('disabled', true);
    }

    getFormations = function () 
    {
      console.warn('getFormations', formationsParams);
      // const HOST = window.location.origin;
      // const API_URL = HOST + "/api/etudiant/diplomes";
      $("#loader_formations").show();

      const API_URL = $("#part-2").attr("action");
      console.warn('API_URL', API_URL);
      // moved getJSON to ajax    
      $.ajax({
        type: 'GET',
        url: API_URL,
        data: { ...formationsParams, token: $('meta[name="jwt-token"]').attr('content') },
        async: true,
        dataType: 'json',
      }).done(function (jsonData) {
          var items = [];
          $.each(jsonData.data, function( key, val ) {
            items.push(`
              <tr>
                <th scope="row">
                  <div class="form-check">
                    <input class="form-check-input" onchange="selectFormation()" name="formation" type="checkbox" id="formation_${val.id}" value="${val.id}" data-info='${JSON.stringify(val)}'>
                    <label class="form-check-label" for="formation_${val.id}">${val.intitule_filiere}</label>
                  </div>
                </th>
                <td>${val.diplome_niveau.toLowerCase()}</td>
                <td>
                  <btn class="btn btn-dark btn-sm" 
                    data-toggle="tooltip" 
                    data-html="true" 
                    title="${val.etablissement_nom}" 
                    disabled>
                    ${val.etablissement_sigle}
                  </btn>
                </td>
                <td>${val.specialite ? val.specialite : '/'}</td>
                <td>${val.duree ? val.duree.toLowerCase() : ''}</td>
                <td>${val.prix ? val.prix : ''}</td>
                <td>${val.etablissement_ville ? val.etablissement_ville.toLowerCase() : ''}</td>
              </tr>
            `);
            // console.warn(key, val);
          });

          $("#formations").html(items.join(""));

        })               
        .fail(function (jqXHR, textStatus, err) {
          console.error(err);
        })
        .always(function () { 
          $("#loader_formations").hide(); 
        });
    }

    selectFormation = function() {
      // console.warn('selectFormation', val);
      // clear selectionFormations array
      selectedFormations = [];

      // Get all the checked formations
      selectedFormations = $('input[name="formation"]:checked').map(function() {
        return $(this).data('info'); // .val();
      }).get();
      console.warn('selectedFormations', selectedFormations);
      if (selectedFormations.length != 0 && selectedFormations.length <= maxFormationSelection) $('#step2NextBtn').attr('disabled', false);
      else $('#step2NextBtn').attr('disabled', true); // also check the max length
    }

    saveSelection = function (API_URL) {
      // save only the formations ids // cancelled
      /* const selection_formations = selectedFormations.map(function(formation) {
        return formation.id; // .val();
      });
      */
      console.warn('saveSelection', selectedFormations);

      $.ajax({
        type: 'POST',
        url: API_URL,
        data: { selection_formations: selectedFormations, token: $('meta[name="jwt-token"]').attr('content') },
        async: true,
        dataType: 'json',
        beforeSend: function() {
          $('#step2NextBtn').attr('disabled', true);
          $("#loader_formations").show();
        }
      }).done(function (jsonData) {
          console.log(jsonData);
          nextStep();
        })               
        .fail(function (jqXHR, textStatus, err) {
          console.error(err);
          $('#step2NextBtn').attr('disabled', false);
        })
        .always(function() {
          $("#loader_formations").hide();
        })
    }

})