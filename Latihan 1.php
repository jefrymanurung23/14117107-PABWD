<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 1</title>
</head>

<body>
    <?php
        function swap(&$foo, &$bar){
            $temp = $foo;
            $foo = $bar;
            $bar = $temp;
        }

        $a = 5;
        $b = 10;
        echo nlbr("Sebelum di SWAP\n");
        echo nlbr("a = $a\n");
        echo nlbr("b = $b\n\n");
        swap($a, $b);
        echo nlbr("Sesudah di SWAP\n");
        echo nlbr("a = $a\n");
        echo nlbr("b = $b\n\n");
    ?>
</body>

</html>