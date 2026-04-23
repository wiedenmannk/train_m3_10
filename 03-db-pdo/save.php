<?php
require 'db.php';

// Daten holen
$name = filter_input(INPUT_POST, 'name') ?? '';
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) ?? '';
$telefon = filter_input(INPUT_POST, 'telefon') ?? '';
$message = filter_input(INPUT_POST, 'message') ?? '';

// einfache Validierung
if ($name === '' || $email === '') {
    die('Bitte Name und gültige E-Mail eingeben.');
}

// SQL vorbereiten
$sql = "INSERT INTO kontakte (name, email, telefon, message)
        VALUES (:name, :email, :telefon, :message)";

$stmt = $pdo->prepare($sql);

// ausführen
$stmt->execute([
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
    <title>Gespeichert</title>
</head>

<body>

    <h1>Datensatz gespeichert</h1>

    <p>Die Daten wurden erfolgreich gespeichert.</p>

    <a href="../01-html-css/form.html">Zurück zum Formular</a>

</body>

</html>