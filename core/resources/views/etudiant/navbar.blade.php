<nav class="navbar navbar-light bg-white">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0 text-secondary" href="{{ Request::url() }}">
        <i class="fa fa-th-large mr-2"></i>
        Etudiant > {{ $title }}
    </a>
    <ul class="navbar-nav px-3">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dossierCandidatEtudiant') }}">
                <i class="fa fa-user"></i>
                {{ Auth::user()->etudiant->prenom }} {{ Auth::user()->etudiant->nom }}
            </a>
        </li>
    </ul>
</nav>
 