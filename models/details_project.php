<?php
    $project = $_GET['project'];
    $reponse = $bdd->prepare('SELECT * FROM projects WHERE id = ? ');
    $reponse->execute(array($project));
?>