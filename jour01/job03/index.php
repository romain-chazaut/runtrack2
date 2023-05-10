<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Documents</title>
  </head>
  <body>
    <?php
      // Déclaration et affectation de variables
      $bool = true;
      $int = 42;
      $str = "Hello world!";
      $float = 3.14;

      // Afficher les variables dans un tableau HTML
      echo "<table border='1'>";
      echo "<tr><th>Type</th><th>Nom</th><th>Valeur</th></tr>";
      echo "<tr><td>bool</td><td>bool</td><td>$bool</td></tr>";
      echo "<tr><td>integer</td><td>int</td><td>$int</td></tr>";
      echo "<tr><td>string</td><td>str</td><td>$str</td></tr>";
      echo "<tr><td>float</td><td>float</td><td>$float</td></tr>";
      echo "</table>";
    ?>
  </body>
</html>
