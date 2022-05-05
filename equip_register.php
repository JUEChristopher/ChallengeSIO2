<?php require './elements/header.php' ?>

<?php require './db_link/config.php' ?>

<?php 

$type_laptop = false;
$form = false;
if(isset($_POST['e_type'])){
    if($_POST['e_type'] === 'laptop'){
        $type_laptop = true;
    }
    $form = true;
}




?>
<div class="register_content">
    <div class="register_content_left">
        <h2>Nouvel équipement</h2>
        <img src="./components/undraw_equip_register.svg" alt="">
    </div>


    <?php if($form): ?>

        <div class="register_card">
            <form action="" method="post" class="register_form">

                <div class="type_tittle">
                    <h3> <?= $_POST['e_type'] ?> </h3>
                </div>
                
                <div class="equip_input" id="input_equip_ram">
                    <label for="ram">Mémoire RAM (en Go)</label>
                    <input type="text" name="ram" id="equip_ram" placeholder="16" required>
                </div>

                <div class="equip_input" id="input__storage">
                    <label for="storage">Capacité stockage (en Go)</label>
                    <input type="text" name="storage" id="equip_storage" placeholder="512" required>
                </div>

                <div class="equip_input" id="input_equip_os">
                    <label for="os">Système d'exploitation (OS)</label>
                    <input type="text" name="os" id="equip_os" placeholder="Windows Famille" required>
                </div>

                <?php if($type_laptop): ?>
                    <div class="equip_input" id="input_equip_provision">
                        <label for="os">Fourni par la région</label>
                        <input type="hidden" name="provision" value=0 id="equip_provision" >
                        <div class="checkbox_laptop">
                            <input type="checkbox" name="provision" value=1 id="equip_provision" >
                        </div>
                        

                    </div>

                <?php endif; ?>

                <div class="form_button">
                    <input type="submit" name="resultat_equip" value="Ajouter">
                    <input type="hidden" name="e_type" value="<?= $_POST['e_type'] ?>">
                </div>
            </form>
        </div>
        <?php
        if(isset($_POST['resultat_equip'])) {
            if($_POST['e_type'] === 'laptop') {
                try {
                $requete_verif_update_laptop = "DELETE FROM laptop where USER_ID = :id";
                $verif_update_laptop = $pdo->prepare($requete_verif_update_laptop);
                $verif_update_laptop->execute([':id' => $_SESSION['id_user']]);
                } catch (Exception $e) {
                    echo 'Exception reçue : ',  $e->getMessage(), "\n";
                }
                


                $query = $pdo->prepare("INSERT INTO laptop (USER_ID, USER_ID_HAVE, LAPTOP_RAM, LAPTOP_STORAGE, LAPTOP_OS, LAPTOP_PROVISION) VALUES (:id, 3, :ram, :storage, :os, :provision)");

                $query ->execute([
                    ':id' => $_SESSION['id_user'],
                    ':ram' => $_POST['ram'],
                    ':storage' => $_POST['storage'],
                    ':os' => $_POST['os'],
                    ':provision' => $_POST['provision']
                ]);
            }
        }

        if(isset($_POST['resultat_equip'])) {
            if($_POST['e_type'] === 'desktop_pc') {
                try {
                    $requete_verif_update_desktop_pc = "DELETE FROM desktop_pc where USER_ID = :id";
                    $verif_update_desktop_pc = $pdo->prepare($requete_verif_update_desktop_pc);
                    $verif_update_desktop_pc->execute([':id' => $_SESSION['id_user']]);
                    } catch (Exception $e) {
                        echo 'Exception reçue : ',  $e->getMessage(), "\n";
                    }



                $query = $pdo->prepare("INSERT INTO desktop_pc (USER_ID, USER_ID_HAVE2, DESKTOP_RAM, DESKTOP_STORAGE, DESKTOP_OS) VALUES (:id, 3, :ram, :storage, :os)");

                $query ->execute([
                    ':id' => $_SESSION['id_user'],
                    ':ram' => $_POST['ram'],
                    ':storage' => $_POST['storage'],
                    ':os' => $_POST['os']
                ]);
            }
        }

        if(isset($_POST['resultat_equip'])) {
            if($_POST['e_type'] === 'tablet') {

                try {
                    $requete_verif_update_tablet = "DELETE FROM tablet where USER_ID = :id";
                    $verif_update_tablet = $pdo->prepare($requete_verif_update_tablet);
                    $verif_update_tablet ->execute([':id' => $_SESSION['id_user']]);
                    } catch (Exception $e) {
                        echo 'Exception reçue : ',  $e->getMessage(), "\n";
                    }

                $query = $pdo->prepare("INSERT INTO tablet (USER_ID, USER_ID_HAVE3, TABLET_RAM, TABLET_STORAGE, TABLET_OS) VALUES (:id, 3, :ram, :storage, :os)");

                $query ->execute([
                    ':id' => $_SESSION['id_user'],
                    ':ram' => $_POST['ram'],
                    ':storage' => $_POST['storage'],
                    ':os' => $_POST['os']
                ]);
            }
        }

        if(isset($_POST['resultat_equip'])) {
            if($_POST['e_type'] === 'mobile') {

                try {
                    $requete_verif_update_mobile = "DELETE FROM mobile where USER_ID = :id";
                    $verif_update_mobile = $pdo->prepare($requete_verif_update_mobile);
                    $verif_update_mobile ->execute([':id' => $_SESSION['id_user']]);
                    } catch (Exception $e) {
                        echo 'Exception reçue : ',  $e->getMessage(), "\n";
                    }

                $query = $pdo->prepare("INSERT INTO mobile (USER_ID, USER_ID_HAVE4, MOBILE_RAM, MOBILE_STORAGE, MOBILE_OS) VALUES (:id, 3, :ram, :storage, :os)");

                $query ->execute([
                    ':id' => $_SESSION['id_user'],
                    ':ram' => $_POST['ram'],
                    ':storage' => $_POST['storage'],
                    ':os' => $_POST['os']
                ]);
            }
        }


        ?>


    <?php else: ?>
        <div class="type_card">
            <form method="post" class="type_form">
                <h3>Type d'équipement</h3>
                <div class="equip_input" id="input_equip_type">
                    <select name="e_type" id="equip_type">
                        <option value="laptop">PC Portable</option>
                        <option value="desktop_pc">PC Fixe</option>
                        <option value="tablet">Tablette</option>
                        <option value="mobile">Portable</option>
                    </select>
                   
                </div>
                <div class="form_button">
                    <input type="submit" name="resultat_equip_start" value="Choisir">
                </div>
            </form>
        </div>

            
    <?php endif; ?>


</div>


<?php require './elements/footer.php' ?>