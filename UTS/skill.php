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
    <link rel="stylesheet" href="styles.css">
</head>

<body class="d-flex flex-column">
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
        <div class="container my-5">
            <h1 class="mb-4">Skills</h1>
            <div class="accordion" id="accordionExample">
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
                                <!-- Python -->
                                <div class="text-center">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg"
                                        alt="Python Logo" width="60" height="60">
                                    <p>Python</p>
                                </div>
                                <!-- Java -->
                                <div class="text-center">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg"
                                        alt="Java Logo" width="60" height="60">
                                    <p>Java</p>
                                </div>
                                <!-- JavaScript -->
                                <div class="text-center">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                                        alt="JavaScript Logo" width="60" height="60">
                                    <p>JavaScript</p>
                                </div>
                                <!-- C -->
                                <div class="text-center">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/c/c-original.svg"
                                        alt="C Logo" width="60" height="60">
                                    <p>C</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                                <!-- Django -->
                                <div class="text-center">
                                    <img src="https://static.djangoproject.com/img/logos/django-logo-positive.svg"
                                        alt="Django Logo" width="60" height="60">
                                    <p>Django</p>
                                </div>
                                <!-- React -->
                                <div class="text-center">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg"
                                        alt="React Logo" width="60" height="60">
                                    <p>React</p>
                                </div>
                                <!-- Bootstrap -->
                                <div class="text-center">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-plain.svg"
                                        alt="Bootstrap Logo" width="60" height="60">
                                    <p>Bootstrap</p>
                                </div>

                                <!-- Next.js -->
                                <div class="text-center">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nextjs/nextjs-original-wordmark.svg"
                                        alt="Next.js Logo" width="60" height="60">
                                    <p>Next.js</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                3d Modelling
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body my-3">
                                <div class="d-flex justify-content-around">
                                    <!-- Blender -->
                                    <div class="text-center">
                                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/blender/blender-original.svg"
                                            alt="Blender Logo" width="60" height="60">
                                        <p>Blender</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </main>

    <footer class="text-center py-4" style="background-color: #22aac9;">
        <p class="text-white mb-0">Hak Cipta &copy; 2024 Muhammad Farras Thohari Ramadhan</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>