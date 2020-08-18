<div class="sign_in_form">

    <div class="head_form">
        <a href="" class="closeForm">x</a>
        <p>Connectez-vous à votre espace MB</p>
        
    </div>


    <form action="{{ route('login') }}" method="POST" >
        @csrf
        <label for="typeCompte" >
            <input class="radio_btn" type="radio" placeholder="Entrez votre adresse mail" name="typeCompte" value="etudiant" checked="checked">
            Étudiant
    
            <input class="radio_btn" type="radio" placeholder="Entrez votre adresse mail" name="typeCompte" value="conseiller">
            Conseiller
            <input class="radio_btn" type="radio" placeholder="Entrez votre adresse mail" name="typeCompte" value="etablissement">
            Établissement
        </label>

        <label for="mail">

        <input class="textForm" type="email" placeholder="Entrez votre adresse mail" value="{{ old('email') }}"  name="email" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </label>


        <label for="password">

        <input type="password" class="textForm"  placeholder="Entrez un mot de passe" name="password" required autocomplete="current-password"> <br>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </label>
        
        <button type="submit" name="submit">Se Connecter</button>
    </form>
    <div class="form_foot">
    <p>Vous n'avez  pas de compte ? <a href="{{ route('typeCompte') }}">S'inscrire</a></p>
    </div>


</div>




