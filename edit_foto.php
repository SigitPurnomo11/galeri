<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Foto</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>
<body>
<img src="img/000.jpg" class="img-thumbnail" alt="...">
    <p>Selamat datang <b><?=$_SESSION['namalengkap']?></b></p>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">Web Galeri Foto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="halaman_landing.php">Tambah</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="album.php">Album</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="foto.php">Foto</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <form action="update_foto.php" method="post" enctype="multipart/form-data">
        <?php
            include "koneksi.php";
            $fotoid=$_GET['fotoid'];
            $sql=mysqli_query($conn,"select * from foto where fotoid='$fotoid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
        <input type="text" name="fotoid" value="<?=$data['fotoid']?>" hidden>
        <table>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judulfoto" value="<?=$data['judulfoto']?>"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsifoto" value="<?=$data['deskripsifoto']?>"></td>
            </tr>
            <tr>
                <td>Lokasi File</td>
                <td><input type="file" name="lokasifile"></td>
            </tr>
            <tr>
                <td>Album</td>
                <td>
                    <select name="albumid">
                    <?php
                        $userid=$_SESSION['userid'];
                        $sql2=mysqli_query($conn,"select * from album where userid='$userid'");
                        while($data2=mysqli_fetch_array($sql2)){
                    ?>
                            <option value="<?=$data2['albumid']?>" <?php if($data2['albumid']==$data['albumid']){echo 'selected';}?>><?=$data2['namaalbum']?></option>
                    <?php
                        }
                    ?>
                    </select>
                    
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Ubah"></td>
            </tr>
        </table>
        <?php
            }
        ?>
    </form>
    <footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
        <p>&copy; UKK RPL 2024 | Sigit Purnomo</p>
    </footer>

    
</body>
</html>