<?php
$Identifiant = $_POST['Identifiant'];
$civilité = $_POST['Civilité'];
$email = $_POST['e-mail'];
$mdp = $_POST['mdp'];
$pays = $_POST['pays'];
$condition = $_POST['condition'];
$action = $_POST['action'];
?>
<?php
if($action == 'mailer')
{
}
else {
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}
?>
