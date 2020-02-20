<?php
$teams = file('teams.txt');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Football</title>

</head>
<body>
    <section>
        <h1>Le football c'est cool !</h1>
        <?php foreach ($teams as $team): ?>
            <li><?= $team ?></li>
        <?php endforeach; ?>
    </section>

    <section>
        <h2>Qui participe?</h2>
        <form method="post" action="manage.php">
            <input type="text" name="addTeam">
            <input type="submit" value="Envoyer">
            <input type="hidden" name="action" value="add">
        </form>
    </section>
    <section>
        <h2>Suppression des équipes</h2>
        <form method="post" action="manage.php">
            <?php foreach ($teams as $team): ?>
                <div>
                    <label for="<?= $team ?>"><?= $team ?></label>
                    <input type="checkbox" name="delTeam[]" id="<?= $team ?>" value="<?= $team ?>">
                </div>
            <?php endforeach; ?>
            <div>
                <input type="submit" value="Supprimer">
                <input type="hidden" name="action" value="delete">
            </div>

        </form>
    </section>
</body>
</html>