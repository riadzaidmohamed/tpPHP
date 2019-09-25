<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <html
lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL
    ;
};
?>
<?php
start_page('titre');
?>

<hr/><br/><strong>Test</strong><br/><hr/>


<?php
function end_page()
{
    echo'</body><html/>';
};
?>
<?php
$jour = date('l F d, Y');
echo $jour;
?>
<br>
<?php
$jour2 = date('d/m/Y', strtotime('2020-04-01'));
echo $jour2;
?>
<br>
<?php
$jour2 = date('F d, y, h:i a');
echo $jour2;
?>
<?php
end_page();
?>
