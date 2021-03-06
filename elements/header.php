<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.typekit.net/kma0may.css">
    <link rel="icon" href="favicon.svg" type="image/svg">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style_register.css">
    <link rel="stylesheet" href="./style_login.css">

    <title>Challenge | SIO2 SLAM</title>
</head>

    <header>
    <?php session_start(); ?>
            <nav id= "test" class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="./index.php"><img src="./components/logo.svg/" alt=""></a>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="./index.php">Accueil</a>
                            </li>

                        <?php if(isset($_SESSION['con'])){ ?>

                            <li class="nav-item">
                                <a class="nav-link" href="./equip_view.php">Mes √©quipements</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="./equip_register.php">Nouvel √©quipement</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="./extra_infos.php">Informations suppl√©mentaires</a>
                            </li>
                        </ul>



                            <ul class="navbar-nav d-flex">
                                <li class="nav-item">
                                    <a class="nav-link" href="./logout.php">Deconnexion</a>
                                </li>
                            </ul>

                        <?php }else{ ?>

                            <ul class="navbar-nav d-flex">
                                <li class="nav-item">
                                    <a class="nav-link" href="./login.php">Connexion</a>
                                </li>
                            </ul>
                        <?php } ?>

                        
                    </div>
                </div>
            </nav>   
    </header>
