<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Kontak</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "123";

    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    ?>


    <div class="container mt-5">
        <h1 class="mb-4">Konfirmasi Kontak</h1>
        <form>

            <p>Selamat datang, <strong><?php echo $_POST["nama"]; ?></strong>!</p>

            <p>Kewarganegaraan:
                <strong>
                    <?php
                    echo $_POST["Kewarganegaraan"];
                    ?>
                </strong>
            </p>

            <p>Layanan yang dipilih:</p>
            <ul>
                <?php
                foreach ($_POST["layanan"] as $x) {
                    echo "<li>$x</li>";
                }
                ?>
            </ul>

            <p>hobi:</p>
            <?php
            $hobi = $_POST["hobi"];

            for ($i = 0; $i < count($hobi); $i++) {
                if ($i == count($hobi) - 1) {
                    echo "<span>dan $hobi[$i]</span>";
                } else {
                    echo "<span>$hobi[$i], </span>";
                }
            }
            ?>

            <p>Tanggal lahir:</p>

            <?php
            if (isset($_POST["tanggal"])) {
                // Mengambil tanggal dari input pengguna
                $tanggal = date_create($_POST["tanggal"]);

                // Format tanggal lahir ke format "j F Y"
                $formatted = date_format($tanggal, "j F Y");
                echo "Tanggal lahir: $formatted<br>";

                // Menghitung umur pengguna berdasarkan tanggal saat ini
                $sekarang = date_create(); // Tanggal saat ini
                $umur = date_diff($tanggal, $sekarang);

                // Menampilkan umur dalam tahun
                echo "Umur: " . $umur->y . " tahun";
            }
            ?>




            <div class="d-flex flex-row">
                <input type="submit" value="Konfirmasi">
            </div>

        </form>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXlJZjZ3TZP3M9kD5ZfnL9HIbgGk5jSkD1jtgIPIT4tTKNbF07mswCyfIoDz" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgXp87P5BniPgKlYmCk4e3weE5JJXkk+GyT4Gp+6Q5w60pPtfZo" crossorigin="anonymous">
    </script>
</body>

</html>