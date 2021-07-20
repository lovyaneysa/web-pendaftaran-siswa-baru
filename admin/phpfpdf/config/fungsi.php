<?php 

function ceklogin($nama,$password){
	global $konek;

	$sql="SELECT * FROM admin WHERE nama_admin='$nama' AND password='$password'";
	$query=mysqli_query($konek,$sql);

	$cek=mysqli_fetch_array($query);
	$_SESSION['id']=$cek['id'];
	$_SESSION['nama']=$cek['nama_admin'];

	if(mysqli_num_rows($query)>0){
		return true;
	}else{
		return false;
	}
}

function hapus_admin($id){
	global $konek;
	$query="DELETE FROM admin WHERE id=$id";
	if(mysqli_query($konek,$query)) return true;
	else return false;
}


function tampilpendaftar(){
	global $konek;

	$sql="SELECT i.status,i.jenis_kelamin,i.kelas,i.nama_siswa,u.id,u.tgl_daftar,email FROM formulir_mhs AS u INNER JOIN data_siswa AS i  ON u.id=i.id_pendaftar";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

// function tampilpendaftar(){
// 	global $konek;

// 	$sql="SELECT * FROM formulir_mhs,data_siswa";
// 	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
// 	return $result;
// }

function tampilsiswa(){
	global $konek;

	$sql="SELECT*FROM formulir_mhs AS u INNER JOIN data_siswa AS i  ON u.id=i.id_pendaftar INNER JOIN bukti_transfer AS a ON i.id_pendaftar=a.id_pendaftar WHERE a.status='1'";
	$result=mysqli_query($konek,$sql) or die(mysqli_error($konek));
	return $result;
}



// function tampilpendidikan(){
// 	global $konek;

// 	$sql="SELECT * FROM data_siswa AS u INNER";
// 	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
// 	return $result;
// }

function tampildataortu(){
	global $konek;

	$sql="SELECT * FROM data_orangtua";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampilpembayaran(){
	global $konek;

	$sql="SELECT u.id,u.status,u.id_pendaftar,i.id_pendaftar,nama_siswa,nama_bank FROM bukti_transfer AS u INNER JOIN data_siswa AS i  ON u.id_pendaftar=i.id_pendaftar";
	$result=mysqli_query($konek,$sql) or die(mysqli_error($konek));

	return $result;
}

function tampiladmin(){
	global $konek;

	$sql="SELECT * FROM admin";
	$result=mysqli_query($konek,$sql) or die(mysqli_error($konek));
	return $result;	
}

function tampildokumen(){
	global $konek;

	$sql="SELECT * FROM dokumen";
	$result=mysqli_query($konek,$sql) or die(mysqli_error($konek));
	return $result;	
}

function tampildataperid($id){
	global $konek;

	$sql="SELECT*FROM data_orangtua AS u INNER JOIN data_siswa AS i  ON u.id_pendaftar=i.id_pendaftar INNER JOIN dokumen AS a ON i.nama_pendaftar=a.nama_pendaftar WHERE i.id_pendaftar='$id'";
	$result=mysqli_query($konek,$sql) or die(mysqli_error($konek));
	return $result;
}

function detaildata($id){
	global $konek;

	$sql="SELECT*FROM data_orangtua AS u INNER JOIN data_siswa AS i  ON u.id_pendaftar=i.id_pendaftar INNER JOIN dokumen AS a ON i.nama_pendaftar=a.nama_pendaftar INNER JOIN bukti_transfer AS t ON i.id_pendaftar=t.id_pendaftar WHERE  t.status='1' AND i.id_pendaftar='$id'";

		$result=mysqli_query($konek,$sql) or die(mysqli_error($konek));
		
	return $result;
}

// function tampildataperid($id){
// 	global $konek;

// 	$sql="SELECT * FROM data_siswa,data WHERE id_pendaftar='$id'";
// 	$result=mysqli_query($konek,$sql) or die(mysqli_error($konek));
// 	return $result;
// }


function tampilpembayaranperid($id){
	global $konek;

	$sql="SELECT u.status,u.id_pendaftar,i.id_pendaftar,nama_siswa,nama_bank,bukti_transfer FROM bukti_transfer AS u INNER JOIN data_siswa AS i  ON u.id_pendaftar=i.id_pendaftar WHERE u.id_pendaftar='$id'";
	$result=mysqli_query($konek,$sql) or die(mysqli_error($konek));
	return $result;
}

function simpancekdata($cek,$id){
	global $konek;

	$sql="UPDATE `data_siswa` SET `status`='$cek' WHERE id_pendaftar='$id'";
	if(mysqli_query($konek,$sql)) return true;
	else return false;
}

function simpancekbayar($transaksi,$id){
	global $konek;

	$sql="UPDATE `bukti_transfer` SET `status`='$transaksi' WHERE id_pendaftar='$id'";
	if(mysqli_query($konek,$sql)) return true;
	else return false;
}

function simpanadmin($nama,$passwordmd){
	global $konek;

	$sql="INSERT INTO `admin`(`nama_admin`, `password`) VALUES ('$nama','$passwordmd')";
	if (mysqli_query($konek, $sql)) {
    	return true;
	} else {
    	return false;
	}
}

 ?>