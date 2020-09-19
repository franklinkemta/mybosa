
<div class="left-sidebar">

    <ul class="nav flex-column sidebar-nav">
        <li class="nav-item text-center navbar-brand">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('favicon.png') }}" width="60" height="60" alt="">
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
            <i class="fa fa-th-large mr-2"></i>
                Accueil étudiant
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'candidaturesEtudiant' ? 'active' : '' }}" href="{{ route('candidaturesEtudiant') }}">
            <i class="fa fa-graduation-cap"></i>
                Mes candidatures
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'dossierCandidatEtudiant' ? 'active' : '' }}" href="{{ route('dossierCandidatEtudiant') }}">
            <i class="fa fa-user mr-2"></i>
                Dossier candidat
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out mr-1"></i>
                Déconnexion
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
        
    </ul>

</div>