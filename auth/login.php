<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style_login.css">
    <link rel="stylesheet" href="https://use.typekit.net/kma0may.css">
</head>
<body>
    
    <div class="card_login">
        <h1>Connexion</h1>

        <form method="post">

            
            <div  class="inputs">
                <!-- champs Email -->
                
                <div class="input_email">
                    <p class="choose_email" id="choose_email"> Email</p>    
                    <input type="email" name="login_email">
                </div>
                <!-- champs Password -->                

                
                <div class="choose_password">   
                    <p class="choose_password" id="choose_password"> Mot de passe </p>
                    <input type="password" name="login_password">
                </div>
                <!-- champs bouton d'inscription -->     
                <div class="submit_button" >
                    
                    <button type="submit" name="login_submit"> Connexion</button>
                    <P class="connexion" id="submit_connexion"> Pas encore de compte ? S'inscrire </P>
                    
                </div>

                
            </div>
        </form>
    </div>
        
   
</body>

</html>
<?php
if(isset($_POST['submit'])){
    var_dump($_POST['email']);
    var_dump($_POST['password']);

}

?>

