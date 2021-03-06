<?php 
    $sections = array(
        ['id' => 0, 'icon' => '', 'name' => 'Infos générales', 'action' => route('storeDossierCandidatEtudiant'), 'href' => url('etudiant/dossierCandidat?section_id=0') ],
        ['id' => 1, 'icon' => '', 'name' => 'Infos sur les parents', 'action' => route('storeSection1DossierCandidatEtudiant'), 'href' => url('etudiant/dossierCandidat?section_id=1') ],
        ['id' => 2, 'icon' => '', 'name' => 'Education et Expérience', 'action' => route('storeSection2DossierCandidatEtudiant'), 'href' => url('etudiant/dossierCandidat?section_id=2') ],
        ['id' => 3, 'icon' => '', 'name' => 'A propos', 'action' => route('storeSection3DossierCandidatEtudiant'), 'href' => url('etudiant/dossierCandidat?section_id=3') ],
        ['id' => 4, 'icon' => '', 'name' => 'Documents', 'action' => route('storeSection4DossierCandidatEtudiant'), 'href' => url('etudiant/dossierCandidat?section_id=4') ],
        ['id' => 5, 'icon' => '<i class="fa fa-info"></i>', 'name' => '', 'action' => route('inscriptionSelectionFormationsEtudiant'), 'href' => url('etudiant/dossierCandidat?section_id=5') ],
    );
    $current_section = $sections[$section_id];
?>
@extends('etudiant.layout', ['title' => 'Mon dossier candidat - '.$current_section['name']])

@section('content')
<div class="container">
    <div class="row justify-content-center " style="height: 100% !important;">
        
        <div class="col-10">
            <div class="card  mt-2">
                <div class="card-header text-center">
                    <b>MON DOSSIER CANDIDAT</b>
                    <hr>
                    <ul class="nav nav-tabs card-header-tabs flex-column flex-sm-row justify-content-center mt-1">
                        @foreach ($sections as $section)
                            <li class="nav-item">
                                <a class="nav-link section-candidat {{ $section['id'] == $section_id ? 'active' : '' }}" href="{{ $section['href'] }}"> {!! $section['icon'] !!} {!! $section['name'] !!}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                @include('etudiant.dossierCandidatSections.section'.$section_id)
                
            </div>

        </div>
    </div>
</div>
@endsection
