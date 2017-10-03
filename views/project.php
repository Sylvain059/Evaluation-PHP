<!DOCTYPE html>
<html>
<!-- ADD HEAD -->
<?php include 'head.php';?>

<body>
    <!-- ADD HEADER -->
    <?php include 'header.php';?>

    <main class="container jumbotron">

        <?php
    while ($donnees = $reponse->fetch()) { 
    ?>

            <article>
                <h2>
                    <?php echo $donnees['name_project'];?>
                </h2>
                <p class='container'>
                    <?php echo $donnees['descriptions'];?>
                </p>
                <p class>
                    <?php echo $donnees['deadline'];?>
                </p>
            </article>
            <?php } ?>
            <h3>Task : </h3>

            <?php
        /*INSERT TASK*/
        ?>


    </main>

    <!-- FOOTER -->
    <?php include('footer.php'); ?>

    <!-- SCRIPT -->
    <?php include("script.php") ?>
</body>

</html>
