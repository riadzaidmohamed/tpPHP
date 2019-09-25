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
    echo'</body><html/>';
};
?>
<?php
start_page('calculatrice');
?>
<form action="calcul.php" method="post">
    <imput type="text" name="op1"/>
    <imput type="text" name="op2"/>
    <input type="submit" value="Submit">
    <input checked="checked" type="radio" name="op" value="*"/>*<br/>
    <input type="radio" name="op" value="+"/>+<br/>
    <input type="radio" name="op" value="-"/>-<br/>
    <input type="radio" name="op" value="/"/>/<br/>
</form>

<?php
end_page();
?>
