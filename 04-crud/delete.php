<?php
require '../03-db-pdo/db.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$id) {
    die('Ungültige ID.');
}

$sql = "DELETE FROM kontakte WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Kontakt gelöscht</title>
</head>

<body>

    <h1>Kontakt gelöscht</h1>

    <p>Der Datensatz wurde erfolgreich gelöscht.</p>

    <p><a href="list.php">Zurück zur Liste</a></p>

</body>

</html>