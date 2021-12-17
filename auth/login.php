
<?php require_once "../elements/header.php"; ?>
<?php require_once "../db_link/config.php"; ?>


<!------------------- HTML ------------------->


<div class="login_content">
    <div class="card_login">
        <h1>Connexion</h1>
        <form method="post" class="card_login_content">
            <div class="inputs">
                <!-- champs Email -->
                
                <div class="input_email">
                    <p class="choose_email" id="choose_email">Email</p>    
                    <input type="email" name="login_email">
                </div>

                <!-- champs Password -->                

                <div class="choose_password">   
                    <p class="choose_password" id="choose_password">Mot de passe</p>
                    <input type="password" name="login_password">
                </div>

                <!-- champs bouton d'inscription -->  

                <div class="submit_button" >
                    <button type="submit" name="login_submit">Connexion</button>
                    <p class="connexion" id="submit_connexion">Pas encore de compte ? S'inscrire</p>
                </div>
            </div>
        </form>
    </div>
</div>


<!------------------- HTML ------------------->

<?php
if (isset($_POST['login_submit'])){

    $verif_email = $pdo->prepare('SELECT USER_ID, USER_ROLE, USER_PASSWORD FROM user WHERE USER_EMAIL = :mail');
    $verif_email ->execute([':mail' => $_POST['login_email']]);
    $resultat = $verif_email->fetch();

    try{
        if (password_verify($_POST['login_password'], $resultat->USER_PASSWORD))
    {
        session_start();
        $_SESSION['role'] = $resultat->USER_ROLE;
        $_SESSION['id_user'] = $resultat->USER_ID;
        if($resultat->USER_ROLE === 'Etudiant'){
            header('Location: ../index.php');
        }
    }else{
        $erreur = "Erreur1";
    }

    } catch (PDOException $e) {
        $error = $e->getMessage();
    }
}



?>

<?php if (isset($erreur)): ?>
<div class="alert alert-danger">
    <?= $erreur?>
</div>

<?php endif ?>


<?php require_once "../elements/footer.php" ?>
