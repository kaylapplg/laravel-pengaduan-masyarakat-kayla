<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
    <title>tampilan home</title>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gambar</title>
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #1C2870;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><font face="comic sans ms" color="white">Pengaduan Masyarakat</font></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <img src="{{ asset('/foto/home.png.png')}}" alt="Image" height="20" width="20">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="home"><font face="comic sans ms" color="white">Home</font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="isi_pengaduan"><font face="comic sans ms" color="white">Buat Pengaduan</font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="hasil_pengaduan"><font face="comic sans ms" color="white">Hasil Pengaduan</font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><font face="comic sans ms" color="white">Tanggapan</font></a>
        </li>
        <script>
    function confirmLogout() {
        var confirmLogout = confirm("Anda yakin ingin logout?");
        if (confirmLogout) {
            window.location.href = "/logout"; 
        }
    }
</script>

<a class="nav-link" href={{url("/logout")}}><button class="btn btn-outline-success" onclick="confirmLogout()"><font face="comic sans ms" color="white"><img src="{{ asset('/foto/logout.png.png')}}"  alt="Image" height="20" width="20">Logout</font></button></a>

  </div>
  </nav>
