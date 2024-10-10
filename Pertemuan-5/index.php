<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kontak</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header class="nav bg-dark p-3">
        <a href="dashboard.html" class="text-white">Home</a>
        <a href="kontak.html" class="text-white ml-3">Kontak</a>
        <a href="about.html" class="text-white ml-3">About</a>
    </header>

    <main class="container mt-5">
        <form action="konfirmasi.php" method="post">
            <h1 class="mb-4">Formulir Kontak</h1>
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="nama" />
            </div>

            <div class="form-group">
                <label>Kewarganegaraan:</label><br />
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" value="WNI" id="wni" name="Kewarganegaraan" />
                    <label class="form-check-label" for="wni">WNI</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" value="Asing" id="asing" name="Kewarganegaraan" />
                    <label class="form-check-label" for="asing">Asing</label>
                </div>
            </div>

            <div class="form-group">
                <label>Layanan:</label><br />
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" value="Website" id="website" name="layanan[]" />
                    <label class="form-check-label" for="website">Website</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" value="Hosting" id="hosting" name="layanan[]" />
                    <label class="form-check-label" for="hosting">Hosting</label>
                </div>
            </div>

            <div class="form-group">
                <label for="">Hobby:</label>
                <div class="form-check">
                    <input type="checkbox" name="hobi[]" id="lari" value="Lari">
                    <label for="lari">Lari</label>
                </div>

                <div class="form-check">
                    <input type="checkbox" name="hobi[]" id="loncat" value="Loncat">
                    <label for="loncat">loncat</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="hobi[]" id="renang" value="Renang">
                    <label for="renang">Renang</label>
                </div>
            </div>

            <div class="form-group">
                <label for="tanggal">Tgl Lahir:</label>
                <input type="date" name="tanggal" id="tanggal">

            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Kirim" />
                <input type="reset" class="btn btn-secondary" value="Hapus" />
            </div>
        </form>
    </main>


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