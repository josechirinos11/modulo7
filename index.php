<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Conversor de Euros</title>
</head>
<body>
  <h1>Conversor de Euros</h1>
  <form method="post" action="">
    <label>Euros:
      <input type="number" name="euros" step="0.01" required>
    </label>
    <br>
    <label>
      <input type="radio" name="moneda" value="pesetas" required> Pesetas
    </label>
    <label>
      <input type="radio" name="moneda" value="dolares"> Dólares
    </label>
    <br>
    <input type="submit" value="Convertir">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $euros = floatval($_POST["euros"]);
      $moneda = $_POST["moneda"];
      if ($moneda == "pesetas") {
          $resultado = $euros * 166.386;
          echo "<p>$euros euros equivalen a " . round($resultado, 2) . " pesetas.</p>";
      } elseif ($moneda == "dolares") {
          $resultado = $euros * 1.10; // Valor aproximado
          echo "<p>$euros euros equivalen a " . round($resultado, 2) . " dólares.</p>";
      } else {
          echo "<p>Seleccione una moneda válida.</p>";
      }
  }
  ?>
</body>
</html>
