<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  require "repositorio.php";


  $filmes = $repositorio->getListaFilmes();
  ?>


  <table>
    <tr>
      <th>ID</th>
      <th>Titulo</th>
    </tr>
    <?php
    while ($filmeTemporario = array_shift($filmes)) {
      // print_r($filmeTemporario);
    ?>
      <tr>
        <td><?php echo $filmeTemporario->getId(); ?></td>
        <td><?php echo $filmeTemporario->getTitulo(); ?></td>
        <td><a href="excluir_filme.php?id=<?php echo $filmeTemporario->getId(); ?>">excluir</a></td>
      </tr>

    <?php
    }
    ?>
  </table>

</body>

</html>