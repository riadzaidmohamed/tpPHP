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
end_page();
?>
<?php
echo date('l F d, Y');
?>