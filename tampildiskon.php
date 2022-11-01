</html>
	<head>
	<title>jimmyilyas.com</title>
	</head>
	<body>
	<h2>Jimmyilyas.com</h2>
	<br/>
	<a href="inputdiskon.php">+ TAMBAH DISKON</a>
	<br/>
	<table border="1">
	<tr>
		<th>No</>
		<th>Diskon Barang</th>
		<th>Diskon Member</th>
		<th>OPSI</th>
	</tr>
	<?php
	include 'koneksi.php';
	$no =1;
	$data = mysqli_query($koneksi,"select * from diskon");
	while($d= mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['diskon_barang']; ?></td>
			<td><?php echo $d['diskon_member']; ?></td>
			<td>
				<a href="edit_inputdiskon.php?id=<?php echo $d['id']; ?>">EDIT</a>
				<a href="edit_inputdiskon.php?id=<?php echo $d['id']; ?>">HAPUS</a>
			<td>
		</tr>
	<?php
	}
	?>
	</table>
	</body>
	</html>