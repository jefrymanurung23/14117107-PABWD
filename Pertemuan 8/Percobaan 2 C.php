<HTML>

<HEAD>
    <title>Koneksi Database MySQL</title>
</HEAD>

<BODY>
    <h1>Koneksi database dengan mysql_fetch_array</h1>
    <?php
        $conn = mysqli_connect ("localhost","root","","praktikum8_jefri") or die ("koneksi gagal");
        $hasil = mysqli_query($conn, "SELECT * FROM liga");
        
        while ($row = mysqli_fetch_array($hasil)) {
            echo "Liga " .$row["negara"]; //array asosiatif
            echo " mempunyai " .$row[2]; //array numeris
            echo " wakil di liga champion <br>";
        }
    ?>
</BODY>

</HTML>