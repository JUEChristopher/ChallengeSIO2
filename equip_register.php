<?php require './elements/header.php' ?>

<?php 
$type_laptop = false;
$form = false;
if(isset($_POST['e_type'])){
    if($_POST['e_type'] === 'PC Portable'){
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
                        <input type="text" name="provision" id="equip_provision" placeholder="Windows Famille" required>
                    </div>
                <?php endif; ?>

                <div class="form_button">
                    <input type="submit" value="Ajouter">
                </div>
            </form>
        </div>


    <?php else: ?>
        <form method="post">
            <div class="equip_input" id="input_equip_type">
                <label for="type">Type d'équipement</label>
                <select name="e_type" id="equip_type">
                    <option value="PC Portable">PC Portable</option>
                    <option value="PC Fixe">PC Fixe</option>
                    <option value="Tablette">Tablette</option>
                    <option value="Portable">Portable</option>
                </select>
            </div>
            <div class="form_button">
                <input type="submit" value="Choisir">
            </div>
        </form>
            
    <?php endif; ?>
</div>


<?php require './elements/footer.php' ?>