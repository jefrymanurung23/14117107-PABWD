<HTML>

<HEAD>
    <title>Simpan Buku Tamu</title>
</HEAD>

<BODY>
    <h1>Simpan Buku Tamu MySQL</h1>
    <?php
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $komentar = $_POST["komentar"];
        $conn = mysqli_connect ("localhost", "root", "", "praktikum8_jefri") or die ("koneksi gagal");
        
        echo "Nama : $nama <br>";
        echo "Email : $email <br>";
        echo "Komentar : $komentar <br>";
        
        $sqlstr = "INSERT INTO bukutamu (nama,email,komentar) VALUES ('$nama','$email','$komentar')";
        $hasil = mysqli_query($conn, $sqlstr);
        echo "Simpan bukutamu berhasil dilakukan";
    ?>
</BODY>

</HTML>