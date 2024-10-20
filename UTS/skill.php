<?php
include "koneksi.php";

$title = $profile["nama"];
$allSkills = json_decode($skills["skills"]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="d-flex flex-column">
    <?php include "layout/header.php"; ?>

    <main>
        <div class="container my-5">
            <h1 class="mb-4">Skills</h1>
            <div class="accordion" id="accordionExample">
                <!-- Bahasa Pemrograman -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Bahasa Pemrograman
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body my-2">
                            <div class="d-flex justify-content-around">
                                <?php foreach ($allSkills->bahasa_pemrograman as $skill): ?>
                                    <div class="text-center">
                                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/<?php echo strtolower($skill); ?>/<?php echo strtolower($skill); ?>-original.svg"
                                            alt="<?php echo $skill; ?> Logo" width="60" height="60">
                                        <p><?php echo $skill; ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Web Development -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Web Development
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body my-3">
                            <div class="d-flex justify-content-around">
                                <?php foreach ($allSkills->web_development as $skill): ?>
                                    <div class="text-center">
                                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/<?php echo strtolower($skill); ?>/<?php echo strtolower($skill); ?>-original.svg"
                                            alt="<?php echo $skill; ?> Logo" width="60" height="60">
                                        <p><?php echo $skill; ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3D Modelling -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3D Modelling
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body my-3">
                            <div class="d-flex justify-content-around">
                                <?php foreach ($allSkills->{"3d_modelling"} as $skill): ?>
                                    <div class="text-center">
                                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/blender/blender-original.svg"
                                            alt="Blender Logo" width="60" height="60">
                                        <p><?php echo $skill; ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
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