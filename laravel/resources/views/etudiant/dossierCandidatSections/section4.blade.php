<?php 
    $photo_url = $documentsEtudiant->photo_url;
    $piece_identite_url = $documentsEtudiant->piece_identite_url;
    $autres_documents_url = $documentsEtudiant->autres_documents_url;
?>
<form method="POST" action="{{ $current_section['action'] }}" enctype="multipart/form-data">
    @csrf
    <div class="card-body mt-2" style="min-height:60vh;">
        <h6>
            <b class="text-success">Documents</b>
            <button id="submit" type="submit" style="float:right" class="btn btn-sm btn-outline-info">
                <b> {{ __('Enregistrer les informations') }}</b>
            </button>
        </h6>
        <hr style="opacity: 0;">

        <!-- Form groups -->
        <div class="input-group my-3">
            <label for="photo" class="col-auto col-form-label">  <b>Votre photo: </b></label>
            <div class="custom-file">
                <input type="file" accept="image/png,image/jpeg"  id="photo" name="photo" class="custom-file-input form-control @error('photo') is-invalid @enderror" >
                <label class="custom-file-label" for="photo"> {{ $photo_url ? 'Uploader une nouvelle photo' : 'Sélectionner photo' }} : Format Images, Max 2 Mo </label>
            </div>
            @if($photo_url)
                <div class="input-group-append">
                    <a class="btn btn-outline-secondary"
                        href="{{ asset($photo_url) }}" target="_blank"
                        data-toggle="tooltip" 
                        data-html="true" 
                        title="Télécharger" 
                    ><span class="text-success mr-2">Uploadé</span><i class="fa fa-download"></i></a>
                </div>
            @endif
            @error('photo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        @if($photo_url)
            <div id="_photo_preview_" _style="display: none; margin-top: 5px;" class="row justify-content-center">
                <img  class="card-img-top" src="{{ asset($photo_url) }}" style="border: solid 1px #E0E1E3; background-color: #E0E1E3; height: 170px; width: 132px;" alt="Photo enregistrée">
            </div>
        @endif

        <hr style="opacity: 0;">
        
        <div class="input-group mt-3">
            <label for="piece_identite" class="col-auto col-form-label">  <b>Pièce d'identité: </b></label>
            <div class="custom-file">
                <input type="file" accept="image/png,image/jpeg,.pdf" id="piece_identite" name="piece_identite" class="custom-file-input form-control @error('piece_identite') is-invalid @enderror" >
                <label class="custom-file-label" for="piece_identite"> {{ $piece_identite_url ? 'Uploader à nouveau le piece_identite ' : 'Sélectionner une image ou un PDF' }} : Formats Images/PDF, Max 2 Mo </label>
            </div>
            @if($piece_identite_url)
                <div class="input-group-append">
                    <a class="btn btn-outline-secondary"
                        href="{{ asset($piece_identite_url) }}" target="_blank"
                        data-toggle="tooltip" 
                        data-html="true" 
                        title="Télécharger" 
                    ><span class="text-success mr-2">Uploadé</span><i class="fa fa-download"></i></a>
                </div>
            @endif
            @error('piece_identite')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <hr style="opacity: 0;">
        
        <div class="input-group mt-3">
            <label for="autres_documents" class="col-auto col-form-label">  <b>Vos documents: </b></label>
            <div class="custom-file">
                <input type="file" accept=".pdf,.zip" id="autres_documents" name="autres_documents" class="custom-file-input form-control @error('autres_documents') is-invalid @enderror" >
                <label class="custom-file-label" for="autres_documents"> {{ $autres_documents_url ? 'Uploader à nouveau les documents ' : 'Sélectionner un fichier' }} : Formats ZIP/PDF, Max 5 Mo </label>
            </div>
            @if($autres_documents_url)
                <div class="input-group-append">
                    <a class="btn btn-outline-secondary"
                        href="{{ asset($autres_documents_url) }}" target="_blank"
                        data-toggle="tooltip" 
                        data-html="true" 
                        title="Télécharger" 
                    ><span class="text-success mr-2">Uploadé</span><i class="fa fa-download"></i></a>
                </div>
            @endif
            @error('autres_documents')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <p class="col-12 pt-2 text-secondary">
                <i>Uploader une archive au format .Zip ou un PDF contenant autres documents et diplômes nécessaires:</i> <br> <br>
                <i>Bulletins de Terminal, Relevé de notes du Baccalaureat, Relevés de notes Semestre 1,2,3,4,5,6,7,8 </i>  <br>
                Attestations de réussite de Licence, Master si obtenus
            </p>
        </div>

    </div>

    <div class="card-footer">
        <div class="form-group row mb-0 text-center">
            <div class="col-md-12 ">
                <button id="submit" type="submit" class="btn btn-info">
                    <b> {{ __('Enregistrer les informations') }}</b>
                </button>
            </div>
        </div>
    </div>
</form>
