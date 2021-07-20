<?php include 'head.php';


if(empty($id=$_GET['id'])){

}else{
$result=tampildataperid($id);

?>
<link rel="stylesheet" type="text/css" href="dt/css/dataTables.bootstrap.css">

<table>
  <tr> Periksa</tr>
  <tr><div class="form-group">
        <?php if (isset($_POST['submit'])) {
              $cek=$_POST['cek'];

              if(simpancekdata($cek,$id)){
                echo "<script>window.location.href='index.php'</script>";
              }else{
                echo "gagal";
              }
             } ?>
        <form action="" method="post" accept-charset="utf-8">
              <select name="cek" class="form-control" id="sel1">
                  <option value="1">Belum Diperiksa</option>
                  <option value="2">Ditolak</option>
                  <option value="3">Lanjutkan Pembayaran</option>

              </select><br>
            <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
        </form></tr>
      </table>
 

<div class="col-md-2"></div>
<div class="col-md-8">
<table class="table table-bordered table-responsive">
  <?php while ($row=mysqli_fetch_assoc($result)) { ?>
   <tr>
      <td class="colspan" colspan="2"> Data siswa </td>
    </tr>
    <tr>
      <td>Nama siswa</td>
      <td><?= $row['nama_siswa'] ?></td>
    </tr>

    <tr>
      <td>Jenis Kelamin/td>
      <td><?= $row['jenis_kelamin'] ?></td>
    </tr>

    <tr>
      <td>Tempat Lahir</td>
      <td><?= $row['tempat_lahir'] ?></td>
    </tr>

    <tr>
      <td>Tanggal Lahir</td>
      <td><?= $row['tgl_lahir'] ?></td>
    </tr>
    <tr>
      <td>Nomor Akta Kelahiran</td>
      <td><?= $row['no_akte'] ?></td>
    </tr>

    <tr>
      <td>Agama</td>
      <td><?= $row['agama'] ?></td>
    </tr>

    <tr>
      <td>Alamat Siswa</td>
      <td><?= $row['alamat_siswa'] ?></td>
    </tr>
    <tr>
      <td>Transportasi yang digunakan</td>
      <td><?= $row['transportasi'] ?></td>
    </tr>
    <tr>
      <td>Kelas</td>
      <td><?= $row['kelas'] ?></td>
    </tr>
    <tr>
      <td class="colspan" colspan="2"> Data Orang Tua </td>
    </tr>
    <tr>
      <td>Nama Ayah</td>
      <td><?= $row['nama_ayah'] ?></td>
    </tr>

    <tr>
      <td>Nama Ibu</td>
      <td><?= $row['nama_ibu'] ?></td>
    </tr>

    <tr>
      <td>Nama Wali</td>
      <td><?= $row['nama_wali'] ?></td>
    </tr>

    <tr>
      <td>Alamat</td>
      <td><?= $row['alamat'] ?></td>
    </tr>

    <tr>
      <td>Provinsi</td>
      <td><?= $row['provinsi'] ?></td>
    </tr>

    <tr>
      <td>Kota</td>
      <td><?= $row['kota'] ?></td>
    </tr>

    <tr>
      <td>Kecamatan</td>
      <td><?= $row['kecamatan'] ?></td>
    </tr>

    <tr>
      <td>Kode Pos</td>
      <td><?= $row['kodepos'] ?></td>
     </tr>

    <tr>
      <td>No Hp</td>
      <td><?= $row['nohp'] ?></td>
    </tr>
        <tr>
          <td>Email</td>
          <td><?= $row['email_ortu'] ?></td>
    </tr>
        <tr>
          <td>Pendidikan Ayah</td>
          <td><?= $row['pendidikan_ayah'] ?></td>
      </tr>
        <tr>
          <td>Pendidikan Ibu</td>
          <td><?= $row['pendidikan_ibu'] ?></td>
      </tr>
        <tr>
          <td>Pekerjaan Ayah</td>
          <td><?= $row['pekerjaan_ayah'] ?></td>
      </tr>
        <tr>
          <td>Pekerjaan Ibu</td>
          <td><?= $row['pekerjaan_ibu'] ?></td>
      </tr>
        <tr>
          <td>Penghasilan Orangtua</td>
          <td><?= $row['penghasilan_ortu'] ?></td>
        </tr>
        <tr>
          <td class="colspan" colspan="2">Dokumen</td>
        </tr>
        <tr>
          <td>Foto</td>
          <td><a href="../<?= $row['foto'] ?>">Lihat Foto</a></td>
        </tr>
        <tr>
          <td>KTP Orang Tua</td>
          <td><a href="../<?= $row['ktp'] ?>">Lihat Foto</a></td>
        </tr>
          <tr>
          <td>Akta Kelahiran</td>
          <td><a href="../<?= $row['akte'] ?>">Lihat Foto</a></td>
        </tr>
        <tr>
          <td>Kartu Keluarga</td>
          <td>
            <a href="../<?= $row['kk'] ?>">Lihat Foto</a>
          </td>
        </tr>
        
             <?php  }?>
      </div>
    </table>

<a href="index.php" class="btn btn-success">Kembali</a>
</div>

<div class="col-md-2"></div><br>
<div style="clear: both"></div>

<script src="dt/js/jquery.dataTables.min.js"></script>
<script src="dt/js/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready( function () {
          $('#pendaftar').DataTable({
            responsive:true
          });
      } );
        </script>

        <style>
  table{
    background-color:white;
    border-color:black;
    left: 10%;
  }
  .colspan{
    background-color:cyan;
    text-align: center;
  }
</style>
</head>

<?php } include 'foot.php'; ?>