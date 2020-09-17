
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Specific page js Imported Js -->
    @if (Route::currentRouteName() == 'selectionFormationsEtudiant')
      <script src="{{ asset('js/bs-stepper.min.js') }}"></script>
      <script src="{{ asset('js/selectionFormationsEtudiant.js') }}"></script>
    @endif
    @if (Route::currentRouteName() == 'dossierCandidatEtudiant')
      <script src="{{ asset('js/dossierCandidatEtudiant.js') }}"></script>
    @endif
    <script src="{{ asset('js/etudiant.js') }}"></script>
  </body>
</html>