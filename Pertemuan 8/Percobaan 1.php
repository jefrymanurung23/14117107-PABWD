<html>

<head>
    <title>Koneksi Database MySQL</title>
</head>

<body>
    <h1>Demo koneksi database MySQL</h1>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "praktikum8_jefri");
        if ($conn) {
            echo "OK";
        } else {
            echo "Server not connected";
        }
    ?>
</body>

</html>