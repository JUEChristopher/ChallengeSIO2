<?php require './elements/header.php' ?>
<?php require './db_link/config.php' ?>

<?php 
    /// PC PORTABLE requête

    $requete_laptop = "SELECT * FROM laptop WHERE USER_ID = :id";
    $equipement_laptop = $pdo->prepare($requete_laptop);
    $equipement_laptop ->execute([
        ':id' => $_SESSION['id_user']
    ]);
    $final_equipement_laptop = $equipement_laptop ->fetch();

    if(isset($final_equipement_laptop->LAPTOP_PROVISION)){
        if($final_equipement_laptop->LAPTOP_PROVISION === 1){
            $laptop_provision = " OUI";
        }else{
            $laptop_provision = " NON";
        }
    }
    
    if(isset($final_equipement_laptop->LAPTOP_RAM)){$verif_LAPTOP_RAM = $final_equipement_laptop->LAPTOP_RAM ;}else{ $verif_LAPTOP_RAM ="vide" ;}
    if(isset($final_equipement_laptop->LAPTOP_STORAGE)){$verif_LAPTOP_STORAGE = $final_equipement_laptop->LAPTOP_STORAGE;}else{ $verif_LAPTOP_STORAGE ="vide";}
    if(isset($final_equipement_laptop->LAPTOP_OS)){$verif_LAPTOP_OS = $final_equipement_laptop->LAPTOP_OS;}else{ $verif_LAPTOP_OS ="vide";}
    if(isset($final_equipement_laptop->LAPTOP_PROVISION)){$verif_LAPTOP_PROVISION = $laptop_provision;}else{ $verif_LAPTOP_PROVISION ="vide";}
    /// PC FIXE requête

    $requete_desktop_pc = "SELECT * FROM desktop_pc WHERE USER_ID = :id";
    $equipement_desktop_pc = $pdo->prepare($requete_desktop_pc);
    $equipement_desktop_pc ->execute([
        ':id' => $_SESSION['id_user']
    ]);
    $final_equipement_desktop_pc = $equipement_desktop_pc ->fetch();

    if(isset($final_equipement_desktop_pc->DESKTOP_RAM)){$verif_DESKTOP_RAM = $final_equipement_desktop_pc->DESKTOP_RAM ;}else{ $verif_DESKTOP_RAM ="vide" ;}
    if(isset($final_equipement_desktop_pc->DESKTOP_STORAGE)){$verif_DESKTOP_STORAGE = $final_equipement_desktop_pc->DESKTOP_STORAGE;}else{ $verif_DESKTOP_STORAGE ="vide";}
    if(isset($final_equipement_desktop_pc->DESKTOP_OS)){$verif_DESKTOP_OS = $final_equipement_desktop_pc->DESKTOP_OS;}else{ $verif_DESKTOP_OS ="vide";}
    /// Portable requête

    $requete_mobile = "SELECT * FROM mobile WHERE USER_ID = :id";
    $equipement_mobile = $pdo->prepare($requete_mobile);
    $equipement_mobile ->execute([
        ':id' => $_SESSION['id_user']
    ]);
    $final_equipement_mobile = $equipement_mobile ->fetch();

    if(isset($final_equipement_mobile->MOBILE_RAM)){$verif_MOBILE_RAM = $final_equipement_mobile->MOBILE_RAM;}else{ $verif_MOBILE_RAM ="vide" ;}
    if(isset($final_equipement_mobile->MOBILE_STORAGE)){$verif_MOBILE_STORAGE = $final_equipement_mobile->MOBILE_STORAGE;}else{ $verif_MOBILE_STORAGE="vide";}
    if(isset($final_equipement_mobile->MOBILE_OS)){$verif_MOBILE_OS = $final_equipement_mobile->MOBILE_OS;}else{ $verif_MOBILE_OS ="vide";}

    /// Tablette requête

    $requete_tablet = "SELECT * FROM tablet WHERE USER_ID = :id";
    $equipement_tablet = $pdo->prepare($requete_tablet);
    $equipement_tablet ->execute([
        ':id' => $_SESSION['id_user']
    ]);
    $final_equipement_tablet = $equipement_tablet ->fetch();

    if(isset($final_equipement_tablet->TABLET_RAM)){$verif_TABLET_RAM = $final_equipement_tablet->TABLET_RAM;}else{ $verif_TABLET_RAM ="vide" ;}
    if(isset($final_equipement_tablet->TABLET_STORAGE)){$verif_TABLET_STORAGE = $final_equipement_tablet->TABLET_STORAGE;}else{ $verif_TABLET_STORAGE="vide";}
    if(isset($final_equipement_tablet->TABLET_OS)){$verif_TABLET_OS = $final_equipement_tablet->TABLET_OS;}else{ $verif_TABLET_OS ="vide";}


    /// Connexion internet

    $requete_con_internet = "SELECT * FROM internet_connection WHERE USER_ID = :id";
    $info_sup_con_internet = $pdo->prepare($requete_con_internet);
    $info_sup_con_internet ->execute([
        ':id' => $_SESSION['id_user']
    ]);
    $final_info_sup_con_internet = $info_sup_con_internet->fetch();

    if(isset($final_info_sup_con_internet->IC_FAI)){$verif_IC_FAI = $final_info_sup_con_internet->IC_FAI;}else{ $verif_IC_FAI ="vide" ;}
    if(isset($final_info_sup_con_internet->IC_DOWNLOAD)){$verif_IC_DOWNLOAD = $final_info_sup_con_internet->IC_DOWNLOAD;}else{ $verif_IC_DOWNLOAD="vide";}
    if(isset($final_info_sup_con_internet->IC_UPLOAD)){$verif_IC_UPLOAD = $final_info_sup_con_internet->IC_UPLOAD;}else{ $verif_IC_UPLOAD ="vide";}

    /// Connexion mobile

    $requete_con_mobile = "SELECT * FROM mobile_connection WHERE USER_ID = :id";
    $info_sup_con_mobile = $pdo->prepare($requete_con_mobile);
    $info_sup_con_mobile->execute([
        ':id' => $_SESSION['id_user']
    ]);
    $final_info_sup_con_mobile = $info_sup_con_mobile->fetch();

    if(isset($final_info_sup_con_mobile->MC_FAI)){$verif_MC_FAI = $final_info_sup_con_mobile->MC_FAI;}else{ $verif_MC_FAI ="vide" ;}
    if(isset($final_info_sup_con_mobile->MC_CAPACITY)){$verif_MC_CAPACITY = $final_info_sup_con_mobile->MC_CAPACITY;}else{ $verif_MC_CAPACITY="vide";}

?>




<div class="view_content">
    <h1 class="equip_view_title">Mes équipements</h1>
    <div class="view_content_equip">
        <div class="laptop_card">
            <div class="equip_view_form">
                <div class="type_tittle">
                    <h3>PC Portable</h3>
                </div>
                <div class="equip_input">
                    <label>Mémoire RAM (en Go)</label>
                    <input type="text" class="view_equip" value= <?=$verif_LAPTOP_RAM?> readonly>
                </div>
                <div class="equip_input">
                    <label>Capacité stockage (en Go)</label>
                    <input type="text" class="view_equip" value=<?=$verif_LAPTOP_STORAGE?> readonly>
                </div>
                <div class="equip_input">
                    <label>Système d'exploitation (OS)</label>
                    <input type="text" class="view_equip" value=<?=$verif_LAPTOP_OS?> readonly>
                </div>
                <div class="equip_input">
                    <label>Fourni par la région</label>
                    <input type="text" class="view_equip" value=<?=$verif_LAPTOP_PROVISION?> readonly>
                </div>
            </div>
        </div>

        <div class="desktop_card">
            <div class="equip_view_form">
                <div class="type_tittle">
                    <h3>PC Fixe</h3>
                </div>
                <div class="equip_input">
                    <label>Mémoire RAM (en Go)</label>
                    <input type="text" class="view_equip" value= <?= $verif_DESKTOP_RAM ?> readonly>
                </div>
                <div class="equip_input">
                    <label>Capacité stockage (en Go)</label>
                    <input type="text" class="view_equip" value= <?= $verif_DESKTOP_STORAGE ?> readonly>
                </div>
                <div class="equip_input">
                    <label>Système d'exploitation (en Go)</label>
                    <input type="text" class="view_equip" value= <?= $verif_DESKTOP_OS ?> readonly>
                </div>
            </div>
        </div>

        <div class="phone_card">
            <div class="equip_view_form">
                <div class="type_tittle">
                    <h3>Portable</h3>
                </div>
                <div class="equip_input">
                    <label>Mémoire RAM (en Go)</label>
                    <input type="text" class="view_equip" value= <?= $verif_MOBILE_RAM ?> readonly>
                </div>
                <div class="equip_input">
                    <label>Capacité stockage (en Go)</label>
                    <input type="text" class="view_equip" value= <?= $verif_MOBILE_STORAGE ?> readonly>
                </div>
                <div class="equip_input">
                    <label>Système d'exploitation (en Go)</label>
                    <input type="text" class="view_equip" value= <?= $verif_MOBILE_OS ?> readonly>
                </div>
            </div>
        </div>

        <div class="tablet_card">
            <div class="equip_view_form">
                <div class="type_tittle">
                    <h3>Tablette</h3>
                </div>
                <div class="equip_input">
                    <label>Mémoire RAM (en Go)</label>
                    <input type="text" class="view_equip" value= <?= $verif_TABLET_RAM ?> readonly>
                </div>
                <div class="equip_input">
                    <label>Capacité stockage (en Go)</label>
                    <input type="text" class="view_equip" value= <?= $verif_TABLET_STORAGE ?> readonly>
                </div>
                <div class="equip_input">
                    <label>Système d'exploitation (en Go)</label>
                    <input type="text" class="view_equip" value= <?= $verif_TABLET_OS ?> readonly>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="div_horizontal_line">
    <span class="horizontal_line"></span>
</div>
<div class="view_content">
    <h1 class="equip_view_title">Mes Informations supplémentaires</h1>
    <div class="view_content_equip">
        <div class="internet_card">
            <div class="equip_view_form">
                <div class="type_tittle">
                    <h3>Connexion internet</h3>
                </div>
                <div class="equip_input">
                    <label>Fournisseur d'accès internet</label>
                    <input type="text" class="view_equip" value= <?= $verif_IC_FAI ?> readonly>
                </div>
                <div class="equip_input">
                    <label>Débit descendant (en Mbps)</label>
                    <input type="text" class="view_equip" value= <?= $verif_IC_DOWNLOAD ?> readonly>
                </div>
                <div class="equip_input">
                    <label>Débit ascendant (en Mbps)</label>
                    <input type="text" class="view_equip" value= <?= $verif_IC_UPLOAD ?> readonly>
                </div>
            </div>
        </div>
        


        <div class="con_mobile_card">
            <div class="equip_view_form">
                <div class="type_tittle">
                    <h3>Connexion mobile</h3>
                </div>
                <div class="equip_input">
                    <label>Opérateur</label>
                    <input type="text" class="view_equip" value= <?= $verif_MC_FAI ?> readonly>
                </div>
                <div class="equip_input">
                    <label>Volume données mobiles (en Go)</label>
                    <input type="text" class="view_equip" value= <?= $verif_MC_CAPACITY ?> readonly>
                </div>
            </div>
        </div>
    </div>
</div>



<?php require './elements/footer.php' ?>