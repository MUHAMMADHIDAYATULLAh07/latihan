<html>
<head>
	<title>FORM KOMENTAR</title>
</head>
<body>
<h1>BUKU TAMU</h1>
<p>
Komentar dan saran Anda Sangat Kami Butuhkan
Untuk Meningkatkan Kualitas situs Kami
</p>
<form action = "tampilkomentar.php" method = "post">
<div>
	nama Anda : <input type = "text" name = "nama" size = "25">
</div>
<div>
	Email Anda: <input type = "email" name = "email" size = "40">
</div>
<div>
	Komentar Anda : <textarea rows = "10" cols = "40" name = "komentar"></textarea>
</div>
<div>
	<input type = "submit" value = "Kirim"
	<input type = "reset" value = "Batal"
</div>
</form>
</body>
</html>