<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Galery Foto</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Web Galeri Foto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mt-2" id="navbarNav">
            <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
            <a href="login.php" class="btn btn-outline-primary m-1">Masuk</a>
            </div>
            
        </div>
        </div>
    </nav>

    <form action="proses_login.php" method="post">
        <table>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body bg-light">
                        <div class="text-center">
                            <h5>Login Aplikasi</h5>
                            <form action="home.php" method="POST">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" required>            
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" required>
                                <div class="d-grid mt-2">
                                    <button class="btn btn-primary" type="submit" name="kirim">Masuk</button>
                                </div>
                            </form>
                            <hr>
                            <p>Belum Punya Akun? <a href="register.php">login disini</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
        <p>&copy; UKK RPL 2024 | Sigit Purnomo</p>
    </footer>
</body>
</html>