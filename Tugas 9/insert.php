<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
	<style type="text/css">
		* {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		}
		h1 {
			text-align: center;
		}
		.alert {
		  padding: 20px;
		  background-color: #2196F3;
		  color: white;
		}
		table{
			margin: 50px auto;
		}
		.closebtn {
		  margin-left: 15px;
		  color: white;
		  font-weight: bold;
		  float: right;
		  font-size: 22px;
		  line-height: 20px;
		  cursor: pointer;
		  transition: 0.3s;
		}

		.closebtn:hover {
		  color: black;
		}
		.container{
			width: 100%;
			margin: 50px auto;
		}
		.topnav {
			margin: 0px;
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif; 
		  	overflow: hidden;
		  	background-color: #333;
		}
		.topnav a {
		  float: left;
		  display: block;
		  color: #f2f2f2;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		}
		.topnav a:hover {
		  background-color: #ddd;
		  color: black;
		}
	</style>
</head>
<body>
	<div class="topnav">
		<a href="index.php">Homepage</a>
		<a href="view.php">View</a>
	</div>
	<div class="box">
		<div class="alert">
		  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
		  <center>
		  <strong>Perhatian!</strong>
		  	<?php 
				if (isset($_SESSION["message"])) {
					echo $_SESSION["message"];
					unset($_SESSION["message"]);
				}
				else{
					echo "Masukkan Data!";
				}
		 	?>
		 </center>
		</div>
		<h1>Masukkan Data Mahasiswa</h1>
		<div class="container">
		<form action="input.php" method="post">
			<table>
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim_mhs"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama_mhs"></td>
				</tr>
				<tr>
					<td>IPK</td>
					<td>:</td>
					<td><input type="text" name="ipk_mhs"></td>
				</tr>
				<tr>
					<td>No.Telp</td>
					<td>:</td>
					<td><input type="text" name="telp_mhs"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><button>Save</button></td>
				</tr>
			</table>
		</form>
		</div>
	</div>
</body>
</html>