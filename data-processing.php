<?php
$Identifiant = $_POST['Identifiant'];
$email = $_POST['e-mail'];
$mdp = $_POST['mdp'];
$pays = $_POST['pays'];
$condition = $_POST['condition'];
$action = $_POST['action'];
?>
<?php
if($action == 'mailer')
{

    $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
    $message .= 'Email : ' . $email . PHP_EOL;
    $message .= 'Mot de passe : ' . PHP_EOL . $password;

}
else {
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}
?>
