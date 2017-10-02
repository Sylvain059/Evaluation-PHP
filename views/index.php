<!DOCTYPE html>
<html lang="fr">
<!-- ADD HEAD -->
<?php include 'head.php';?>

<body>
    <!-- ADD HEADER & REQUEST db_card-->
    <?php include 'header.php';?>


    <main class="container">
        <h2>My Projects</h2>

        <article class="row project">
            <!-- loop for show data in project table-->
            <?php while ($donnees = $reponse->fetch()) { ?>
            <div class="card project" style="width: 20rem;">
                <div class="card-block">

                    <h3 class="card-title">
                        <?php echo $donnees['name_project'] ?>
                    </h3>
                    <p class="card-text">
                        <?php echo $donnees['descriptions'] ?>
                    </p>
                    <p class="card-text">
                        <?php echo $donnees['deadline'] ?>
                    </p>
                    <a href="project.php?project=<?php echo $donnees['id']?>" class="btn btn-primary button">See More</a>
                    <a href="#" class="btn btn-danger button">Delete Project</a>
                </div>
            </div>
            <!-- END LOOP -->
            <?php }
            /* Close request*/
            $reponse->closeCursor(); 
            ?>
            <a href="add_project.php" class="btn btn-success add-project">Add Project</a>
        </article>
    </main>
    <!-- ADD FOOTER & SCRIPT -->
    <?php include 'footer.php';?>
    <?php include 'script.php';?>
</body>

</html>
