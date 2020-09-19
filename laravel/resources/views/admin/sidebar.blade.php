<div class="col-2 d-none d-md-block  sidebar">
  <div class="left-sidebar">
    
    <ul class="nav flex-column sidebar-nav">
        <li class="nav-item text-center navbar-brand">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('favicon.png') }}" width="60" height="60" alt="">
            </a>
        </li>
        <li class="nav-item my-3 ">
            <a class="nav-link search" href="#">
            <i class="fa fa-search mr-2"></i>
                Rechercher
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
            <i class="fa fa-th-large mr-2"></i>
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{ Route::currentRouteName() == 'candidaturesAdmin' ? 'active' : '' }}" href="{{ route('candidaturesAdmin') }}">
            <i class="fa fa-bar-chart mr-1"></i>
                Candidatures
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'etudiantsAdmin' ? 'active' : '' }}" href="{{ route('etudiantsAdmin') }}">
            <i class="fa fa-user mr-2"></i>
                Etudiants
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'etablissementsAdmin' ? 'active' : '' }}" href="{{ route('etablissementsAdmin') }}">
            <i class="fa fa-university mr-1"></i>
                Etablissements
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'formationsAdmin' ? 'active' : '' }}" href="{{ route('formationsAdmin') }}">
            <i class="fa fa-calendar mr-2"></i>
                Formations
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'diplomesAdmin' ? 'active' : '' }}" href="{{ route('diplomesAdmin') }}">
            <i class="fa fa-graduation-cap "></i>
                Diplômes
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out mr-2"></i>
                Déconnexion
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>

  </div>
</div>