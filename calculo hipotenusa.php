<html>
    <body>

        <?php
            if (!isset($_POST["control"])){

        ?>

            <h3>Calculo de la hipotenusa</h3>
            <form method="post" action="calculo hipotenusa.php">
                <input type="hidden" name="control" value="12345">
                Lado 1: <input type="text" name="lado1"><br>
                Lado 2: <input type="text" name="lado2"><br>
                <input type="submit" value="Enviar">
            </form>

        <?php
            }
            else {
                $lado1 = $_POST["lado1"];
                $lado2 = $_POST["lado2"];
                $hipotenusa = sqrt($lado1 + $lado2);
                echo "Resultado: ";
                echo "\$lado1 = $lado1 <br>";
                echo "\$lado2 = $lado2 <br>";
                echo "\$hipotenusa = $hipotenusa <br>";
                echo "<a href='calculo hipotenusa.php'>Nuevo Calculo</a>";
            }


        ?>
    </body>
</html>

 
