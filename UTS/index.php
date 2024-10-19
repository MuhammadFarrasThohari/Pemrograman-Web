<!-- Ubah value variabel disini -->
<?php
$title = "MUHAMMAD FARRAS THOHARI RAMADHAN";
$description = "UNIVERSITAS PEMBANGUNAN JAYA INFORMATICS STUDENT";
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

<body>
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #22aac9;">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php" style="color: white;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="project.php" style="color: white;">Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php" style="color: white;">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php" style="color: white;">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="skill.php" style="color: white;">Skills</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container d-flex flex-column justify-content-center align-items-center vh-100 text-center">
            <h1 class="display-4 fw-bold mb-3"><?php echo $title; ?></h1>
            <p class="lead mb-4"><?php echo $description; ?></p>
            <a href="about.php" class="btn btn-lg" style="background-color: #22aac9; color: white;">LEARN MORE</a>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>