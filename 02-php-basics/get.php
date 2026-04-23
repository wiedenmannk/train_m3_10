<?php
$name = $_GET['name'] ?? '';
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>GET Test</title>
</head>

<body>

    <h1>GET Test</h1>

    <p>Name: <?php echo $name; ?></p>

    <pre><?php var_dump($_GET); ?></pre>

</body>

</html>