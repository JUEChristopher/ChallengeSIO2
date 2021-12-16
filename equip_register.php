<?php require './elements/header.php' ?>

<div class="register_content">
    <div class="register_content_left">
        <h2>Nouvel équipement</h2>
        <img src="./components/undraw_equip_register.svg" alt="">
    </div>
    <div class="register_card">
        <form action="" method="post" class="register_form">
            <div class="equip_input" id="input_equip_type">
                <label for="type">Type d'équipement</label>
                <select name="type" id="equip_type" autofocus>
                    <option value="PC Portable">PC Portable</option>
                    <option value="PC Fixe">PC Fixe</option>
                    <option value="Tablette">Tablette</option>
                    <option value="Portable">Portable</option>
                </select>
            </div>
            <div class="equip_input" id="input_equip_ram">
                <label for="ram">Mémoire RAM</label>
                <input type="text" name="ram" id="equip_ram" required>
            </div>

            <div class="equip_input" id="input_equip_storage">
                <label for="storage">Capacité stockage</label>
                <input type="text" name="storage" id="equip_storage" required>
            </div>

            <div class="equip_input" id="input_equip_os">
                <label for="os">Système d'exploitation (OS)</label>
                <input type="text" name="os" id="equip_os" required>
            </div>

            <div class="form_button">
                <input type="submit" value="Ajouter">
            </div>
        </form>
    </div>
</div>


<?php require './elements/footer.php' ?>