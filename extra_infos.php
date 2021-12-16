<?php require './elements/header.php' ?>

<div class="extra_content">
    <div class="extra_content_left">
        <h2>Connexion internet</h2>
        <img src="./components/undraw_extra_infos_2.svg" alt="">
    </div>
    <div class="extra_card">
        <form action="" method="post" class="extra_form">
            <div class="connection_input" id="input_connection_type">
                <label for="type">Type de connexion</label>
                <select name="c_type" id="connection_type">
                    <option value="Connexion internet">Connexion internet</option>
                    <option value="Connexion mobile">Connexion mobile</option>
                </select>
            </div>
            <div class="connection_input" id="input_connection_fai">
                <label for="fai">FAI/Opérateur</label>
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

            <div class="form_button">
                <input type="submit" value="Renseigner">
            </div>
        </form>
    </div>
</div>


<?php require './elements/footer.php' ?>