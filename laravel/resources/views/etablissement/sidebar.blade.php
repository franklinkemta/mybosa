<div class="col-2 d-none d-md-block  sidebar">
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
                Etablissement
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{ Route::currentRouteName() == 'candidaturesEtablissement' ? 'active' : '' }}" href="{{ route('candidaturesEtablissement') }}">
            <i class="fa fa-bar-chart mr-1"></i>
                Candidatures
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'etudiantsEtablissement' ? 'active' : '' }}" href="{{ route('etudiantsEtablissement') }}">
            <i class="fa fa-user mr-2"></i>
                Etudiants
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'formationsEtablissement' ? 'active' : '' }}" href="{{ route('formationsEtablissement') }}">
            <i class="fa fa-calendar mr-2"></i>
                Formations
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