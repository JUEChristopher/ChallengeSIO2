<?php require './elements/header.php' ?>
<?php require './db_link/config.php' ?>


<div class="extra_content">
<form action="" method="post" class="extra_form">
    <div class="extra_content_top">
        <div class="extra_content_left">
            <h2>Connexion internet</h2>
            <img src="./components/undraw_extra_infos_2.svg" alt="">
        </div>
        <div class="ci_card">
            

                <div class="connection_input" id="input_connection_fai">
                    <label for="fai">Fournisseur d'accès internet</label>
                    <input type="text" name="fai" id="connection_fai" placeholder="Orange" required>
                </div>

                <div class="connection_input" id="input_connection_download">
                    <label for="download">Débit descendant (en Mbps)</label>
                    <input type="text" name="download" id="connection_download" placeholder="536,18" required>
                </div>

                <div class="connection_input" id="input_connection_upload">
                    <label for="upload">Débit ascendant (en Mbps)</label>
                    <input type="text" name="upload" id="connection_upload" placeholder="202,10" required>
                </div>
        </div>
    </div>

    <div class="extra_content_middle">
        <div class="cm_card">
            <div class="connection_input" id="input_connection_fai">
                <label for="fai">Opérateur</label>
                <input type="text" name="operateur" id="connection_fai" placeholder="Sosh" required>
            </div>

            <div class="connection_input" id="input_connection_download">
                <label for="capacity">Volume données mobiles (en Go)</label>
                <input type="text" name="capacity" id="connection_download" placeholder="70" required>
            </div>        
        </div>
        <div class="extra_content_right">
            <h2>Connexion mobile</h2>
            <img src="./components/undraw_extra_infos_2.svg" width="450px"  alt="">
        </div>
    </div>
    <div class="form_button" form="">
        <input type="submit"  name="submit_extra_infos"></input>
    </div>
</form>
</div>
<?php
if(isset($_POST['submit_extra_infos'])) {
    try {
        $requete_verif_update_internet_connection = "DELETE FROM internet_connection where USER_ID = :id";
        $verif_update_internet_connection = $pdo->prepare($requete_verif_update_internet_connection);
        $verif_update_internet_connection->execute([':id' => $_SESSION['id_user']]);
        } catch (Exception $e) {
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }
    


    $query = $pdo->prepare("INSERT INTO internet_connection (USER_ID, USER_ID_USE, IC_FAI, IC_DOWNLOAD, IC_UPLOAD) VALUES (:id, 3, :fai, :download, :upload)");

    $query ->execute([
        ':id' => $_SESSION['id_user'],
        ':fai' => $_POST['fai'],
        ':download' => $_POST['download'],
        ':upload' => $_POST['upload']
    ]);

    try {
        $requete_verif_update_mobile_connection = "DELETE FROM mobile_connection where USER_ID = :id";
        $verif_update_mobile_connection = $pdo->prepare($requete_verif_update_mobile_connection);
        $verif_update_mobile_connection->execute([':id' => $_SESSION['id_user']]);
        } catch (Exception $e) {
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }
    


    $query1 = $pdo->prepare("INSERT INTO mobile_connection (USER_ID, USER_ID_USE2, MC_FAI, MC_CAPACITY) VALUES (:id, 3, :operateur, :capacity)");

    $query1 ->execute([
        ':id' => $_SESSION['id_user'],
        ':operateur' => $_POST['operateur'],
        ':capacity' => $_POST['capacity']
    ]);
}

?>
<?php require './elements/footer.php' ?>