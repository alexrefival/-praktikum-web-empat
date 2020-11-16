<!DOCTYPE html>
<html>
<head>
	<title>Form Validasi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center><h2>FORM VALIDASI</h2></center>
	<div class="login">
		<form action="proses.php" method="GET" onSubmit="validasi()">
			<div>
				<label>Nama Lengkap:</label>
				<input type="text" name="nama" id="nama" />
			</div>
			<div>
				<label>Email:</label>
				<input type="email" name="email" id="email" />
			</div>
			<div>
				<label>Jam Keberangkatan:</label>
				<input type="time" name="otw" id="otw">
			</div>
			<div>
				<label>Tujuan Keberangkatan:</label>
				<input type="text" name="tujuan" id="tujuan">
			</div>
			<div>
				<label>Jumlah Tiket:</label>
				<input type="number" name="tiket" id="tiket" min="1" max="10">
			</div>
			<div>
				<input type="submit" value="Daftar" class="tombol">
			</div>
		</form>
	</div>
</body>
<script type="text/javascript">
	function validasi() {
		var nama = document.getElementById("nama").value;
		var email = document.getElementById("email").value;
		var otw = document.getElementById("otw").value;
		var tujuan = document.getElementById("tujuan").value;
		var tiket = document.getElementById("tikwt").value;
		if (nama != "" && email!="" && otw !="" tujuan !="" tiket !="") {
			return true;
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
		}
	}
</script>
</html>
