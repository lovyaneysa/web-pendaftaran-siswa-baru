<?php 

function tampilpendaftar($id){
	global $konek;

	$sql="SELECT * FROM formulir_mhs WHERE id='$id'";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;


}

// function tampildatasiswa($id){
// 	global $konek;

// 	$sql="SELECT * FROM `data_siswa` WHERE id_pendaftar='$id'";
// 	$result=mysqli_query($konek,$sql);

// 	$cek=mysqli_fetch_array($result);
// 	$_SESSION['status']=$cek['status'];

// 	if(mysqli_num_rows($result)>0){
// 		return true;
// 	}else{
// 		return false;
// 	}


// }


function tampildataortu($id){
	global $konek;

	$sql="SELECT * FROM `data_orangtua` WHERE id_pendaftar='$id'";
	$result=mysqli_query($konek,$sql);

	$cek=mysqli_fetch_array($result);
	$_SESSION['status']=$cek['status'];

	if(mysqli_num_rows($result)>0){
		return true;
	}else{
		return false;
	}

}

function tampildok($id){
	global $konek;

	$sql="SELECT * FROM dokumen WHERE id_pendaftar='$id'";
	$result=mysqli_query($konek,$sql);
	
	$cek=mysqli_fetch_array($result);
	$_SESSION['statusdok']=$cek['status'];
	$_SESSION['foto']=$cek['foto'];
	$_SESSION['kk']=$cek['kk'];
	$_SESSION['akte']=$cek['akte'];
	$_SESSION['ktp']=$cek['ktp'];
	if(mysqli_num_rows($result)>0){
		return true;
	}else{
		return false;
	}
}

function tampildokumen($id){
	global $konek;

	$sql="SELECT * FROM dokumen WHERE id_pendaftar='$id'";
	$result=mysqli_query($konek,$sql);
	
	$cek=mysqli_fetch_array($result);
	$_SESSION['statusdok']=$cek['status'];
	
	if(mysqli_num_rows($result)>0){
		return true;
	}else{
		return false;
	}
}



function tampilpendidikan($id){
	global $konek;

	$sql="SELECT * FROM data_siswa WHERE id_pendaftar='$id'";
	$result=mysqli_query($konek,$sql);
	
	$cek=mysqli_fetch_array($result);
	$_SESSION['statusdidik']=$cek['status'];

	if(mysqli_num_rows($result)>0){
		return true;
	}else{
		return false;
	}



}

function tampilpembayaran($id){
	global $konek;

	$sql="SELECT * FROM bukti_transfer WHERE id_pendaftar='$id'";
	$result=mysqli_query($konek,$sql);
	
	$cek=mysqli_fetch_array($result);
	$_SESSION['statusbayar']=$cek['status'];

	if(mysqli_num_rows($result)>0){
		return true;
	}else{
		return false;
	}


}


//fungsi cetak dokumen

// function tampildatasiswa_cetak($id){
// 	global $konek;

// 	$sql="SELECT * FROM `data_siswa` WHERE id_pendaftar='$id'";
// 	$result=mysqli_query($konek,$sql);
// 	return $result;
// }

function tampildataortu_cetak($id){
	global $konek;

	$sql="SELECT * FROM `data_orangtua` WHERE id_pendaftar='$id'";
	$result=mysqli_query($konek,$sql);
	return $result;
}


function tampildo_cetakk($id){
	global $konek;

	$sql="SELECT * FROM dokumen WHERE id_pendaftar='$id'";
	$result=mysqli_query($konek,$sql);
	return $result;
}


function tampilpendidikan_cetak($id){
	global $konek;

	$sql="SELECT * FROM data_siswa WHERE id_pendaftar='$id'";
	$result=mysqli_query($konek,$sql);
	return $result;
}

function tampilpembayaran_cetak($id){
	global $konek;

	$sql="SELECT * FROM bukti_transfer WHERE id_pendaftar='$id'";
	$result=mysqli_query($konek,$sql);
	return $result;
}


function daftarformulir($nama,$email,$password,$date){
	global $konek;

	$sql="INSERT INTO `formulir_mhs`(`nama_lengkap`,`email`, `password`,`tgl_daftar`) VALUES ('$nama','$email','$password','$date')";
	
		if (mysqli_query($konek, $sql)) {
		    return true;
		} else {
		    return false;
		}
}

function ceklogin($email,$password){
	global $konek;

	$sql="SELECT * FROM formulir_mhs WHERE email='$email' AND password='$password'";
	$query=mysqli_query($konek,$sql);

	$cek=mysqli_fetch_array($query);
	$_SESSION['id']=$cek['id'];
	$_SESSION['nama']=$cek['nama_lengkap'];

	if(mysqli_num_rows($query)>0){
		return true;
	}else{
		return false;
	}
}


function simpanpendidikan($nama,$id_pendaftar,$nama_siswa,$jenis_kelamin,$tempat_lahir,$tgl_lahir,$no_akte,$agama,$alamat_siswa,$transportasi,$kelas,$status){
	global $konek;

	$sql="INSERT INTO `data_siswa`(`nama_pendaftar`, `id_pendaftar`, `nama_siswa`,  `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `no_akte`,`agama`,`alamat_siswa`,`transportasi`,`kelas`,`status`) VALUES('$nama','$id_pendaftar','$nama_siswa','$jenis_kelamin','$tempat_lahir','$tgl_lahir','$no_akte','$agama','$alamat_siswa','$transportasi','$kelas','$status')";
	
		if (mysqli_query($konek, $sql)) {
		    return true;
		} else {
		    return false;
		}	
}




// function simpandatasiswa($nama,$id_pendaftar,$jenis_kelamin,$tempat_lahir,$tgl_lahir,$no_akte,$agama,$alamat_siswa,$transportasi,$kelas,$status){
// 	global $konek;

// 	$sql="INSERT INTO `data_siswa`(`nama_siswa`, `id_pendaftar`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `no_akte`,`agama`,`alamat`,`transportasi`,`kelas`,`status`) VALUES ('$nama','id_pendaftar','$jenis_kelamin','$tempat_lahir','$tgl_lahir','$no_akte','$agama','$alamat_siswa','$transportasi','$kelas','$status')";
	
// 		if (mysqli_query($konek, $sql)) {
// 		    return true;
// 		} else {
// 		    return false;
// 		}
// }


function simpandataortu($namapendaftar,$id_pendaftar,$ayah,$ibu,$wali,$alamat,$provinsi,$kota,$kecamatan,$kodepos,$nohp,$email_ortu,$pendidikan_ayah,$pendidikan_ibu,$pekerjaan_ayah,$pekerjaan_ibu,$penghasilan_ortu,$status){
	global $konek;
	
	$sql="INSERT INTO `data_orangtua`(`nama_pendaftar`, `id_pendaftar`, `nama_ayah`, `nama_ibu`, `nama_wali`, `alamat`, `provinsi`, `kota`, `kecamatan`, `kodepos`, `nohp`, `email_ortu`, `pendidikan_ayah`, `pendidikan_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `penghasilan_ortu`,`status`) VALUES ('$namapendaftar','$id_pendaftar','$ayah','$ibu','$wali','$alamat','$provinsi','$kota','$kecamatan','$kodepos','$nohp','$email_ortu','$pendidikan_ayah','$pendidikan_ibu','$pekerjaan_ayah','$pekerjaan_ibu','$penghasilan_ortu','$status')";
	if (mysqli_query($konek, $sql)) {
		    return true;
		} else {
		    return false;
		}
}

function simpantransaksi($id,$nama_pendaftar,$namabank,$lokasi){
	global $konek;

	$sql="INSERT INTO `bukti_transfer`(`id_pendaftar`, `nama_pendaftar`, `nama_bank`, `bukti_transfer`) VALUES ('$id','$nama_pendaftar','$namabank','$lokasi')";
	if(mysqli_query($konek, $sql)){
		return true;
	}else{
		return false;
	}
}

function simpanfoto($id_pendaftar,$nama_pendaftar,$lokasi_foto,$status){
	global $konek;

	$sql="INSERT INTO `dokumen`(`id_pendaftar`, `nama_pendaftar`, `foto`,`status`) VALUES ('$id_pendaftar','$nama_pendaftar','$lokasi_foto','$status')";
	if(mysqli_query($konek, $sql)){
		return true;
	}else{
		return false;
	}
}	

function simpanktp($id_pendaftar,$lokasi_foto){
	global $konek;

	$sql="UPDATE `dokumen` SET `ktp`='$lokasi_foto' WHERE id_pendaftar='$id_pendaftar'";
	if(mysqli_query($konek, $sql)){
		return true;
	}else{
		return false;
	}
}

function simpanakte($id_pendaftar,$lokasi_foto){
	global $konek;

	$sql="UPDATE `dokumen` SET `akte`='$lokasi_foto' WHERE id_pendaftar='$id_pendaftar'";
	if(mysqli_query($konek, $sql)){
		return true;
	}else{
		return false;
	}
}

function simpankk($id_pendaftar,$lokasi_foto){
	global $konek;

	$sql="UPDATE `dokumen` SET `kk`='$lokasi_foto' WHERE id_pendaftar='$id_pendaftar'";
	if(mysqli_query($konek, $sql)){
		return true;
	}else{
		return false;
	}	
}


 ?>