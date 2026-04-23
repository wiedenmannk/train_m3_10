<?php
require '../03-db-pdo/db.php';

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$name = filter_input(INPUT_POST, 'name') ?? '';
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) ?? '';
$telefon = filter_input(INPUT_POST, 'telefon') ?? '';
$message = filter_input(INPUT_POST, 'message') ?? '';

if (!$id || $name === '' || $email === '') {
    die('Bitte gültige Daten eingeben.');
}

$sql = "UPDATE kontakte
        SET name = :name,
            email = :email,
            telefon = :telefon,
            message = :message
        WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'id' => $id,
    'name' => $name,
    'email' => $email,
    'telefon' => $telefon,
    'message' => $message
]);
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Kontakt aktualisiert</title>
</head>

<body>

    <h1>Kontakt aktualisiert</h1>

    <p>Der Datensatz wurde erfolgreich gespeichert.</p>

    <p><a href="list.php">Zurück zur Liste</a></p>

</body>

</html>