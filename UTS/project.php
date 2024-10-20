<!-- Ubah value variabel disini -->
<?php
include "koneksi.php";

$title = $profile["nama"];
$judulProject = $projects["nama_project"];
$description = $projects["deskripsi_project"];
$linkGithub = $projects["link_project"];
$teknologi = json_decode($projects["tech_stack"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="d-flex flex-column">
    <?php include "layout/header.php"; ?>

    <main>
        <div class="container my-5">
            <h1 class="mb-4">Projects</h1>
            <div class="row mb-5">

                <div class="col-md-4">
                    <img src="./src/MyOffice.png" alt="<?php echo $judulProject ?>" class="img-fluid rounded">
                </div>

                <div class="col-md-8">
                    <h2><?php echo $judulProject ?></h2>
                    <p><?php echo $description ?></p>
                    <a href="<?php echo $linkGithub ?>" class="">Github Link</a>
                    <div class="mt-3">
                        <h5>Teknologi yang digunakan</h5>
                        <?php foreach ($teknologi as $tech) : ?>
                            <span class="badge text-light" style="background-color: #22aac9;"><?php echo $tech; ?></span>
                        <?php endforeach; ?>
                    </div>
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