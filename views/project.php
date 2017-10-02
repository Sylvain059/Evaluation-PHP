<!-- ADD DATABASE CONNECT -->
<?php include '../models/connection_bdd.php'; ?>
<!DOCTYPE html>
<html>
<!-- ADD HEAD -->
<?php include 'head.php';?>

<body>
    <!-- ADD HEADER -->
    <?php include 'header.php';?>

    <!-- ADD REQUEST -->
    <?php include '../models/db_card.php';?>
    <?php include '../models/db_tasks.php';?>
    <?php include '../models/table_join.php';?>


    <main class="container jumbotron">

        <?php
        
    $project = $_GET['project'];
    $reponse = $bdd->prepare('SELECT * FROM projects WHERE id = ? ');
    $reponse->execute(array($project));
        
    while ($donnees = $reponse->fetch()) { 
    ?>

            <article>
                <h2>
                    <?php echo $donnees['name_project'];?>
                </h2>
            </article>
            <?php } ?>

            <?php 
        
        ?>


    </main>

    <!-- FOOTER -->
    <?php include('footer.php'); ?>

    <!-- SCRIPT -->
    <?php include("script.php") ?>
</body>

</html>
