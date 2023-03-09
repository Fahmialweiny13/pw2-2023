<!-- Task 1
	Rapihkan dan buatlah form agar bisa mengirim data
	Gunakan form request POST
-->
<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div>
		<h1 class="form-horizontal w-75 mt-5 mx-auto">Form Pendaftaran</h1>
		<form method="POST" action="hasil_daftar.php" class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm">
			<div class="form-group">
				<label for="nama_lengkap">Nama Lengkap</label>
				<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukan nama..." required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Masukan email...">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat..."></textarea>
			</div>
			<div class="form-group">
				<label for="telepon">Telepon</label>
				<input type="number" class="form-control" id="telepon" name="telepon" placeholder="Masukan no telepon...">
			</div>
			<input type="submit" name="submit" value="submit" class="btn btn-primary">
		</form>
	</div>
</body>
</html>