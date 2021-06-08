<?php
include('config.php');
$google_client->revokeToken();
session_destroy();
header('localhost:index.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <meta charset="utf-8">
	<meta name="viewport"
		content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">


	<title>Login - BacaYuk!</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- CSS -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Padauk&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <header>
		<div class="container">
			<div class="row">
				<div class="col">
					<a href="" class="logo navbar-brand offset-md-0" style="margin-top: 24px;"><img src="IkonWeb.png"
					width="55px" height="50px" style="margin-bottom: 14px;" alt=""><a style="color: #d99879;
					font-family: 'Pattaya', sans-serif; font-size: 30px;">BacaYuk!</a></a>
				</div>
				<div class="col col-1">
					<div class=" pull-right">
						<a class="btn btn-info" href="../daftar.php" role="button" style="margin-top: 35px;">Daftar</a>
					</div>
				</div>
			</div>
			<style type="text/css">
				body{
					background: url("Background.png");
				}
			</style>
		</div>
	</header><!-- End header -->

	<section id="sub-header">
		<div class="container">
			<div class="row">
				<div class="col-md-6" id="subscribe">
				</div>
				<div class="col-md-6">
					<div id="subscribe_home" data-step="1" class="">
						<div id="message-contact-home"></div>
						<div class="row" style="padding-top: 70px;">
							<div class="col-md-12 col-sm-12">
								<a style="color: #d99879; font-family: 'Pattaya', sans-serif; font-size: 45px;">
								Hai, ini BacaYuk!</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<br>
								<h3 style="color: #d99879; font-family: 'Rubik', sans-serif;">
								Bergabunglah dengan Kami!</h3>
								<br>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<a style="color: #d99879; font-family: 'Padauk', sans-serif; font-size: 20px;">
								Platform sosial untuk bercerita yang paling disukai di para pembacanya.</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<br>
								<a style="color: #d99879; font-family: 'Padauk', sans-serif; font-size: 20px;">
								BacaYuk! menghubungkan komunitas pembaca dan para penulis melalui cerita - cerita
								yang ada di dalamnya.</a>
							</div>
						</div>
					</div>
				</div>
			</div><!-- End row -->
		</div>
	</section><!-- End sub-header -->

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