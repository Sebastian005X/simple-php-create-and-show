<?php 
require_once('../env.php');
require('../db/db.php');

function Redirect($url, $permanent = false) {
  header('Location: ' . $url, true, $permanent ? 301 : 302);
  exit();
}

if ($_GET) {
  $name = $_GET['txt-name'];
  insert($name);
  Redirect('/simple-php-mysql-create');
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos -crear</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <?php require_once('../components/header.php') ?>

  <h1>Crear productos</h1>

  <section>
    <form action="./create.php" method="get">
      <input type="text" name="txt-name" required>
      <button type="submit">Añadir</button>
    </form>
  </section>
</body>
</html>