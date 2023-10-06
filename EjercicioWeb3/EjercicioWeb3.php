<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
   <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
   <link rel="stylesheet"  href="style.css">
    <title>Calcular Factorial</title>
</head>
<body>
<div class= container>
    <h2>Calcular Factorial</h2>


    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="numero">Ingrese un número:</label>
        <br>
        <input type="number" name="numero" required>
        <br>
        <Br>
        <input class="btn btn-success" type="submit" value="Factorial">
    </form>
 <br>
    <?php
    // Función para calcular el factorial de un número
    function calcularFactorial($numero) {
        $factorial = 1;
        $calcular = "1";

        // Calcular el factorial
        for ($i = 1; $i <= $numero; $i++) {
            $factorial *= $i;
            $calcular .= " x $i";
        }

        echo "El factorial de $numero es $factorial.<br>";
        echo "Cálculo del factorial: $calcular.<br>";
    }

    // Verificar si se enviaron datos mediante el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Capturar el número del formulario
        $numero = $_POST["numero"];

        // Verificar si el campo está completo
        if (!empty($numero)) {
            // Verificar si el número es no negativo
            if ($numero >= 0) {
                // Llamar a la función para calcular el factorial
                calcularFactorial($numero);
            } else {
                echo "Por favor, ingrese un número no negativo.";
            }
        } else {
            echo "Por favor, ingrese un número.";
        }
    }
    ?>
</div>
</body>
</html>
