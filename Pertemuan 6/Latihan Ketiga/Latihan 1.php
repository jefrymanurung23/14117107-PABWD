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
        $nama = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
        echo "SEBLEUM DIUBAH : <br>";
        foreach ($nama as $key => $value) {
            echo "$value <br>";
        }

        sort($nama);
        echo "SESUDAH DIUBAH : <br>";
        foreach ($nama as $key => $value) {
            echo "$value <br>";
        }
    ?>
</body>
</html>