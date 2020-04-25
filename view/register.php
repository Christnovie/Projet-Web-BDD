<?php
/**
 * Title      : register.php
 * MVC Type   : view
 * Purpose    : view used to register a new user
 * Author     : Pascal.BENZONANA
 * Updated by : Nicolas.GLASSEY
 * Version    : 13-APR-2020
 */

$title ='Rent A Snow - Login/Logout';

ob_start();
?>
    <h1>S'inscrire</h1>
    <?php if ($registerErrorMessage != null) :?>
        <h5><span style="color:red"><?= $registerErrorMessage; ?></span></h5>
    <?php endif ?>
    <article>
        <form class='form' method='POST' action="index.php?action=register">

            <p>Pour vous inscrire chez Snows, nous vous prions de renseigner les champs suivants:</p>
            <div class="container">
                <label for="userEmail"><b>Adresse email</b></label>
                <input type="email" placeholder="Email address" name="inputUserEmailAddress" required>

                <label for="userPsw"><b>Mot de passe</b></label>
                <input type="password" placeholder="Mot de passe" name="inputUserPsw" required>

                <label for="psw-repeat"><b>Vérifier le mot de passe</b></label>
                <input type="password" placeholder="Mot de passe" name="inputUserPswRepeat" required>

                <p>En soumettant votre demande de compte, vous validez les conditions générales d'utilisation.<a href="https://termsfeed.com/blog/privacy-policies-vs-terms-conditions/">CGU et vie privée</a>.</p>
                <button type="submit" class="registerbtn">S'inscrire</button>
            </div>
        </form>
        <div class="container signin">
            <p>Déjà membre ? <a href="index.php?action=login">Se connecter</a>.</p>
        </div>
    </article>
<?php 
  $content = ob_get_clean();
  require 'gabarit.php';
?>