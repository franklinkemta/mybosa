@extends('etudiant.layout', ['title' => 'Mon dossier candidat'])

@section('content')
<div class="container">
    <div class="row justify-content-center " style="height: 100% !important;">
        
        <div class="col-md-10">
            <div class="card  mt-2">
                <div class="card-header text-center">
                    <b>MON DOSSIER CANDIDAT</b>
                    <hr>
                    <ul class="nav nav-tabs card-header-tabs flex-column flex-sm-row justify-content-center mt-1">
                        <li class="nav-item">
                            <a class="nav-link section-candidat {{ $section == 0 ? 'active' : '' }}" href="{{ url('etudiant/dossierCandidat?section=0') }}"> Infos générales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link section-candidat {{ $section == 1 ? 'active' : '' }}" href="{{ url('etudiant/dossierCandidat?section=1') }}">Infos sur les parents</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link section-candidat {{ $section == 2 ? 'active' : '' }}" href="{{ url('etudiant/dossierCandidat?section=2') }}">Education</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link section-candidat {{ $section == 3 ? 'active' : '' }}" href="{{ url('etudiant/dossierCandidat?section=3') }}">Expérience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link section-candidat {{ $section == 4 ? 'active' : '' }}" href="{{ url('etudiant/dossierCandidat?section=4') }}">A propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link section-candidat {{ $section == 5 ? 'active' : '' }}" href="{{ url('etudiant/dossierCandidat?section=5') }}">Documents </a>
                        </li>
                    </ul>
                </div>

                @switch($section)
                    @case(0)
                        @include('etudiant.dossierCandidatSections.section0')
                        @break
                    @case(1)
                        @include('etudiant.dossierCandidatSections.section1')
                        @break
                    @case(2)
                        @include('etudiant.dossierCandidatSections.section2')
                        @break
                    @case(3)
                        @include('etudiant.dossierCandidatSections.section3')
                        @break
                    @case(4)
                        @include('etudiant.dossierCandidatSections.section4')
                        @break
                    @case(5)
                        @include('etudiant.dossierCandidatSections.section5')
                        @break
                    @default
                        Dossier de candidature
                @endswitch
                
            </div>

        </div>
    </div>
</div>
@endsection
