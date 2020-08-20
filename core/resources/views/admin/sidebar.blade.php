<div class="col-md-2 d-none d-md-block  sidebar">
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
            <a class="nav-link active" href="#">
            <i class="fa fa-bar-chart mr-2"></i>
                Candidatures
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="#">
            <i class="fa fa-university mr-2"></i>
                Ecoles
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