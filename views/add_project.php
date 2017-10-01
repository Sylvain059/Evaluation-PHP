<?php include'../models/connection_bdd.php';?>
<!DOCTYPE html>
<html>
<?php include 'head.php';?>

</html>

<body>
    <?php include 'header.php';?>
    <main class='container'>
        <article class="jumbotron">
            <h2>Add Project</h2>
            <form method="post" action="" class='form-group'>
                <table>
                    <tr>
                        <td>
                            <label for="title">Project title : </label>
                        </td>
                        <td>
                            <input class='form-control' type="text" id="title" name="name_project">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="description">Description : </label>
                        </td>
                        <td>
                            <textarea class='form-control' rows="4" cols="50" id="description" name="descriptions">
                        </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="deadline">Deadline : </label>
                        </td>
                        <td>
                            <input class='form-control' type="date" id="deadline" name="deadline">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <input class="btn btn-success" type="submit" value="Submit">
                        </td>
                    </tr>
                </table>
                <?php 
            if(isset($_POST['name_project']) AND isset($_POST['deadline']) AND isset($_POST['descriptions']))
            {
                $requete = $bdd-> prepare("INSERT INTO projects(name_project  , descriptions, deadline) VALUES(? , ?, ?)");
                $requete->execute(array($_POST['name_project'] , $_POST['descriptions'] , $_POST['deadline']));
            }
            ?>
            </form>
        </article>
    </main>
    <?php include 'footer.php';?>
    <?php include 'script.php';?>
</body>
