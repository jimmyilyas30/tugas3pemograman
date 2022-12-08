<! DOCTYPE html>
<html>
<html>
<title>jimmyilyas.com></title>
</head>
<?php
//koneksi database
include "koneksi.php";
if(!empty($_POST['save'])){
	$Nama = $_POST['Nama'];
	$Password = $_POST['Password'];
$level = $_POST['level'];
$status = $_POST['status'];
$a=mysqli_query($koneksi,"insert into user values('','$Nama','$Password','$level','$status')");
if ($a){
header("location:tampiluser.php");
}else{
	echo mysqli_error();
}
}

?>
<body>
<h2>Jimmy ilyas.com<h/2>
<br/>
<a href="tampiluser.php">KEMBALI<a/>
<br/>
<br/>
<h3>TAMBAH DATA USER</h3>
<form method="POST">
	<table>
	<tr>
	<td>Nama</td>
	<td><input type="text" Name="Nama"></td>
	</tr>
	<tr>
	<td>Password</td>
	<td><input type="Password" Name="Password"></td>
	</tr>
	<tr>
	<td>level</td>
	<td><select name="level">
	<option value="">-----Pilih</option>
	<option value="1">Admin</option>
	<option value="2">User</option>
	<option value="3">Spv</option>
	<option value="4">mgr</option>
	</select>
	<td>
	</tr>
	<tr>
	<td>status</td>
	<td><select name="status">
	<option value ="">-----Pilih</option>
	<option value="1">Aktif</option>
	<option value ="0">Tdk aktf</option>
	</select>
	</td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="save"><td>
	</tr>
	</table>
	</form>
	</body>
	</html>
	
	
