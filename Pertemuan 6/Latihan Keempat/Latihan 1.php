<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contoh Skrip PHP</title>
</head>
<body>
    <h1>Menampilkan Bilangan Prima dari 1 s/d 37</h1>
    <?php
        for ($i=1; $i <= 37 ; $i++) {
            $a = 0;
            for ($j=1; $j <= $i; $j++) {
                if ($i % $j == 0) {
                    $a++;
                }
            }
            if ($a == 2) {
                echo $i.'<br>';
            }
        }
    ?>
</body>
</html>