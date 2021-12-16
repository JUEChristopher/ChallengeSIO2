
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


phpinfo();

$verif_email = $pdo->query('SELECT USER_EMAIL FROM user WHERE USER_ID="1"');
$resultat_2 = $verif_email->fetchAll();

$verif_password = $pdo->query('SELECT USER_PASSWORD FROM user');
$resultat = $verif_password->fetchAll();
print_r($resultat[0]->USER_PASSWORD);

$error = null;

try{
    if (isset(($_POST['login_submit']))){
         if (($_POST['login_email'] === $verif_email) && ($_POST['login_password'] === $verif_password)){
             echo("MIIIIIIIIIIAAAAAAAAAAAAAAAAAAM");

            header('location: index.php');
            exit();

    }else{
        $erreur = "Erreur1";
    }
   
}

} catch (PDOException $e) {
    $error = $e->getMessage();
}

?>

<?php if (isset($erreur)): ?>
<div class="alert alert-danger">
    <?= $erreur?>
</div>
<?php endif ?>


<?php require_once "../elements/footer.php" ?>


