<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style_register.css">
    <link rel="stylesheet" href="https://use.typekit.net/kma0may.css">
</head>
<body>
    
    <div class="card_register">
        <h1>Inscription</h1>

        <form class="card_register_content" method="post">

            
            <div  class="inputs_left">

                <!-- champs Nom -->

                <div class="input_last_name" id="class_choose_nom"> 
                    <p class="choose_Nom" >Nom</p>    
                    <input type="last_name" name="register_last_name">
                </div>     

                <!-- champs Prénom -->
                
                <div class="input_first_name" id="class_choose_first_name">
                    <p class="choose_first_name" >Prénom</p>    
                    <input type="first_name" name="register_first_name">
                </div>
                <!-- champs Email -->
                
                <div class="input_email_register" id="class_choose_email_register">
                    <p class="choose-email_register"  id="choose_email_register">Email</p>    
                    <input type="email" name="register_email">
                </div>                

                <!-- champs Classe -->
                
                <div class="input_class" id="class_choose_class" >
                    <p class="choose_class" >Classe</p>    
                    <input type="class" name="register_class">
                </div>
            </div>
            <div class="div_vertical_line">
                <span class="vertical_line"></span>
            </div>
            <div  class="inputs_right"> 

                <!-- champs Password -->                
                
                <div class="input_password_register" id="class_choose_password_register">   
                    <p class="choose_password_register" id="choose_password_register"> Mot de passe </p>
                    <input type="password" name="register_password">
                </div>

                <!-- champs Confirmation Password -->                
                
                <div class="input_confirmed_password_register" id="class_confirmed_password_register">   
                    <p class="choose_password_register" id="choose_confirmed_password_register"> Confirmation du Mot de passe </p>
                    <input type="password" name="register_confirmed_password">
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
        
   
</body>

</html>

<?php
$erreur = null;
if(isset($_POST['submit'])){
    var_dump($_POST['email']);
    var_dump($_POST['password']);
    

}