
<?php

$sqlAllCommentsAll = "SELECT * FROM comment ";
$tableAllCommentsAll = mysqli_query($connexion, $sqlAllCommentsAll);
$resultatAllCommentsAll = mysqli_fetch_all($tableAllCommentsAll, MYSQLI_ASSOC);