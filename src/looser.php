<?php
session_start();
$palabra = $_SESSION['palabra'];
session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Has perdido</title>
    <link rel="stylesheet" href="../styles/estilosWL.css">
</head>
<body>
<div class="container">
    <h1>Lo siento, has perdido. La palabra era: <?php echo $palabra; ?></h1>
    <button onclick="window.location.href='index.php';">Jugar de nuevo</button>
</div>
</body>
</html>