<?php include 'head.php';

if(empty($id=$_SESSION['id'])){ ?>
  <script>window.location.href='index.php'</script>
<?php }else{
    $result=tampilpendaftar($id);
$result1=tampildataortu($id);
$result2=tampilpendidikan($id);
$result3=tampildok($id);
$result4=tampilpembayaran($id);
?>

    <style> 
        .col-md-8{
            left:15%;
        }

    h2, h4{
        text-align: center;
        font-weight: bold;
    }
    </style>
<div class="table-responsive">
    <div class="col-md-8">
                    <table class="table table-invoice">
                        <?php while ($row=mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td>Nama Pendaftar</td>
                                <td> <?php echo strtoupper($row['nama_lengkap']) ?></td>
                                
                            </tr>
                            <tr>
                                <td>Nomor Pendaftaran</td>
                                <td>  <?php echo preg_replace('/[^a-zA-Z0-9 ]/','',$row['tgl_daftar']."000".$row['id']);?> </td>
                                
                            </tr>
                            <tr>
                                <td>Tanggal daftar</td>
                                <td>  <?php echo strtoupper($row['tgl_daftar']) ?> </td>
                                
                            </tr>
                            <tr>
                                <td>Status Pendaftaran</td>
                                <?php if($_SESSION['statusdidik']==2){ ?>
                                <td><a class="btn btn-danger btn-block ">Ditolak</a></td>
                                <?php }elseif ($_SESSION['statusdidik']==3){?>
                                <td><a class="btn btn-success btn-block ">Lanjutkan Pembayaran</a></td> 
                                </tr>
                            </table>
                            </div>   
                            </div>
                            <div class="container">
                             <div class="col-md-8 box">
                            <table class="table table-striped table-bordered ">
                                      <tr> 
                                        <td>Kelompok </td>
                                        <td>Gelombang 1</td>
                                        <td>Gelombang 2</td>
                                        <td>Gelombang 3</td>
                                      </tr>
                                      <tr> 
                                        <td> </td>
                                        <td>7 Januari s.d 10 Maret</td>
                                        <td>11 April s.d 5 Juni</td>
                                        <td>20 Juni s.d 10 Juli</td>
                                      </tr>
                                      <tr>
                                        <td>Playgroup</td>
                                        <td>RP 600.000</td>
                                        <td>RP 850.000</td>
                                        <td>RP 1.350.000</td>
                                      </tr> 
                                      <tr>
                                        <td>A dan B</td>
                                       <td>RP 1.50.000</td>
                                       <td>RP 1.750.000</td>
                                       <td>RP 2.300.000</td>
                                      </tr> 
                                  </table>
                              </div>
                          </div>
                            <div class="table-responsive">
                            <div class="col-md-8">
                            <table class="table table-invoice">
                                <tr><td colspan="2">
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
              
                            </td>
                        <?php }elseif ($_SESSION['statusdidik']==0){?>
                                <td><a class="btn btn-danger btn-block ">Mohon Lengkapi Formulir</a></td> 
                            
                            </tr>
                                <?php }else {?>
                                <td><a class="btn btn-danger btn-block ">Sedang Diperika</a></td> 
                                <?php }?>
                            </tr>
                            
                            <tr>
                                <td>Status Pembayaran</td>
                                <?php if($_SESSION['statusbayar']==1){ ?>
                                <td><a class="btn btn-success btn-block "><span class="glyphicon glyphicon-ok"></span> Diterima</a></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                <h2> Selamat Pendaftaran Anda Telah Diterima</h2>
                                <h4> Harap datang kesekolah untuk mengambil seragam sesuai jadwal yang telah ditentukan</h4>
                            </td></tr>

                                <?php }elseif($_SESSION['statusbayar']==2) {?>
                              
                                <td><a class="btn btn-danger btn-block "></span> Ditolak</a></td>
                            <?php }elseif($_SESSION['statusbayar']=='') {?>
                              
                                <td><a class="btn btn-danger btn-block "></span>Menunggu Pembayaran</a></td>
                                <?php }else {?> 
                                 <td><a class="btn btn-primary btn-block ">Sedang diperiksa</a></td> 
                                <?php }?>
                            </tr>
                        </tbody>
                    </table>
                </div>
                    <?php } ?>
                </div>
    <?php } include 'foot.php'; ?>