<?php include 'head.php';
if(empty($_SESSION['id'])){ ?>
  <script>window.location.href='login.php'</script>
<?php }else{
$result=tampilsiswa();
$_SESSION['nama'];
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<center>
 
		<h2> LAPORAN HASIL PENERIMAAN PESERTA DIDIK BARU 2021</h2>
 
	</center>
	<link rel="stylesheet" type="text/css" href="dt/css/dataTables.bootstrap.css">

<table class="table table-striped table-bordered">
  <thead>

    <tr>
      <th>No</th>
      <th>No Pendaftaran</th>
      <th>Nama Siswa</th>
      <th>Email</th>
      <th>kelas</th>
      <th>Jenis Kelamin</th>
      <th>Tgl Daftar</th>
      <th>Status</th>

      <!-- <th>Status SMP</th>
      <th>Kota</th>
      <th>Kecamatan</th>
      <th>Kode Pos</th>
      <th>Nama SMP</th>
      <th>No Ijazah</th>
      <th>Tahun Lulus</th> -->
    </tr>
  </thead>

    
      <tbody>
      
      <?php $no=1; while ($row=mysqli_fetch_assoc($result)) {
        
      ?>
        <tr>
        <td><?= $no; ?></td>
        <td>
          <?php echo preg_replace('/[^a-zA-Z0-9 ]/','',$row['tgl_daftar']."000".$row['id']);?> </td>
        <td><?= $row['nama_siswa'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['kelas'] ?></td>
        <td><?= $row['jenis_kelamin'] ?></td>
        <td><?= $row['tgl_daftar'] ?></td>
        <td><?php if($row['status']==1){ ?>
          <a>Diterima</a>
          <?php }elseif ($row['status']==2){?>
            <a>Ditolak</a>
          <?php }else{?>
            <a class="btn btn-danger">Belum diperiksa</a>
          <?php } ?> 
        </td>
        
        </tr>
        <?php $no++; }?>

      </tbody>
    
    
  </thead>

</table>

<script>
		window.print();
	</script>
 
</body>
</html>
<?php  }?>