<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Farras Thohari Ramadhan - Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
            <h1 class="mb-4">Let's Start a Conversation</h1>
            <h2 class="mb-4">Please fill this form or contact me directly</h2>

            <div class="row">
                <!-- Form sebelah kiri -->
                <div class="col-md-6">
                    <div class="p-4" style="background-color: #22aac9; border-radius: 24px; color: white;">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullName"
                                    placeholder="Enter your full name">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="5"
                                    placeholder="Enter your message"></textarea>
                            </div>

                            <button type="submit" class="btn btn-light btn-lg" style="color: #22aac9;">Send
                                Message</button>
                        </form>
                    </div>
                </div>

                <!-- Informasi kontak sebelah kanan -->
                <div class="col-md-6 d-flex align-items-start">
                    <div class="p-4" style="border-radius: 24px; background-color: #f8f9fa;">
                        <h3>Contact Information</h3>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="bi bi-envelope" style="font-size: 1.5rem; color: #22aac9;"></i>
                                <span class="ms-2">farras.thohari@gmail.com</span>
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-telephone" style="font-size: 1.5rem; color: #22aac9;"></i>
                                <span class="ms-2">081238192929</span>
                            </li>
                        </ul>
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