<?php include 'head.php'; 

if(isset($_POST['simpankk'])){
  $id_pendaftar=$_SESSION['id'];

  $nama   = $_FILES['kk']['name'];
  $size   = $_FILES['kk']['size'];
  $error  = $_FILES['kk']['error'];
  $asal = $_FILES['kk']['tmp_name'];
  
  $lokasi_foto="img/dokumen/kk/" . $nama;
  $format = pathinfo($nama, PATHINFO_EXTENSION);

  if($error === 0){

    if ($size > 9000){ 
    
          if($format === "jpg" || $format === "png" || $format === "JPG" || $format === "PNG" || $format === "jpeg" || $format === "JPEG"){
            
            if(simpankk($id_pendaftar,$lokasi_foto)){
              echo "<script>alert('Foto berhasil di simpan')</script>";
              echo "<script>window.location.href='dokumen.php'</script>";
              }else{
                echo mysqli_error($konek);
              } 
    
            move_uploaded_file($asal, "img/dokumen/kk/".$nama);
          }else{
            echo "<script>alert('Maaf format filenya harus jpg/png')</script>";
            echo "<script>window.location.href='dokumen.php'</script>";
          }
    
      }else{
        echo "<script>alert('file terlalu besar')</script>";
            echo "<script>window.location.href='dokumen.php'</script>";
        
      }
  }else "<script>alert('Ada kesalahan saat upload')</script>";
}

?>