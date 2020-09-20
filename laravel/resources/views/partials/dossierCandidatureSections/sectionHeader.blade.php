<div class="container">
    <div class="row text-center">
        <div class="card bg-dark text-white " >
            <img class="card-img"  src="{{ asset('images/cover_dossier_candidature_etudiant.jpeg') }}" alt="Card image">
            <div class="card-img-overlay">
                <h3 class="card-title mt-4"> <b class="text-white"> DOSSIER DE CANDIDATURE</b></h3>
                <div style="margin-top: 35%">
                    <b class="mt-5 disabled color" style="font-weight: 900; text-decoration: none;" >
                        <img src="{{ asset('favicon.png') }}" width="60" height="60" alt="">
                        MyBosa
                    </b>
                </div>
            </div>
            <div class="card-footer" style="background-color:#499F09">
                
            </div>
        </div>
    </div>
    
    <div class="row photo_section" style="">
        <span style="font-weight:; font-size: 15px; position: absolute; margin-top: -46px; margin-left:10px; "> No. DOSSIER CANDIDATURE : <b>  # {{ $candidature->id }}</b></span>
        <div class="col no-space no-space">    
            <div class="card transparent mt-4">
                    <div class="card-header pt-4 pl-5 text-white" >
                        <h3 style="font-weight: 900; " class="" > Etude Souhaitée </h3>
                    </div>
            </div>
        </div>
        <div class="col-auto"><img id="photo" src="{{ asset($documentsEtudiant->photo_url) }}" alt=""></div>
    </div>
    
</div>
