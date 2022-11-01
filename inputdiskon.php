<! DOCTYPE html>
<html>
<html>
<title>jimmyilyas.com></title>
</head>
<?php
//koneksi database
include "koneksi.php";
if(!empty($_POST['save'])){
	$diskon_barang = $_POST['diskon_barang'];
$diskon_member = $_POST['diskon_member'];
$a=mysqli_query($koneksi,"insert into diskon values('','$diskon_barang','$diskon_member')");
if ($a){
header("location:tampildiskon.php");
}else{
	echo mysqli_error();
}
}

?>
<body>
<h2>Jimmy ilyas.com<h/2>
<br/>
<a href="tampildiskon.php">KEMBALI<a/>
<br/>
<br/>
<h3>TAMBAH DATA DISKON</h3>
<form method="POST">
	<table>
	<tr>
	<td>Diskon Barang</td>
	<td><input type="text" Name="diskon_barang"></td>
	</tr>
	<tr>
	<td>Diskon Member</td>
	<td><input type="text" Name="diskon_member"></td>
	<td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="save"><td>
	</tr>
	</table>
	</form>
	</body>
	</html>