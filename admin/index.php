<?php include 'head.php';
if(empty($_SESSION['id'])){ ?>
  <script>window.location.href='login.php'</script>
<?php }else{
$result=tampilpendaftar();
$_SESSION['nama'];
?>
<link rel="stylesheet" type="text/css" href="dt/css/dataTables.bootstrap.css">

<h2>Data Pendaftar</h2>
<table class="table table-striped table-bordered">

  <thead>
    <tr>
      <th>No</th>
      <th>No Pendaftaran</th>
      <th>Nama Lengkap</th>
      <th>Email</th>
      <th>kelas</th>
      <th>Jenis Kelamin</th>
      <th>Tgl Daftar</th>
      <th>Status</th>
      <th>Periksa</th>
    </tr>
  </thead>

    
      <tbody>
      
      <?php $no=1; while ($row=mysqli_fetch_assoc($result)) {
        
      ?>
        <tr>
        <td><?= $no; ?></td>
        <td>
          <?php echo preg_replace('/[^a-zA-Z0-9 ]/','',$row['tgl_daftar']."0".$row['id']);?> </td>
        <td><?= $row['nama_siswa'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['kelas'] ?></td>
        <td><?= $row['jenis_kelamin'] ?></td>
        <td><?= $row['tgl_daftar'] ?></td>
        <td><?php if($row['status']==3){ ?>
          <a class="btn btn-success">Lanjutkan Pembayaran</a>
          <?php }elseif ($row['status']==2){?>
            <a class="btn btn-danger">Ditolak</a>
          <?php }else{?>
            <a class="btn btn-danger">Belum diperiksa</a>
          <?php } ?> 
        </td>
        <td><a href="periksa_data.php?id=<?= $row['id']?>" class="btn btn-primary">Periksa</a></td>
        </tr>
        <?php $no++; }?>

      </tbody>
    
  </thead>
</table>


<script src="dt/js/jquery.dataTables.min.js"></script>
<script src="dt/js/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready( function () {
          $('#pendaftar').DataTable({
            responsive:true
          });
      } );
        </script>
</head>

<?php }include 'foot.php'; ?>
  