<!DOCTYPE html>
<html>
<head>
<style>
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
  }
  th, td {
    padding: 10px;
    text-align: center;
  }
</style>
</head>
<body>

<table>
  <?php
  $linhas = 10;
  $colunas = 10;
  $cont = 1;

  for ($i = 0; $i < $linhas; $i++) {
    echo "<tr>";

    for ($j = 0; $j < $colunas; $j++) {
      $nrandom = rand(0, 1000);

      if ($cont % 2 == 0) {  // Linhas pares
        $numero_display = $nrandom * 2;
      } else {  // Linhas ímpares
        while ($nrandom % 3 == 0 || $nrandom % 5 == 0) {
          $nrandom = rand(0, 1000);
        }
        $numero_display = $nrandom;
      }

      echo "<td>$numero_display</td>";
      $cont++;
    }

    echo "</tr>";
  }
  ?>
</table>

</body>
</html>
