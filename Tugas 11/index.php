<?php
include 'koneksi.php';
?>
<!-- I Gede Erwin Winata Pratama 1708561033 -->
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
	<title>Perpustakaan</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-dark bg-primary">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    Perpustakaan
	  </a>
	</nav>
	
	<div class="container">
		<h2 align="center" style="margin: 30px;">List Buku Perpustakaan</h2>
		<?php 
			$s_jenis="";
            $s_keyword="";
            if (isset($_POST['search'])) {
                $s_jenis = $_POST['s_jenis'];
                $s_keyword = $_POST['s_keyword'];
            }
		?>
		<form method="POST" action="">
	        <div class="row mb-3">
			    <div class="col-sm-12"><h4>Cari</h4></div>
			    <div class="col-sm-3">
			        <div class="form-group">
			            <select name="s_jenis" id="s_jenis" class="form-control">
			                <option value="">Filter Jenis</option>
			                <option value="Sains" <?php if ($s_jenis=="Sains"){ echo "selected"; } ?>>Sains</option>
			                <option value="Komputer" <?php if ($s_jenis=="Komputer"){ echo "selected"; } ?>>Komputer</option>
			            </select>
			        </div>
			    </div>
			    <div class="col-sm-4">
			        <div class="form-group">
			            <input type="text" placeholder="Keyword" name="s_keyword" id="s_keyword" class="form-control" value="<?php echo $s_keyword; ?>">
			        </div>
			    </div>
			    <div class="col-sm-4" >
			        <button id="search" name="search" class="btn btn-warning">Cari</button>
			    </div>
			</div>
		</form>

		<table class="table table-striped table-bordered" style="width:100%">
		    <thead>
		        <tr>
		            <td>No</td>
		            <td>Judul Buku</td>
		            <td>Pengarang</td>
		            <td>Tahun Buku</td>
		            <td>Jenis Buku</td>
					<td>Penerbit</td>
		        </tr>
		    </thead>
		    <tbody>
		        <?php
		            $search_jenis = '%'. $s_jenis .'%';
		            $search_keyword = '%'. $s_keyword .'%';
		            $no = 1;
		            $query = "SELECT * FROM tbl_perpustakaan WHERE jenis LIKE ? AND (judul LIKE ? OR pengarang LIKE ? OR tahun LIKE ? OR jenis LIKE ? OR penerbit LIKE ?) ORDER BY tahun ASC";
					$dewan1 = $db1->prepare($query);
		            $dewan1->bind_param('ssssss', $search_jenis, $search_keyword, $search_keyword, $search_keyword, $search_keyword, $search_keyword);
					$dewan1->execute();
		            $res1 = $dewan1->get_result();

		            if ($res1->num_rows > 0) {
		                while ($row = $res1->fetch_assoc()) {
		                    $id = $row['no'];
		                    $judul = $row['judul'];
		                    $pengarang = $row['pengarang'];
		                    $tahun = $row['tahun'];
							$jenis = $row['jenis'];
							$penerbit = $row['penerbit'];
		        ?>
		            <tr>
		                <td><?php echo $no++; ?></td>
		                <td><?php echo $judul; ?></td>
		                <td><?php echo $pengarang; ?></td>
		                <td><?php echo $tahun; ?></td>
		                <td><?php echo $jenis; ?></td>
						<td><?php echo $penerbit; ?></td>
		            </tr>
		        <?php } } else { ?> 
		            <tr>
		                <td colspan='7'>Tidak ada data ditemukan</td>
		            </tr>
		        <?php } ?>
		    </tbody>
		</table>
		
    </div>
</body>
</html>