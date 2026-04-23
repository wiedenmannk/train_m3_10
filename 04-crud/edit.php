<?php
require '../03-db-pdo/db.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$id) {
    die('Ungültige ID.');
}

$sql = "SELECT id, name, email, telefon, message FROM kontakte WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);

$kontakt = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$kontakt) {
    die('Datensatz nicht gefunden.');
}
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Kontakt bearbeiten</title>
</head>

<body>

    <h1>Kontakt bearbeiten</h1>

    <p><a href="list.php">Zurück zur Liste</a></p>

    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($kontakt['id']); ?>">

        <p>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($kontakt['name']); ?>" required>
        </p>

        <p>
            <label for="email">E-Mail:</label><br>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($kontakt['email']); ?>">
        </p>

        <p>
            <label for="telefon">Telefon:</label><br>
            <input type="text" id="telefon" name="telefon" value="<?php echo htmlspecialchars($kontakt['telefon']); ?>">
        </p>

        <p>
            <label for="message">Nachricht:</label><br>
            <textarea id="message" name="message"><?php echo htmlspecialchars($kontakt['message']); ?></textarea>
        </p>

        <button type="submit">Änderungen speichern</button>
    </form>

</body>

</html>