<?php
// einfache Ausgabe
echo "Hallo PHP!";
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>PHP Test</title>
</head>

<body>

    <h1>PHP Testseite</h1>

    <p>
        <?php echo "Dieser Text kommt aus PHP."; ?>
    </p>

    <?php
    // Variable
    $name = "Klaus";
    ?>

    <p>
        Hallo <?php echo $name; ?>
    </p>

    <?php
    // Debug-Ausgabe
    var_dump($name);
    ?>

</body>

</html>