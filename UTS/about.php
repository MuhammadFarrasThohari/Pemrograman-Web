<?php
include "koneksi.php";
$title = $profile["nama"];
$about = $profile["about"];
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="d-flex flex-column">
    <?php include "layout/header.php"; ?>

    <main>
        <div class="container my-5">
            <h1 class="mb-4">About Me</h1>
            <div class="row">
                <div class="col-md-6 order-md-1 order-2 my-2">
                    <p>
                        <?php echo $about; ?>
                    </p>
                </div>
                <div class="col-md-6 order-md-2 order-1 d-flex justify-content-center my-2">
                    <img src="./src/Profil.jpg" alt="Foto Profil" class="img-fluid rounded"
                        style="height: 300px; width: 300px; object-fit: cover;">
                </div>
            </div>
        </div>
    </main>

    <?php include "layout/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>