<?php include'../models/connection_bdd.php';?>
<!DOCTYPE html>
<html lang="fr">
<?php include 'head.php';?>

<body>
    <?php include 'header.php';?>
    <?php include '../models/db_card.php';?>

    <main class="container">
        <h2>My Projects</h2>

        <article class="row project">
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
                    <a href="project.php" class="btn btn-primary button">See More</a>
                    <a href="#" class="btn btn-danger button">Delete Project</a>

                </div>
            </div>
            <?php }
            
            $reponse->closeCursor(); 
            ?>
            <a href="add_project.php" class="btn btn-success add-project">Add Project</a>
        </article>
    </main>

    <?php include 'footer.php';?>
    <?php include 'script.php';?>
</body>

</html>
