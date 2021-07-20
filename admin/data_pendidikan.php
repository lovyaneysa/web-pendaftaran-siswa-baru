<?php include 'head.php';
if(empty($_SESSION['id'])){ ?>
  <script>window.location.href='login.php'</script>
<?php }else{
$result=tampilsiswa();
$_SESSION['nama'];
?>
        <style>
          .tahun{
            width: 120px;
            height: 25px;
          }
          .cetak{
            padding-top:29%;
            width:25px;
          }
        </style>

          <link rel="stylesheet" type="text/css" href="dt/css/dataTables.bootstrap.css">
          <div class="col-md-6">
          <form action=" " method="get">
            <label>Cari :</label>
            <input type="text" name="cari">
            <input type="submit" value="Cari">
          </form>
          </div>


        <div class="col-md-6">
          <div class="form-group">
        <form action=" " method="get">
          <label>Tahun :</label>
          <select class="tahun" name="cari">
                <option value="">pilih tahun</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
              </select>
          <input type="submit" value="Cari">
        </form>
        </div>
        </div>

         <?php 
            if(isset($_GET['cari'])){
              $cari = $_GET['cari'];
              echo "<b>Hasil pencarian : ".$cari."</b>";
            }
            ?>

              
          <table class="table table-striped table-bordered">
            <thead>

              <tr>
                <th>No</th>
                <th>ID Siswa</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Alamat Siswa</th>

                <!-- <th>Status SMP</th>
                <th>Kota</th>
                <th>Kecamatan</th>
                <th>Kode Pos</th>
                <th>Nama SMP</th>
                <th>No Ijazah</th>
                <th>Tahun Lulus</th> -->
              </tr>
            </thead>


            <?php 
        if(isset($_GET['cari'])){
          $cari = $_GET['cari'];
          $data = $konek->query("select * from formulir_mhs AS u INNER JOIN data_siswa AS i  ON u.id=i.id_pendaftar INNER JOIN bukti_transfer AS a ON i.id_pendaftar=a.id_pendaftar WHERE a.status='1' AND i.nama_siswa like '%$cari%' or  a.status='1' AND u.tgl_daftar like '%$cari%'");       
        }else{
          $data = $konek->query("select * from formulir_mhs AS u INNER JOIN data_siswa AS i  ON u.id=i.id_pendaftar INNER JOIN bukti_transfer AS a ON i.id_pendaftar=a.id_pendaftar WHERE a.status='1'");   
        }
        $no = 1;
        while($row = mysqli_fetch_array($data)){
        ?>
    
           
      <tbody>
        <tr>
        <td><?= $no; ?></td>
         <td>
          <?php echo preg_replace('/[^a-zA-Z0-9 ]/','',"S".$row['tgl_daftar']."00".$row['id']);?> </td>
        <td><?= $row['nama_siswa'] ?></td>
        <td><?= $row['kelas'] ?></td>
        <td><?= $row['jenis_kelamin'] ?></td>
        <td><?= $row['tgl_lahir'] ?></td> 
        <td><?= $row['alamat_siswa'] ?></td>
        </tr>
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
  <?php ?> 

<?php } include 'foot.php'; ?>