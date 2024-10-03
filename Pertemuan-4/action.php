<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Kontak</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Konfirmasi Kontak</h1>
        <p>Selamat datang, <strong><?php echo htmlspecialchars($_POST["nama"]); ?></strong>!</p>

        <p>Kewarganegaraan:
            <strong>
                <?php 
                echo isset($_POST["Kewarganegaraan"]) ? htmlspecialchars($_POST["Kewarganegaraan"]) : 'Tidak ditentukan'; 
                ?>
            </strong>
        </p>

        <p>Layanan yang dipilih:</p>
        <ul>
            <?php
            if (isset($_POST['layanan'])) {
                foreach ($_POST['layanan'] as $layanan) {
                    echo '<li>' . htmlspecialchars($layanan) . '</li>';
                }
            } else {
                echo '<li>Tidak ada layanan yang dipilih.</li>';
            }
            ?>
        </ul>

        <a href="kontak.html" class="btn btn-primary">Kembali ke Formulir</a>
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