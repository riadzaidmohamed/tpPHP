<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <html
lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL
    ;
};
?>

<?php
function end_page()
{
    echo'</body></html>';
};
?>

<?php
$operateurs = '*+-/';
?>

<?php
start_page('calculatrice');
?>
<form action="calcul.php" method="post">
    <input type="text" name="op1"><br>
    <input type="text" name="op2" ><br>
    <?php
    for($cpt = 0 ; $cpt <= 3 ; ++$cpt) {
        echo '<input type="submit" value="'.$operateurs[$cpt].'" name="Action">';
    };
    ?>
        <input type="submit" value="Submit" name="Action">
</form>

<?php
end_page();
?>