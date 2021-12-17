
<?php require_once "../elements/header.php"; ?>
<?php require_once "../db_link/config.php"; ?>


<!------------------- HTML ------------------->

<div class="card_register">
    <h1>Inscription</h1>

    <form class="card_register_content" method="post">
        <div class="inputs_left">
            <!-- champs Nom -->

            <div class="input_last_name" id="class_choose_nom"> 
                <p class="choose_Nom">Nom</p>    
                <input type="last_name" name="register_last_name" required>
            </div>

            <!-- champs Prénom -->
            
            <div class="input_first_name" id="class_choose_first_name">
                <p class="choose_first_name">Prénom</p>    
                <input type="first_name" name="register_first_name" required>
            </div>

            <!-- champs Email -->
            
            <div class="input_email_register" id="class_choose_email_register">
                <p class="choose-email_register" id="choose_email_register">Email</p>    
                <input type="email" name="register_email" required>
            </div>                

            <!-- champs Classe -->
            
            <div class="input_class" id="class_choose_class" >
                <p class="choose_class">Classe</p>    
                <input type="class" name="register_class" required>
            </div>
        </div>
        <div class="div_vertical_line">
            <span class="vertical_line"></span>
        </div>

        
        <div class="inputs_right"> 
            <!-- champs Password -->                
            
            <div class="input_password_register" id="class_choose_password_register">   
                <p class="choose_password_register" id="choose_password_register">Mot de passe</p>
                <input type="password" name="register_password" required>
            </div>

            <!-- champs Confirmation Password -->                
            
            <div class="input_confirmed_password_register" id="class_confirmed_password_register">   
                <p class="choose_password_register" id="choose_confirmed_password_register">Confirmation du Mot de passe</p>
                <input type="password" name="register_confirmed_password" required>
            </div>

            <!-- champs Captchat -->                
            
            <div class="input_captcha" id="class_captcha">   
                <p class="choose_captcha" id="choose_captcha">Captcha</p>
                <input type="captcha" id="id_input_choose_captcha" name="register_captcha">
            </div>


            <!-- champs bouton d'inscription -->     
            <div class="submit_button_register" >
                <button type="submit" name="register_submit">S'inscrire</button>
                
            </div>
            

            
        </div>
    </form>
</div>

<!------------------- HTML ------------------->

<?php


# vérifier que le bouton est appuyé 
/*
if(isset($_POST['register_submit'])){


    var_dump($_POST['register_last_name']);
    var_dump($_POST['register_first_name']);
    var_dump($_POST['register_email']);
    var_dump($_POST['register_class']);
    var_dump($_POST['register_password']);
    var_dump($_POST['register_confirmed_password']);
    var_dump($_POST['register_captcha']);

    # vérifier que le bouton est appuyé

}
*/

require_once "../db_link/config.php";

$error = null;

try{
    if (isset(($_POST['register_submit']))){

    
    $mdp_hash = password_hash($_POST['register_password'], PASSWORD_DEFAULT);
    $mdp_hash_confirmed = password_hash($_POST['register_confirmed_password'], PASSWORD_DEFAULT);

    if (password_verify($_POST['register_password'],$mdp_hash_confirmed)){

        $query = $pdo->prepare('INSERT INTO user (USER_NAME, USER_LASTNAME, USER_EMAIL, USER_PASSWORD, USER_ROLE, USER_HND) VALUES (:first_name, :last_name, :email, :psw, :roles, :hdn)');

        $query ->execute([
            'first_name' => $_POST['register_last_name'],
            'last_name' => $_POST['register_first_name'],
            'email' => $_POST['register_email'],
            'psw' => $mdp_hash,
            'roles' => 'Etudiant',
            'hdn' => $_POST['register_class']
        ]);
        $success = "Votre compte à bien été crée";


    }else{
        $erreur = "Veuillez écrire le même mot de passe dans les champs";
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
<?php if (isset($success)): ?>
<div class="alert-success">
    <?= $success?>
</div>
<?php endif ?>


<?php require "../elements/footer.php" ?>


