<?php include 'head.php';

if(empty($id=$_SESSION['id'])){ ?>
  <script>window.location.href='index.php'</script>
<?php }else{
$result=tampilpendaftar($id);
$result1=tampildataortu($id);
$result2=tampilpendidikan($id);
$result3=tampildok($id);
$result4=tampilpembayaran($id);
$result5=tampildokumen($id);
?>


<style>
    .block-web.success-box {
        background: rgb(252, 252, 252);
        padding: 10px;
        /* color: white; */
    }
    
    .block-web.dark-box {
        background: darksalmon;
        padding: 10px;
        margin-top: 1%;
    }
    
    .header {
        background: #89b0d2;
        padding: 10px;
        margin-top: 5%;
        color: white;
    }
    
    .navbar {
        margin-bottom: 0;
    }
    
    .daftar {
        background-color: #e4e4e4;
    }
    
    #kepada {
        background-color: rgb(252, 252, 252);
    }

    .konfirm{
      background: rgb(252, 252, 252);
    }
    .col-md-9{
        left:10%;
    }
    .col-md-11
    {
        left:3%;
    }

</style>

<div class="container">
    <div class="col-md-11">
        <div class="header">
            <h3>Informasi</h3>
        </div>
        <div class="block-web success-box">
                <?php while ($row=mysqli_fetch_array($result)) { ?>

                <p style="font-weight:bold">Yth Sdr-i.
                    <?php echo strtoupper($row['nama_lengkap']) ?>
                </p>
                <table width=90%>
                    <tr>
                        <td>No Formulir</td>
                        <td>
                            <?php echo preg_replace('/[^a-zA-Z0-9 ]/','',$row['tgl_daftar']."000".$row['id']);?> </td>
                    </tr>
                    <tr>

                        <td>Kepada</td>
                        <td>
                            <?php echo strtoupper($row['nama_lengkap']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Pendaftaran Akun</td>
                        <td>
                            <?php echo $row['tgl_daftar'] ?>
                        </td>
                    </tr>
                </table>

                <p>Selamat, Anda telah berhasil masuk kehalaman pendaftaran TK Islam Budaya 1. Silahkan melakukan pendaftaran sesuai formulir yang terdapat pada laman ini.</p>
                <p>Pertanyaan dan Informasi, silahkan kontak Panitia di kbudaya1jagakarsa@yahoo.com atau (021) 727 0819</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-9">
        <div class="header">
            <h3>Progress Pengisian Blanko (Formulir)</h3>
        </div>
        <div class="block-web primary-box">

          <!--   <div class="porlets-content"> -->
                <li class="list-group-item"><?php

                 if($_SESSION['statusdidik']==0){ ?>
                    <a href="pendidikan.php" class="btn btn-primary btn-block ">
                        DATA SISWA
                    </a>
                <?php }else{?>
                     <a class="btn btn-success btn-block "><span class="glyphicon glyphicon-ok"></span>
                       DATA SISWA
                    </a>
                <?php } ?>
                </li>

                <li class="list-group-item">
                <?php if($_SESSION['status']==1){ ?>
                    <a class="btn btn-success btn-block "><span class="glyphicon glyphicon-ok"></span>
                        ORANG TUA
                    </a>
                <?php }else{?>
                      <a href="orangtua.php" class="btn btn-primary btn-block ">
                        ORANG TUA
                    </a>
                <?php } ?>
                </li>

                

                <li class="list-group-item">
                <?php if($_SESSION['statusdok']==1){ ?>
                    <a class="btn btn-success btn-block "><span class="glyphicon glyphicon-ok"></span>
                      DOKUMEN
                    </a>
                <?php }else{?>
                    <a href="dokumen.php" class="btn btn-primary btn-block ">
                        DOKUMEN
                    </a>
                <?php } ?>
                
             
            </div>
        </div>
    </div>
      </div>
<?php } ?>
     </div></div><br>
    <?php } include 'foot.php'; ?>