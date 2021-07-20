<?php 

include 'head.php';

$id=$_SESSION['id'];
$result=tampilpendidikan_cetak($id);

?>

<style>
	.navbar-default{
		display: none;
	}

  .col-md-14 h2{
    font-weight: bold;
  }
</style>
<div class="col-md-14">
  <center><h2>Data Siswa</h2></center>
</div>

<div class="col-md-3">
</div>

<div class="col-md-6">
<table class="table table-striped table-bordered table-responsive">
<?php while ($row=mysqli_fetch_assoc($result)) { ?>

    <tr>
      <td>Nama Lengkap</td>
      <td><?= $row['nama_siswa'] ?></td>
    </tr>

    <tr>
      <td>Jenis Kelamin</td>
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
      <td>No. Akte Kelahiran</td>
      <td><?= $row['no_akte'] ?></td>
    </tr>

    <tr>
      <td>Agama</td>
      <td><?= $row['agama'] ?></td>
    </tr>

    <tr>
      <td>Alamat</td>
      <td><?= $row['alamat_siswa'] ?></td>
    </tr>

    <tr>
      <td>Transportasi yang digunakan</td>
      <td><?= $row['transportasi'] ?></td>
    </tr>

    <tr>
      <td>Kelas yang dipilih</td>
      <td><?= $row['kelas'] ?></td>
    </tr>
      
        <?php  }?>

  
</table>
<a href="user.php" class="btn btn-success">Kembali</a>
</div>

<div class="col-md-2"></div><br>
<div style="clear: both;</div>
<?php include 'foot.php'; ?>
