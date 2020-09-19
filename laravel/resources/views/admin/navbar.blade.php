<nav class="navbar navbar-dark bg-dark " >
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{ Request::url() }}">
        <i class="fa fa-th-large mr-2"></i>
        Admin - {{ $title }}
    </a>
    <ul class="navbar-nav px-3">
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fa fa-cog"></i>
                {{ __('Reglages') }}
            </a>
        </li>
    </ul>
</nav>
