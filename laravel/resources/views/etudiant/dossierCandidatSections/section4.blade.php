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

        <div class="input-group mt-3">
            <label for="photo" class="col-auto col-form-label">  <b>Photo: </b></label>
            <div class="custom-file">
                <input type="file"  id="photo" name="photo" class="custom-file-input form-control @error('password') is-invalid @enderror" >
                <label class="custom-file-label" for="photo"> {{ $documentsEtudiant->photo_url ? 'Sélectionner une nouvelle photo' : 'Sélectionner photo' }} </label>
            </div>
            <div class="input-group-append">
                <a class="btn btn-outline-secondary"
                    href="{{ $documentsEtudiant->photo }}" target="_blank"
                    data-toggle="tooltip" 
                    data-html="true" 
                    title="Afficher la photo" 
                ><i class="fa fa-download"></i></a>
            </div>
            @error('photo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div id="photo_preview" style="display: none; margin-top: 5px;" class="row justify-content-center">
            <img  class="card-img-top" src="{{ asset($documentsEtudiant->photo_url) }}" style="border: solid 1px #E0E1E3; background-color: #E0E1E3; height: 170px; width: 132px;" alt="Photo enregistrée">
        </div>

        <hr style="opacity: 0;">
        

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
