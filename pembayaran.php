<?php include 'head.php';

if(empty($id=$_SESSION['id'])){ ?>
  <script>window.location.href='index.php'</script>
<?php }else{
    $result4=tampilpembayaran($id);
 ?>
      <div class="container">     
      <div class="header">
            <h3>Konfirmasi Pembayaran</h3>
      </div>
        <div class="col-md-12 konfirm">
            <form role="form" action="transfer.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Bank - Atas nama rekening (Contoh : BCA - Atas nama Rian)</label>
                    <div>
                        <input type="text" class="form-control" name="namabank" placeholder="Nama Bank - Atas nama rekening" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Bukti Transfer</label>
                    <div>
                        <input type="file" name="gambar" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <button type="submit" name="bayar" class="btn btn-default btn-primary">konfirmasi</button>
                    </div>
            </form>
        </div>
        </div>
        </form></div></div><br>
     <?php } include 'foot.php'; ?>