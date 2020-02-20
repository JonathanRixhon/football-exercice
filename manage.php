<?php
$teams = file('teams.txt');
$remove = $_POST['delTeam'];
$error=["Entrez un nom d'équipe","Sélectionnez quelque chose à supprimer"];
if ($_POST['action'] === "add" && $_POST['addTeam']!=="") {
        $teams[] = $_POST['addTeam'] . PHP_EOL;
} else if ($_POST['action'] === "delete") {
    $teams = array_diff($teams, $remove);
}


file_put_contents("teams.txt", $teams);
header('Location: ./index.php');
exit;
?>