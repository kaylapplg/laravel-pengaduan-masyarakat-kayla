<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login petugas</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootsrap.min.css">
</head>
<body>
<body bgcolor="white">
<div style="border: 0; padding: 3px; background-color: #1C2870; text-align: left;">
</div>
<div style="border: 0; padding: 30px; background-color: white; text-align: left;"></div>
<body>
<img src="{{ asset('/foto/login.png')}}" style="display:block; margin:auto; width:250px; height:250px;">
<center><h2><font size="6"><font color="#1C2870"><font face="comic sans ms">LOGIN PETUGAS</font></font></font></h2></center>
    <div>
    <center>
    <form action= "login" method="post">
        @method("POST")
        @CSRF
        <b><p><font color="#1C270"><font face="comic sans ms"> Username: </font></font><input type="text" name="username" id=""><b></p>
        <p><b><font color="#1C270"><font face="comic sans ms"> Password: </font></font><input type="password" name="password" id=""><b></p>
        <button style="background-color:#1C2870;"type="submit"><font color="white"><font face="comic sans ms">Login</font></font></button></a>
        <div>
        <p><font face="comic sans ms">Belum punya akun?</font>
            <a href="registrasi"><font face="comic sans ms">Daftar disini</font></a>
        </p>
        </div>
    </form>
    </center>
    <div style="border: 0; padding: 75px; background-color: white; text-align: left;"></div>
    <div style="border: 0; padding: 3px; background-color: #1C2870; text-align: left;"></div>
</body>
</html>
</body>
</html>