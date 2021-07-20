<?php include 'head.php'; 
if(isset($_POST['simpan_foto'])){
  $id_pendaftar=$_SESSION['id'];
  $nama_pendaftar=$_SESSION['nama'];
  $status=1;

  $nama   = $_FILES['foto']['name'];
  $size   = $_FILES['foto']['size'];
  $error  = $_FILES['foto']['error'];
  $asal = $_FILES['foto']['tmp_name'];
  
  $lokasi_foto="img/dokumen/foto/" . $nama;
  $format = pathinfo($nama, PATHINFO_EXTENSION);

  if($error === 0){

    if ($size > 9000){ 
    
          if($format === "jpg" || $format === "png" || $format === "JPG" || $format === "PNG" || $format === "jpeg" || $format === "JPEG"){
            
            if(simpanfoto($id_pendaftar,$nama_pendaftar,$lokasi_foto,$status)){
             echo "<script>window.location.href='dokumen.php</script>"; 
             echo "<script>alert('Foto berhasil di simpan')</script>";
              
              }else{
                echo "Error: " . $query . "<br>" . mysqli_error($konek);
              } 
    
            move_uploaded_file($asal, "img/dokumen/foto/".$nama);
          }else{
            echo "Maaf format filenya harus jpg/png ";
          }
    
      }else{
        echo "file terlalu besar";
      }
  }else "Ada kesalahan saat upload";
}

?>
<div class="col-md-3">
	<h1>Foto Tersimpan</h1>
<a  href="dokumen.php" class="btn btn-success btn-block "></span>Kembali </a>
</div>
<style>
	.col-md-3{
		text-align: center;
		font-weight: bold;
		left:38%;
	}
</style>
