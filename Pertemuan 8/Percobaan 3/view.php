<?php
    $conn = mysqli_connect("localhost","root","","praktikum8_jefri");
    $hasil = mysqli_query($conn, "SELECT * FROM bukutamu");
    $jumlah = mysqli_num_rows($hasil);

    echo "<center>Daftar Pengunjung</center>";
    echo "Jumlah pengunjung : $jumlah";
    
    $a=1;
    while($baris = mysqli_fetch_array($hasil)){
        echo "<br>";
        echo $a;
        echo "<br>";
        echo "Nama : ";
        echo $baris[0];
        echo "<br>";
        echo "Email : ";
        echo $baris[1];
        echo "<br>";
        echo "Komentar : ";
        echo $baris[2];
        $a++;
    }
?>