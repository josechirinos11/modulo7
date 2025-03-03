<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Conversor de Euros</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        #formulario {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h1 {
            font-size: 20px;
            color: #333;
            font-weight: bold;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 10px 0;
        }

        input[type="number"], input[type="submit"], input[type="radio"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="radio"] {
            width: auto;
        }

        .radio-group {
            display: flex;
            justify-content: center;
            margin-bottom: 10px;
        }

        .radio-group label {
            margin-right: 20px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            padding: 10px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Estilos de los resultados */
        .resultado {
            margin-top: 20px;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
        }
    </style>
</head>

<body>

    <form id="formulario" method="post" action="">
        <h1>Conversor de Euros</h1>
        
        <label for="euros">Euros:</label>
        <input type="number" name="euros" step="0.01" required>

        <div class="radio-group">
            <label><input type="radio" name="moneda" value="pesetas" required> Pesetas</label>
            <label><input type="radio" name="moneda" value="dolares"> Dólares</label>
        </div>

        <input type="submit" value="Convertir">

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $euros = floatval($_POST["euros"]);
            $moneda = $_POST["moneda"];
            if ($moneda == "pesetas") {
                $resultado = $euros * 166.386;
                echo "<div class='resultado'>$euros euros equivalen a " . round($resultado, 2) . " pesetas.</div>";
            } elseif ($moneda == "dolares") {
                $resultado = $euros * 1.10; // Valor aproximado
                echo "<div class='resultado'>$euros euros equivalen a " . round($resultado, 2) . " dólares.</div>";
            } else {
                echo "<div class='resultado'>Seleccione una moneda válida.</div>";
            }
        }
        ?>
    </form>

</body>

</html>
