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
        $a = 5;
        $b = 7;
        echo "a = $a <br>";
        echo "b = $b <br>";

        if($a == $b)
            echo "$a sama dengan $b";
        elseif($a > $b)
            echo "$a lebih kecil daripada $b";
        else
            echo "$a lebih kecil daripada $b";
    ?>
</body>
</html>