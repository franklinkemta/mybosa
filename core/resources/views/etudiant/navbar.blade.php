<nav class="navbar navbar-light bg-white">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0 text-secondary" href="{{ Request::url() }}">
        <i class="fa fa-th-large mr-2"></i>
        Etudiant : {{ $title }}
    </a>
    <ul class="navbar-nav px-3">
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fa fa-bell"></i>
                {{ Auth::user()->email }}
            </a>
        </li>
    </ul>
</nav>
 