@extends('etudiant.layout', ['title' => 'Choisir ma formation'])

@section('content')

<div class="container-fluid" >
    <div class="row justify-content-center text-center" style="height: 100% !important;">
        <div class="col-md-10 mt-3">
            <div class="card" >
                <div class="card-header">
                    
                    <h5> <b> CHOISIR LA FORMATION SOUHAITEE </b></h5>
                    
                </div>

                <div class="card-body">

                    <div class="bs-stepper ">
                        <div class="bs-stepper-header" role="tablist">
                            <!-- your steps here -->
                                <div class="step" data-target="#part-1">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="part-1" id="part-1-trigger">
                                        <span class="bs-stepper-label">Formation</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#part-2">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="part-2" id="part-2-trigger">
                                        <span class="bs-stepper-label">Formations proposées</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#part-3">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="part-3" id="part-3-trigger">
                                        <span class="bs-stepper-label">Candidature</span>
                                    </button>
                                </div>
                            </div>
                            <div class="bs-stepper-content text-left pt-3">
                                <form action="#">
                                    @csrf
                                    <!-- your steps content here -->
                                    <div id="part-1" action="{{ route('get_diplomes') }}" class="content fade" role="tabpanel" aria-labelledby="part-1-trigger">
                                        @include('etudiant.formCandidatSteps.step1')
                                    </div>

                                    <div id="part-2" action="{{ route('get_formations') }}" class="content fade" role="tabpanel" aria-labelledby="part-2-trigger">
                                        @include('etudiant.formCandidatSteps.step2')
                                    </div>

                                    <div id="part-3" class="content fade" role="tabpanel" aria-labelledby="part-3-trigger">
                                        @include('etudiant.formCandidatSteps.step3')
                                    </div>

                                </form>


                            </div>
                    </div>


                </div>

                <div class="card-footer">
                    
                    <h6>MyBosa : Accompagnement pour vos études à l'étranger</h6>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection

