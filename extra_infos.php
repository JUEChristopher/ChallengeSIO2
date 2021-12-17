<?php require './elements/header.php' ?>
<div class="extra_content">
    <div class="extra_content_top">
        <div class="extra_content_left">
            <h2>Connexion internet</h2>
            <img src="./components/undraw_extra_infos_2.svg" alt="">
        </div>
        <div class="ci_card">
            <form action="" method="post" class="extra_form">

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
            </form>
        </div>
    </div>

    <div class="extra_content_middle">
        <div class="cm_card">
            <form action="" method="post" class="extra_form">

                <div class="connection_input" id="input_connection_fai">
                    <label for="fai">Opérateur</label>
                    <input type="text" name="fai" id="connection_fai" placeholder="Sosh" required>
                </div>

                <div class="connection_input" id="input_connection_download">
                    <label for="capacity">Volume données mobiles (en Go)</label>
                    <input type="text" name="download" id="connection_download" placeholder="70" required>
                </div>
            </form>
        </div>
        <div class="extra_content_right">
            <h2>Connexion mobile</h2>
            <img src="./components/undraw_extra_infos_3.svg" alt="">
        </div>
    </div>
    <div class="form_button" form="">
        <input type="submit" value="">
    </div>
</div>
    


<?php require './elements/footer.php' ?>