<?php
$juncture =  "
SELECT projects.name_project,  tasks.tasks
FROM projects
INNER JOIN tasks
ON projects.id = tasks.id_project";
?>
