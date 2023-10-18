    @include('layout.navbar')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bs/bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <title>proses isi pegaduan</title>
</head>
<body>
<form class="row g-3">
  <div class="col-md-2">
  <br><font face="comic sans ms"><label for="id pengaduan" class="form-label">Id Pengaduan</label></font></br>
    <input type="text" class="form-control" id="pengaduan">
  </div>
  <div class="col-md-2">
  <br><font face="comic sans ms"><label for="tanggal pengaduan" class="form-label">Tanggal Pengaduan</label></font></br>
    <input type="date" class="form-control" id="tanggal">
  </div>
  <div class="col-2">
  <br><font face="comic sans ms"><label for="nik" class="form-label">Nik</label></font><br>
    <input type="text" class="form-control" id="nik">
  </div>
  <div class="col-5">
  <br><font face="comic sans ms"><label for="isi laporan" class="form-label">Isi Laporan</label></font></br>
    <input type="text" class="form-control" id="isi laporan">
  </div>
  <div class="col-3">
  <br><font face="comic sans ms"><label for="bukti foto" class="form-label">Bukti foto</label></font></br>
  <font face="comic sans ms"><input type="file" class="form-control" id="bukti foto"></font>
  </div>
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck"><font face="comic sans ms">Cek kembali</label></font>
    </div>
  </div>
  <div class="col-12">
  <a class="nav-link" href="isi_pengiriman_pengaduan.php"><button type="submit" class="btn btn-primary">Kirim</button>
  </div>
</form>
</body>
@endsection