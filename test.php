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
<!DOCTYPE>
<HTML>

<HEADER>
    <title>Titre</title>
</HEADER>
<body>
<hr/><br/><strong>Test</strong><br/><hr/>
</body>

</HTML>

<?php
function end_page
{
    echo'<body></body><html/>'
}
?>


