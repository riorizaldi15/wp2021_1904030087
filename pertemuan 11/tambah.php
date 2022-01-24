<?php
  // date_default_timezone_get("Asia/Jakarta");

  require 'function.php';

  if (isset($_post['tambah'])) {
    if (tambah($_post) > 0){
      echo "
        <script>
        alert('Data Berhasil Diinput..!');
        document.location.href= 'index.php'
        </script>
        ";
    } else{
        echo "
        <script>
        alert('Data Gagal Diinput..!');
        </script>
        ";
    }
  }
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="tema/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- font -->
  <link rel="stylesheet" href="tema/fontawesome/css/all.min.css">

  <title>CRUD</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">SIPEMABA || Kampus Kita</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
        <div class="text-white">
          <?php echo date('l, d-m-y'); ?>
        </div>
      </div>
    </div>
  </nav>

  <!-- Sidebar -->
  <div class="row">
    <div class="col-md-2 mt-4 pr-3 pt-5 bg-secondary">
      <!-- Menu -->
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="#"><i class="fas fa-tachometer-alt"></i>
            Dashboard</a>
          <hr class="bg-dark">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php"><i class="fas fa-users"></i> Calon Mahasiswa</a>
          <hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="tambah.php"><i class="fas fa-user-edit"></i> Input Camaba</a>
          <hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fas fa-chalkboard-teacher"></i> Daftar Dosen</a>
          <hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fas fa-calendar-alt"></i> Jadwal Kuliah</a>
          <hr>
        </li>
      </ul>
    </div>

    <!-- Konten -->
    <div class="col-md-10 p-5 pt-5">
      <h3 class="pt-4"><i class="fas fa-users"> Input Data Calon Mahasiswa</i></h3>
      <hr>

      <form method="post" action="">
        <div class="form-group">
          <label for="nama">Nama :</label>
          <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" autofocus required
            autocomplete="off">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat :</label>
          <textarea type="text" class="form-control" id="alamat" placeholder="Alamat Lengkap" name="alamat" required
            autocomplete="off"></textarea>
        </div>
        <div class="form-group">
          <label for="jenis_kelamin">Jenis Kelamin</label>
          <select class="form-select" aria-label="jenis_kelamin" id="jenis_kelamin" name="jenis_kelamin" required
            autocomplete="off">
            <option selected>Pilih Salah Satu</option>
            <option value="LAKI-LAKI">LAKI-LAKI</option>
            <option value="PEREMPUAN">PEREMPUAN</option>
          </select>
        </div>
        <div class="form-group">
          <label for="agama">Agama</label>
          <select class="form-select" aria-label="agama" id="agama" name="agama" required autocomplete="off">
            <option selected>Pilih Salah Satu</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Protestan">Protestan</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
          </select>
        </div>
        <div class="form-group">
          <label for="sekolah_asal">Sekolah Asal :</label>
          <input type="text" class="form-control" id="sekolah_asal" placeholder="Sekolah Asal" name="sekolah_asal"
            required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="foto_maba">Foto Maba :</label>
          <input type="text" class="form-control" id="foto_maba" placeholder="Foto Maba" name="foto_maba" required
            autocomplete="off">
        </div>
        <div class="mt-3">
          <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>