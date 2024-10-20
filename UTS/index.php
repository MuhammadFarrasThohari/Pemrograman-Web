<!-- Ubah value variabel disini -->
<?php
include "koneksi.php";
$title = $profile["nama"];
$nama = $profile["nama"];
$description = $profile["deskripsi"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="d-flex flex-column">
    <?php include "layout/header.php"; ?>

    <main>
        <div class="container d-flex flex-column justify-content-center align-items-center vh-100 text-center">
            <h1 class="display-4 fw-bold mb-3"><?php echo strtoupper($nama); ?></h1>
            <p class="lead mb-4"><?php echo $description; ?></p>
            <a href="about.php" class="btn btn-lg" style="background-color: #22aac9; color: white;">LEARN MORE</a>
        </div>
    </main>

    <?php include "layout/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>