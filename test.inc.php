<?php
include 'utils.inc.php';
?>

<?php
start_page('utils');
?>
<form action="data-processing.php" method="post">
    <input type="text" name="Identifiant">
    <br>
    <input type="radio" value="Femme" name="Civilité"/>F/n
    <input type="radio" value="Homme" name="Civilité"/>H
    <br>
    <input type="text" name="e-mail">
    <br>
    <input type="password" placeholder="saisir le mot de passe" name="mdp"/>
    <br>
    <input type="password" placeholder="retaper le mot de passe" name="mdp"/>
    <br>
    <select>
        <option value = "France"> France</option>
        <option value = "Comores"> Comores</option>
        <option value = "Saiyan"> Saiyan </option>
    </select>
    <br>
    <input type="checkbox"/>Accepter-vous les condition général
    <br>
    <input type="submit"/>
</form>

<?php
end_page();
?>
