<?php

include 'head.php';

if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $konfirmpass=$_POST['konfirmpass'];
    $date=date('ymd');

  if ($password==$konfirmpass){

    if(daftarformulir($nama,$email,$password,$date)){
      echo "<script>alert('Pendaftaran Berhasil, Silahkan Login')</script>";
       echo "<script>window.location.href='login.php'</script>";
    }else{
       echo "<script>alert('Pendaftaran Gagal')</script>";
       echo "<script>window.location.href='register.php'</script>";

    }
}else{
    echo "<script>alert('Password konfirmasi tidak sama, silahkan ulangi kembali')</script>";
    echo "<script>window.location.href='register.php'</script>";

 }
}
?>
  <div class="container-fluid">
    <div class="row" style="margin-left:0;margin-right:0;">
    <div class="col-md-5 box">
        <div class="jumbotron daftar">
            <div class="header">
                <h3><center>Pendaftaran Akun</center></h3>
            </div>
            <hr style="border:1px solid black">
            <form action="" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="email" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="password" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Konfirmasi Password</label>
                    <input type="password" name="konfirmpass" class="form-control" placeholder="Konfirmasi password" required>
                </div>
                 <input type="hidden" name="date" value="<?php echo date("y-m-d"); ?>">
                <div class="form-group">
                    <input type="submit" name="submit" href="login.php" class="btn btn-block btn-primary btn-lg login" value="Daftar">
                </div>

                <div class="form-group">
                    <a class="btn btn-block btn-primary login" href="login.php"> Login </a>
                </div>


            </form>
          </div>
        </div>
      </div>
    <style>
      .box{
          left: 50%;
          margin-left: -290px;
        }
      .block-web.primary-box {
            background: #4eb2d8;
            
            color: white;
        }
        
        .jumbotron{
      background-color: gray;
    }

    .navbar-default{
      margin-bottom: 0;
    }
        .navbar {
            margin-bottom: 0;
        }
      
      .login{
        background: #2e6da4;
      }

      .daftar{
            background-color: #e4e4e4;
      }

      .petunjuk{
        border-radius: 0px;
      }

</style>
<?php
include'foot.php';