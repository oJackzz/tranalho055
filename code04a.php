<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $nota1= "70"; // Variável inteira
        $nota2 = 40; // Variável inteira
        $nota3 = 94; // Variável inteira
        echo"<p>Digite sua primeira nota: " . $nota1 . "</p>";
        echo"<p>Digite sua segunda nota: " . $nota2 . "</p>";
        echo"<p>Digite sua terceira nota: " . $nota3 . "</p>";  

        $media = ($nota1 + $nota2 + $nota3) / 3; // Cálculo da média

        echo "A média das notas é: " . $media; // Exibe a média
    ?>


</body>

</html>