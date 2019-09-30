<?php
include 'utils.inc.php';
?>

<?php
start_page('utils');
?>
<form action="data-processing.php" method="post">
    <input type="text" name="Identifiant">
    <input type="radio" value="Femme" name="Civilité"/>
    <input type="radio" value="Homme" name="Civilité"/>
    <input type="text">
    <input type="password"/>
    <input type="password"/>
    <select>
        <option value = "France"> France</option>
        <option value = "Comores"> Comores</option>
        <option value = "Saiyan"> Saiyan </option>
    </select>
    <input type="checkbox"/>
    <input type="submit"/>
</form>

<?php
end_page();
?>
