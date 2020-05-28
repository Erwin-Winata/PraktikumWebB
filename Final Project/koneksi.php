<?php 
$conn = mysqli_connect('localhost','root','','db_perpus');
if(!$conn){
	echo 'tidak terhubung ke database';
}
?>