<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<!-- Icon -->
	<!--<link rel="shortcut icon" href="https://pmb.pcr.ac.id/assets/img/favicon.ico"
		type="https://pmb.pcr.ac.id/assets/image/x-icon">-->

	<title>BacaYuk!</title>

	<!-- CSS -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
</head>

<body style="margin-Right: 50px;margin-left: 50px;background-color: #faf1e6;margin-top: 20px">
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<a href="" class="logo navbar-brand offset-md-0" style="margin-top: 24px;"><img src="IkonWeb.png"
				width="55px" height="50px" style="margin-bottom: 14px;" alt=""><a style="color: #d99879;
				font-family: 'Pattaya', sans-serif; font-size: 30px;">BacaYuk!</a></a>
			</div>
		</div>
	</div>
	
	<?php
	include '../ProjectUTS_Semester2/../model/database.php';
	$db = new database();
	?>

	<table class="table border border-info">
		<tr class="table-primary">
			<th>No</th>
			<th>ID</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Opsi</th>
		</tr>
		<?php
	$no = 1;
	foreach ($db->tampil_data() as $x) {
	?>
		<tr class="table-light">
			<td><?php echo $no++; ?></td>
			<td><?php echo $x['ID'] ?></td>
			<td><?php echo $x['Nama']; ?></td>
			<td><?php echo $x['Email']; ?></td>
			<td><?php echo $x['Gender']; ?></td>
			<td>
				<a class="btn btn-primary" href="edit.php?id=<?php echo $x['ID']; ?>&aksi=edit">Edit</a>
				<a class="btn btn-danger" href="../ProjectUTS_Semester2/../controller/proses.php?id=<?php echo $x['ID']; ?>&aksi=hapus">Hapus</a>
			</td>
		</tr>
		<?php
	}
	?>
	</table>
	<a class="btn btn-success" href="Daftar.php" role="button">Daftar Baru</a><br>
	<a class="btn btn-info" href="login.php" role="button" style="margin-top: 35px;">Login</a>

	
	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
	</script>

	<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>