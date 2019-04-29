<?php 

include_once 'init.php';
include_once 'categories_functions.php';




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mural</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
    <nav>
        <ul>
            <li><?= currentUser()['name'] ?> <span>(<?= currentUser()['username'] ?>)</span></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
    </nav>

    <h1>Mural</h1>
    <form action="addCategory.php" method="POST" class="new-message">
        <fieldset>
            <legend>Nova categoria</legend>
            <input type="text" name="category" placeholder="categoria">
            <input type="submit" value="enviar">
        </fieldset>
    </form>
</body>
</html>