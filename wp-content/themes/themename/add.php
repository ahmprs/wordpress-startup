<?php
/*
Template Name: AhmTemplate
*/
?>
<?php
    if ( !isset($_REQUEST['x'])) return;
    if ( !isset($_REQUEST['y'])) return;

    $x = (int)($_REQUEST['x']);
    $y = (int)($_REQUEST['y']);

    echo($x+$y)
?>