<!DOCTYPE HTML>
<HTML xmlns="http://www.w3.org/1999/html">

<header></header>
<body>
<?php
echo '<strong> Voici mon premier programme PHP </strong><br/>' . "\n";
echo 'C\'est pas mal non ? <br/>';
?>
<?php
$var1 = 6;
$var2 = 1.3;
$var3 = 'Variable 3';
?>
<?php echo "$var1 + $var2"; ?>
<br/>
<?php echo $var1 + $var2; ?>
<br/>
<br/>
<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <html
lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL
    ;
};
?>
</body>

</HTML>
