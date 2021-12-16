<?php
/*
function nav_item (string $lien, string $titre, string $linkClass = ''): string 

{
    $classe = 'nav-item';
    if ($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe .= ' active';
    }
    return <<<HTML
    <li class="$classe">
        <a class="$linkClass" href="$lien">$titre</a>
    </li>
HTML;
}
function nav_menu (string $linkClass = ''): string
{
    return 
        nav_item('./elements/index.php', 'Accueil', $linkClass).
        nav_item('./equip_register.php','Mes équipements', $linkClass).
        nav_item('./login.php', 'Login', $linkClass).
        nav_item('./captcha.php', 'test_captcha','Login', $linkClass);

} 
*/
?>