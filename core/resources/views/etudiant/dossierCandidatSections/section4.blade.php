<form method="POST" action="{{ $current_section['action'] }}">
    @csrf
    <div class="card-body mt-2">
        <h6>
            <b class="text-success">Documents</b>
            <button id="submit" type="submit" style="float:right" class="btn btn-sm btn-outline-info">
                <b> {{ __('Enregistrer les informations') }}</b>
            </button>
        </h6>
        <hr style="opacity: 0;">
        <!-- Form groups -->

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
