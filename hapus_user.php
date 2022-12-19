<?php
include'koneksi.php';
$id = $_GET['id_user'];
$query_delete = mysqli_query($koneksi,"DELETE FROM user WHERE id_user='$id'")
or die(mysqli_error());
if($query_delete){
	header("location:tampiluser.php");
	
}else{
	echo mysqli_error();
}