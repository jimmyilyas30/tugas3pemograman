<!DOCTYPE html>
<html>
<head>
	<title>pemograman3.com</title>
</head>
<?php 
// koneksi database
include 'koneksi.php';
if(isset($_POST['save'])){
	$id_barang=$_POST['id_barang'];
	$nama_barang=$_POST['nama_barang'];
	$kode_barang=$_POST['kode_barang'];
	$qty=$_POST['qty'];
	$update=mysqli_query($koneksi,"UPDATE barang SET nama_barang='$nama_barang', kode_barang='$kode_barang',qty='$qty' WHERE id_barang='$id_barang'");
	if($update){
		header("location:tampilbarang.php");
	}else{
		echo mysqli_error();
	}
}
$id_barang = $_GET['id_barang'];

	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM barang WHERE id_barang='$id_barang'")or die(mysqli_error());
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
				<td>Nama Barang</td>
				<input type="hidden" name="id_barang" value="<?php echo $data['id_barang'];?>"/>
				<td><input type="text" name="nama_barang" required value="<?php echo $data['nama_barang'];?>"></td>
			</tr>
			<tr>
				<td>Kode Barang</td>
				<td><input type="text" name="kode_barang" required value="<?php echo $data['kode_barang'];?>"></td>
			</tr>
			<tr>
				<td>QTY</td>
				<td><input type="text" name="qty" required value="<?php echo $data['qty'];?>"></td>
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