@include('etudiant.header', ['title' => $title])
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <!-- Sidebar -->
            <div class="col-md-2  sidebar d-none d-sm-block">
                @include('etudiant.sidebar')
            </div>
            <!-- Main view -->
            <div class="col-md-10 offset-md-2 h-100" style="padding: 0; background-color: #E0E1E3;  min-height: 100vh !important">
                <!-- Navbar -->
                @include('etudiant.navbar')
                <!-- Page content -->
                @yield('content')
            </div>
            
        </div>
    </div>

@include('etudiant.footer')
