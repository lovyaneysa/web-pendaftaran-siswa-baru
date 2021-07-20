<?php include 'config/config.php'; ?>
<html lang="en">
 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Pendaftaran</title>
    <script src="js/jquery.min.js"></script>

  
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
  <nav class="navbar navbar-default">
    
   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img class="navbar-brand logo" src="img/logo.png">
      <a class="navbar-brand judul" href="index.php">TK ISLAM BUDAYA 1</a>

    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

      <?php if(empty($_SESSION['id'])){
      ?>
      <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Profil.php">Tentang Sekolah</a></li>
            <li><a href="visimisi.php">Visi dan Misi</a></li>
          </ul>
        </li>
        <li><a href="kesiswaan.php">Kesiswaan</a></li>
        <li><a href="petunjuk.php">Pendaftaran</a></li>
        <li><a href="login.php">Login</a></li>
      <?php }else{ ?>
          <li><a href="user.php">Home</a></li>
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Riwayat Pendaftaran<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="statuspendaftaran.php">Status Pendaftaran</a></li>
            <li><a href="tampildata_pendidikan.php">Data Siswa</a></li>
            <li><a href="tampildata_ortu.php">Data Orang tua</a></li>
          </ul>
        </li>
        <li><a href="logout.php">Keluar</a></li>
        <?php } ?>
      </ul>
    </div>
  </nav>
</div>
   <div class="jumbotron luhur">
        <h2><center>PENDAFTARAN SISWA BARU</center></h2>
        <h3><center>TK ISLAM BUDAYA 1</center></h3>
    </div>
<style>

  .logo{
    width: 105px;
    height: 90px;
    padding-top:5px;
  }
  .navbar-default {
    background-color: green;
    border-color: green;
    color: white;
}
 .judul{
  padding-top:30px;
 }

.navbar-default .navbar-brand {
    color: white;

}

.navbar-default .navbar-nav>li>a {
    color: white;
    padding-top:30px;

}

.luhur {
  background-image:url(img/background.jpeg);
  background-size: 100%;
  color: white;

}

.jumbotron{
  padding: 30px 0;
  background-color: green;

}
.navbar-default{
  margin-bottom: 0;
}
</style>
</body>
