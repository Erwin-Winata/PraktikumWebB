<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<style type="text/css">
		#customers {
		  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		  border-collapse: collapse;
		  width: 50%;
		  margin: 50px auto;
		}

		#customers td, #customers th {
		  border: 1px solid #ddd;
		  padding: 8px;
		}

		#customers tr:nth-child(even){background-color: #f2f2f2;}

		#customers tr:hover {background-color: #ddd;}

		#customers th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: #4CAF50;
		  color: white;
		}
		h1 {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			text-align: center;
		}
		.container	{
			width: 100%;
			align-content: center;
		}
		.topnav {
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
		<a href="insert.php">Input</a>
	</div>
	<div class="container">
	<h1>Data Mahasiswa</h1>
	<center>
	 	<table id="customers">
	 		<tr>
	 			<th>NO</th>
	 			<th>NIM</th>
	 			<th>Nama</th>
	 			<th>IPK</th>
	 			<th>No.Telp</th>
	 			<th>Opsi</th>
	 		</tr>
	 		<?php
				include 'connect.php';
				$getMhs = mysqli_query($connection,"SELECT * FROM mahasiswa");
				if (mysqli_num_rows($getMhs)==0) {
					echo "Tidak Ada Data";
				}
				else{
					$no = 1;
					while ($fetchMhs = mysqli_fetch_assoc($getMhs)) {
						echo "<tr>";
						echo "<td>".$no."</td>";
						echo "<td>".$fetchMhs["mhsNIM"]."</td>";
						echo "<td>".$fetchMhs["mhsNama"]."</td>";
						echo "<td>".$fetchMhs["mhsIPK"]."</td>";
						echo "<td>".$fetchMhs["mhsTelp"]."</td>";
			 			echo '<td><a href="edit.php?id='.$fetchMhs['mhsNIM'].'">Edit</a> / <a href="hapus.php?id='.$fetchMhs['mhsNIM'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
			 			echo "</tr>";
			 			$no++;
					}
				}
	 		?>
	 	</table>
	 </center>
	</div>
</body>
</html>
