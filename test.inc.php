<?php
include 'utils.inc.php';
?>

<?php
start_page('utils');
?>
<form action="data-processing.php" method="post">
    <input type="text" name="Identifiant">
    <br>
    <input type="radio" value="Femme" name="Civilité"/>F
    <input type="radio" value="Homme" name="Civilité"/>H
    <br>
    <input type="text" name="e-mail">
    <br>
    <input type="password" placeholder="saisir le mot de passe" name="mdp"/>
    <br>
    <input type="password" placeholder="retaper le mot de passe" name="mdp"/>
    <br>
    <select name=" pays">
        <option value = "France"> France</option>
        <option value = "Comores"> Comores</option>
        <option value = "Saiyan"> Saiyan </option>
    </select>
    <br>
    <input type="checkbox" name=" condition"/>Accepter-vous les conditions générales
    <br>
    <input type="submit" name="action" value="mailer"/>
</form>

<?php
end_page();
?>
