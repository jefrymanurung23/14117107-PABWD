<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contoh Skrip PHP</title>
</head>
<body>
    <?php
        $a = 15;
        $b = 5;

        echo "bilangan 1 = $a <br>";
        echo "bilangan 2 = $b <br>";
        echo "Berikut hasil perhitungan dari setiap operator <br>";

        echo "<br> PENJUMLAHAN <br>";
        $c = $a + $b;
        echo "operator = + <br>";
        echo "hasilnya : $a + $b = $c <br>";
        echo "<br> PENGURANGAN <br>";
        $c = $a - $b;
        echo "operator = - <br>";
        echo "hasilnya : $a - $b = $c <br>";
        echo "<br> PERKALIAN <br>";
        $c = $a * $b;
        echo "operator = * <br>";
        echo "hasilnya : $a * $b = $c <br>";
        echo "<br> PEMBAGIAN <br>";
        $c = $a / $b;
        echo "operator = / <br>";
        echo "hasilnya : $a / $b = $c <br>";
        echo "<br> MODULUS <br>";
        $c = $a % $b;
        echo "operator = % <br>";
        echo "hasilnya : $a % $b = $c <br>";
    ?>
</body>
</html>