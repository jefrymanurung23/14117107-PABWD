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
        function hitung($nama, $warna){
            $panjang = strlen($nama);
            echo "Nama  : $nama";
            if($panjang > 20){
                $harga = $panjang * 700;
            }elseif($panjang > 10){
                $harga = $panjang * 500;
            }elseif($pnajang > 0){
                $harga = $panjang * 300;
            }else{
                $harga = 0;
            }
            echo "<br>";
            echo "Harga : $harga";
            echo "<br>";
            echo "Warna : $warna";
        }
        $nm = $_GET['nama'];
        $warna = $_GET['warna'];
        hitung($nm, $warna);
    ?>
</body>

</html>