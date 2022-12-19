<!DOCTYPE html>
<html>
<head>
	<title>pemograman3.com</title>
</head>
<?php 
// koneksi database
include 'koneksi.php';
if(isset($_POST['save'])){
	$id=$_POST['id_user'];
	$nama=$_POST['username'];
	$password=$_POST['password'];
	$level=$_POST['level'];
	$status=$_POST['status'];
	$update=mysqli_query($koneksi,"UPDATE login SET username='$nama', level='$level',password='$password', status='$status' WHERE id_user='$id'");
	if($update){
		header("location:tampillogin.php");
	}else{
		echo mysqli_error();
	}
}
$id = $_GET['id_user'];

	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM login WHERE id_user='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
?>
<body>
	<h2>Pemograman 3 2022</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>Edit DATA USER</h3>
	<form method="POST">
		<table>
			<tr>			
				<td>Name</td>
				<input type="hidden" name="id" value="<?php echo $data['id_user'];?>"/>
				<td><input type="text" name="nama" required value="<?php echo $data['username'];?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" required value="<?php echo $data['password'];?>"></td>
			</tr>
			<tr>
				<td>level</td>
				<td><select name="level" required>
				       <option value="">-----Pilih--------</option>
					    <option value="admin">Admin</option>
				 		<option value="staff">Staff</option>
						<option value="user">User</option>
						<option value="manager">Mgr</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>status</td>
				<td><select name="status" required>
				       <option value="">-----Pilih</option>
					    <option value="4">Aktif</option>
				 		<option value="0">Tdk aktf</option>
				</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="save"></td>
			</tr>		
		</table>
	</form>
<?php	}?>
</body>
</html>