<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=to_do_list;charset=utf8', 'root', 'Skaoune88');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

?>
