<!DOCTYPE html>
<html>
<head>
	<title>Halaman</title>
</head>
<body>
 
	<h2>DATA MAHASISWA</h2>
	<br/>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Prodi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['prodi']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
	<br>
	<br>
	<h2>DATA MATAKULIAH</h2>
	<br/>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>kdmk</th>
			<th>nmmk</th>
			<th>sks</th>
			<th>prodi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from matakuliah");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kdmk']; ?></td>
				<td><?php echo $d['nmmk']; ?></td>
				<td><?php echo $d['sks']; ?></td>
				<td><?php echo $d['prodi']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
	<br>
	<br>
	<h2>DATA NILAI</h2>
	<br/>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>thakd
			<th>NIM</th>
			<th>kdmk</th>
			<th>Nilai</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from nilai");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['thakd']; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['kdmk']; ?></td>
				<td><?php echo $d['nilai']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>