<?php include 'head.php'; 

if(empty($id=$_SESSION['id'])){ ?>
  <script>window.location.href='index.php'</script>
<?php }else{
if(isset($_POST['submit'])){
  $nama=$_SESSION['nama'];
  $id_pendaftar=$_SESSION['id'];
  $nama_siswa=$_POST['nama_siswa'];
  $jenis_kelamin=$_POST['jenis_kelamin'];
  $tempat_lahir=$_POST['tempat_lahir'];
  $tgl_lahir=$_POST['tgl_lahir'];
  $no_akte=$_POST['no_akte'];
  $agama=$_POST['agama'];
  $alamat_siswa=$_POST['alamat_siswa'];
  $transportasi=$_POST['transportasi'];
  $kelas=$_POST['kelas'];
  $status=1;

  if(simpanpendidikan($nama,$id_pendaftar,$nama_siswa,$jenis_kelamin,$tempat_lahir,$tgl_lahir,$no_akte,$agama,$alamat_siswa,$transportasi,$kelas,$status)){
    echo "<script>alert('Berhasil di simpan')</script>";
    echo "<script>window.location.href='tampildata_pendidikan.php'</script>";
  }else{
    echo mysqli_error($konek);
  }

}

?>
<style>


.jumbotron{
  background-color: #e4e4e4;
}
.navbar-default{
  margin-bottom: 0;
}

.form{
  background-color: rgb(252, 252, 252);
}
</style>
  <div class="container">
    <div class="row">

      <div class="col-md-4" id="petunjuk">
       <div>
      <legend>Formulir Pendidikan</legend>
      Isilah formulir Pendidikan ini dengan informasi yang sebenar-benarnya.
    </div>
    <br>
    <div>
    <legend>Halaman Utama</legend>
      <legend>
        <a class="btn btn-success btn-block" href="user.php">Rincian</a><br>
      </legend>
    </div>
    </div>

      <div class="col-md-8 form">
      <div class="header">
      <h3></h3>
      </div>
      <form action="" method="post">

        <div class="form-group">
          <label for="exampleInputEmail1">Nama Siswa</label>
          <input type="text" name="nama_siswa" class="form-control"  placeholder="Nama Lengkap">
        </div>

       <div class="form-group">
            <label>Jenis Kelamin</label>
             <label class="radio-inline">
             <input type="radio" name="jenis_kelamin" value="laki-laki"><span class="custom-radio"></span> Laki-laki  
          </label>
              <label class="radio-inline">
              <input type="radio" name="jenis_kelamin" value="perempuan"><span class="custom-radio"></span> Perempuan  
          </label>
                </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Tempat Lahir</label>
          <input type="text" class="form-control" name="tempat_lahir"  placeholder="Tempat Lahir">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Tanggal Lahir</label>
          <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required>
          </div>

        <div class="form-group">
          <label for="exampleInputEmail1">No Akte Kelahiran</label>
          <input type="text" class="form-control" name="no_akte"  placeholder="No Akte Kelahiran">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Agama</label>
            <select name="agama" class="form-control" required>
            <option value="0"> -- Pilih Agama -- </option>
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
            <option value="katholik">Katholik</option>
            <option value="hindu">Hindu</option>
            <option value="budha">Budha</option>
            <option value="konghucu">Konghucu</option>
          </select>
        </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <textarea  cols="50" rows="3" name="alamat_siswa" class="form-control" placeholder="Isikan dengan Alamat Rumah" required></textarea>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Transportasi yang digunakan</label>
            <select name="transportasi" class="form-control" required>
            <option value="0"> -- Pilih Transportasi -- </option>
            <option value="Kendaraan Umum">Kendaraan Umum</option>
            <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
            <option value="Jalan Kaki">Jalan Kaki</option>
            <option value="Lain-Lain">Lain-Lain</option>
          </select>
       </div>
       <div class="form-group">
          <label for="exampleInputEmail1">Mendaftar Kelas</label>
          <select name="kelas" class="form-control" required>
            <option value="0"> -- Pilih Kelas -- </option>
            <option value="A">Kelas A</option>
            <option value="B">Kelas B</option>
            <option value="PG">Kelas Playgroup</option>
          </select>
        </div>
        
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-block btn-primary" value="Simpan Data Pendidikan">
        </div>
        </form>
      </div>

    </div>
  </div>
<br>
    
  <?php } include 'foot.php'; ?>
