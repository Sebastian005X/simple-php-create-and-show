<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos -principal</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <?php
  require_once('./components/header.php');
  require_once('./env.php');
  require('db/db.php');

  $data = getData();
  ?>
  <div class="w-5/6 mx-auto">
    <section>
      <h1 class="text-sky-400 font-bold text-4xl text-center mb-5">Lista de productos</h1>
      <?php
      foreach ($data as $product) {
        echo "
          <article>
            <span>$product[id]</span>
            <h3>$product[product]</h3>
          </article>
        ";
      }
      ?>
    </section>
  </div>
</body>

</html>