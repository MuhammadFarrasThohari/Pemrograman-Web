<!-- Ubah variabel disini -->
<?php
include "koneksi.php";
$title = $profile["nama"];
$email = $profile["email"];
$nomor = $profile["telphone"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="d-flex flex-column">
    <?php include "layout/header.php"; ?>

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
                                <span class="ms-2"><?php echo $email ?></span>
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-telephone" style="font-size: 1.5rem; color: #22aac9;"></i>
                                <span class="ms-2"><?php echo $nomor ?></span>
                            </li>
                        </ul>
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