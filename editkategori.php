<!DOCTYPE html>
<html>
<head>
	<title>pemograman3.com</title>
</head>
<?php 
// koneksi database
include 'koneksi.php';
if(isset($_POST['save'])){
	$id_kategori=$_POST['id_kategori'];
	$nama_kategori=$_POST['nama_kategori'];
	$update=mysqli_query($koneksi,"UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'");
	if($update){
		header("location:tampilkategori.php");
	}else{
		echo mysqli_error();
	}
}
$id_kategori = $_GET['id_kategori'];

	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM kategori WHERE id_kategori='$id_kategori'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
?>
<body>
	<h2>Pemograman 3 2022</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA BARANG</h3>
	<form method="POST">
		<table>
			<tr>			
				<td>Nama Kategori</td>
				<input type="hidden" name="id_kategori" value="<?php echo $data['id_kategori'];?>"/>
				<td><input type="text" name="nama_kategori" required value="<?php echo $data['nama_kategori'];?>"></td>
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