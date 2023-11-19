@include('layout.navbar')

@section('content')

<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset("bs/css/bootstrap.min.css") }}>
    <title>proses isi pegaduan</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col"><font face="comic sans ms">no</font></th>
      <th scope="col"><font face="comic sans ms">id pengaduan</font></th>
      <th scope="col"><font face="comic sans ms">tanggal pengadduan</font></th>
      <th scope="col"><font face="comic sans ms">nik</font></th>
      <th scope="col"><font face="comic sans ms">isi laporan</font></th>
      <th scope="col"><font face="comic sans ms">foto</font></th>
      <th scope="col"><font face="comic sans ms">aksi</font></th>
    </tr>
  </thead>
</table>
</body>
</html>
</div>