<html>
<head>
	<title>data registrasi</title>
</head>
<body>
<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tmp = $_POST['tmp'];
$tgl = $_POST['tgl'];
$jns = $_POST['jns'];
$pendidikan = $_POST['pendidikan'];
?>
<table border = 1>
<tr>
<td>nama</td><td><?php echo $nama; ?></td>
</tr>
<td>Alamat</td><td><?php echo $alamat; ?></td>
</tr>
<td>Tempat lahir</td><td><?php echo $tmp; ?></td>
</tr>
<td>Tanggal lahir</td><td><?php echo $tgl; ?></td>
</tr>
<td>jenis kelamin></td><td><?php echo $jns; ?></td>
</tr>
<td>pendidikan</td></td><?php ehco $pendidikan; ?></td>
</tr></table>
<a href = "fromregistrasi.php">Back to Home</a>
</body>
</html>
