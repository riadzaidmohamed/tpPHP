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
start_page('calcul');
?>
<?php
$op1 = $_POST['op1'];
$op2 = $_POST['op2'];
$action = $_POST['Action'];
?>


<?php
if('*' == $action)
{
    echo $op1*$op2;
}
elseif('+' == $action)
{
    echo $op1+$op2;
}
elseif('-' == $action)
{
    echo $op1-$op2;
}
elseif ('/'== $action)
{
    echo $op1/$op2;
}

else
{
    echo '<br/><strong>opérateur ' . $action . ' non géré </strong>';
}
?>
<br>
<?php
end_page();
?>