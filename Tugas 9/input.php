<?php 
	session_start();
	if(isset($_POST["nim_mhs"])){
		include 'connect.php';

		$nim = $_POST["nim_mhs"];
		$nama = $_POST["nama_mhs"];
		$ipk = $_POST["ipk_mhs"];
		$telp = $_POST["telp_mhs"];
		$cek = mysqli_num_rows(mysqli_query($connection,"SELECT mhsNIM FROM mahasiswa WHERE mhsNIM='$nim'"));
		$message = "";
		if($nim==""){
			$message = "NIM harus di isi!";
		}
		else if ($cek>0) {
			$message = "Data $nim sudah ada!";
		}
		else if ($nama=="") {
			$message = "NAMA harus di isi!";
		}
		else{
			$connection->query("INSERT INTO mahasiswa VALUES('$nim', '$nama','$ipk','$telp')");

			$message = "Success!";
		}
	}	

	$_SESSION["message"]=$message;
	header("location:insert.php");
	exit();
 ?>