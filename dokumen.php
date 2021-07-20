<?php include 'head.php'; 

if(empty($id=$_SESSION['id'])){ ?>
  <script>window.location.href='index.php'</script>
<?php }else
{$result=tampildok($id);

?>

<style>

.jumbotron{
  background-color: #e4e4e4;
}

.navbar-default{
  margin-bottom: 0;
}
</style>

  <div class="container">
    <div class="row">
     <div class="col-md-4 petunjuk">
    <div>

      <legend>Formulir Data Dokumen</legend>
      Isilah formulir dokumen ini dengan informasi yang sebenar-benarnya.
      Dokumen yang diupload harus memenuhi syarat:
      <ul>
        <li>format jpg/png/jpeg</li>
        <li>ukuran foto tidak boleh lebih dari 5 mb</li>
      </ul>
      
      
    </div>
    <br>
    <div>
    <legend>Halaman Utama</legend>
      <legend>
        <a class="btn btn-success btn-block" href="user.php">Rincian</a><br>
      </legend>
    </div>
    </div>
      <div class="col-md-8">

<form action="upload_foto.php" method="post" enctype="multipart/form-data">
    

        <div class="form-group">
          <label for="exampleInputEmail1">Photo 2x3</label>
        <?php if($_SESSION['foto']==''){ ?>
          <input type="file" name="foto" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" name="simpan_foto" class="btn btn-primary"> Simpan Foto </button>
            <?php }else{?>
             <p>Foto Tersimpan</p>
                <?php }?>
        </div>
        </form>

<form action="upload_kk.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleInputEmail1">Kartu Keluarga</label>
        <?php if($_SESSION['kk']==''){ ?>
          <input type="file" name="kk" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" name="simpankk" class="btn btn-primary">Simpan Kartu Keluarga </button>
            <?php }else{?>
              <p>Kartu Keluarga Tersimpan</p>
              <?php }?>
        </div>
      </form>


        
      <form action="upload_akte.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleInputEmail1">Akte Kelahiran</label>
          <?php if($_SESSION['akte']==''){ ?>
          <input type="file" name="akte" class="form-control"  >
        </div>
        <div class="form-group">
            <button type="submit" name="simpanakte" class="btn btn-primary"> Simpan Akte </button>
            <?php }else{?>
              <p>Akte Tersimpan</p>
                <?php }?>
        </div>
      </form>
      
      <form action="upload_ktp.php" method="post" enctype="multipart/form-data">  
        <div class="form-group">
          <label for="exampleInputEmail1">KTP Orang Tua</label>
          <?php if($_SESSION['ktp']==''){ ?>
          <input type="file" name="ktp" class="form-control" >
        </div>
        <div class="form-group">
            <button type="submit" name="simpanktp" class="btn btn-primary"> Simpan KTP orang Tua </button>
             <?php }else{?>
              <p>KTP Orang Tua tersimpan</p>
                <?php }?>
        <a  href="user.php" class="btn btn-success btn-block "></span>Simpan</a>
    
        </div>
      </form>       
      </div>
    </div>
  </div>
  <script src="dt/js/jquery.dataTables.min.js"></script>
<script src="dt/js/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready( function () {
          $('#pendaftar').DataTable({
            responsive:true
          });
      } );
  <?php ?>
  <?php }include 'foot.php'; ?>