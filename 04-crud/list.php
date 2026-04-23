<?php
require '../03-db-pdo/db.php';

$sql = "SELECT id, name, email, telefon, message FROM kontakte ORDER BY id DESC";
$stmt = $pdo->query($sql);
$kontakte = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Kontaktliste</title>
</head>

<body>

    <h1>Gespeicherte Kontakte</h1>

    <p><a href="../01-html-css/form.html">Neuen Kontakt anlegen</a></p>

    <?php if (count($kontakte) === 0): ?>
        <p>Es sind noch keine Datensätze vorhanden.</p>
    <?php else: ?>
        <table border="1" cellpadding="8">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>Telefon</th>
                    <th>Nachricht</th>
                    <th>Aktionen</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kontakte as $kontakt): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($kontakt['id']); ?></td>
                        <td><?php echo htmlspecialchars($kontakt['name']); ?></td>
                        <td><?php echo htmlspecialchars($kontakt['email']); ?></td>
                        <td><?php echo htmlspecialchars($kontakt['telefon']); ?></td>
                        <td><?php echo htmlspecialchars($kontakt['message']); ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $kontakt['id']; ?>">Bearbeiten</a>
                            |
                            <a href="delete.php?id=<?php echo $kontakt['id']; ?>">Löschen</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

</body>

</html>