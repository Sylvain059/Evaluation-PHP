<?php 
    include '../models/connection_bdd.php';
    if(isset($_POST['name_project']) AND isset($_POST['deadline']) AND isset($_POST['descriptions']))
    {
        $requete = $bdd-> prepare("INSERT INTO projects(name_project  , descriptions, deadline) VALUES(? , ?, ?)");
        $requete->execute(array($_POST['name_project'] , $_POST['descriptions'] , $_POST['deadline']));
    }

    header('Location: index.php');
?>
