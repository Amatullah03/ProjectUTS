<?php

include('config.php');

$login_button = '';

if(isset($_GET["code"])){
    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
    if(!isset($token['error'])){
        $google_client->setAccessToken($token['access_token']);
        $_SESSION['access_token'] = $token['access_token'];
        $google_service = new Google_Service_Oauth2($google_client);
        $data = $google_service->userinfo->get();
        //print_r ($data)
        if(!empty($data['name'])){
            $_SESSION['name'] = $data['name'];
        }

        if(!empty($data['family_name'])){
            $_SESSION['user_last_name'] = $data['family_name'];
        }

        if(!empty($data['email'])){
            $_SESSION['user_email_address'] = $data['email'];
        }

        if(!empty($data['gender'])){
            $_SESSION['user_gender'] = $data['gender'];
        }else{
            $_SESSION['user_gender'] = "-";
        }
        
        if(!empty($data['picture'])){
            $_SESSION['user_image'] = $data['picture'];
        }
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PHP Login Using Google Account</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='
    viewport'/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

    <!-- CSS -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>BacaYuk!</title>

    <!-- CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <style type="text/css">
		body{
			background: #faf1e6;);
		}
	</style>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffe5e2;">
        <a href="" class="logo navbar-brand offset-md-0" style=""><img src="IkonWeb.png"
			width="55px" height="50px" style="" alt=""><a style="color: #d99879;
			font-family: 'Pattaya', sans-serif; font-size: 30px;">BacaYuk!</a></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="col">
        </div>
        <div class="col">
        </div>
        <div class="col">
		</div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="tampilLogin.php" style="color: #d99879; font-family: 'Dancing Script', cursive; 
                    font-size: 25px;">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Library.php" style="color: #d99879; font-family: 'Dancing Script', cursive; 
                    font-size: 25px;">Library</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="col">
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ">
                <li class="nav-item dropdown">
                        <?php
                        if($login_button == '')
                        {
                            echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$_SESSION['name'].'</a>';
                        }
                        ?>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profil</a>
                        <a class="dropdown-item" href="#">Notification</a>
                        <div class="dropdown-divider"></div>
                        <?php
                        if($login_button == '')
                        {
                            echo '<a class="dropdown-item" href="logout.php">Logout</a>';
                        }
                        ?>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col">
        <?php
        if($login_button == '')
        {
            echo '<a href="" class="logo navbar-brand offset-md-0" style="padding-top: 20px;"><img
            src="'.$_SESSION["user_image"].'" width="55px" height="50px" style="margin-bottom: 20px;" alt="">';
        }
        ?>
        </div>
    </nav>

    <div class="container" style="margin-bottom: 50px;">
    <div class="row row justify-content-center" style="">
		<div class="col">
			<a style="color: #d99879; font-family: 'Pattaya', sans-serif; font-size: 45px;">
				Selamat Datang di BacaYuk!</a>
		</div>
	</div>
    <div class="row row justify-content-center" style="margin-left: 30px;">
        <div class="col">
			<a style="color: #d99879; font-family: 'Pattaya', sans-serif; font-size: 20px;">
				Berikut cerita untuk anda..</a>
		</div>
    </div>
    </div>

    <div class="container" style="margin-bottom: 50px;">
        <div class="row justify-content-center">
            <div class="col-2">
                <a  href="cerita1.php"><img src="gambar1.jpg" alt="Gambar 1" width="150px" height="200px"></a>
                <center><a href="cerita1.php" style="font-family: 'Amatic SC', cursive; color: #03256c; font-size: 30px;">
                My Overprotectif Brother</a></center>
            </div>
            <div class="col-2">
                <a  href="cerita2.php"><img src="gambar2.jpg" alt="Gambar 2" width="150px" height="200px"></a>
                <center><a href="cerita2.php" style="font-family: 'Amatic SC', cursive; color: #03256c; font-size: 30px;">
                Adenna & Adrian</a></center>
            </div>
            <div class="col-2">
                <a  href="cerita3.php"><img src="gambar3.jpg" alt="Gambar 3" width="150px" height="200px"></a>
                <center><a href="cerita3.php" style="font-family: 'Amatic SC', cursive; color: #03256c; font-size: 30px;">
                Married with Gangster</a></center>
            </div>
            <div class="col-2">
                <a  href="cerita4.php"><img src="gambar4.jpg" alt="Gambar 4" width="150px" height="200px"></a>
                <center><a href="cerita4.php" style="font-family: 'Amatic SC', cursive; color: #03256c; font-size: 30px;">
                Alaskar</a></center>
            </div>
            <div class="col-2">
                <a  href="cerita5.php"><img src="gambar5.jpg" alt="Gambar 5" width="150px" height="200px"></a>
                <center><a href="cerita5.php" style="font-family: 'Amatic SC', cursive; color: #03256c; font-size: 30px;">
                LeoVan</a></center>
            </div>
        </div>
    </div>
    <div class="container" style="margin-bottom: 50px;">
        <div class="row justify-content-center">
            <div class="col-2">
                <a  href="cerita6.php"><img src="gambar6.jpg" alt="Gambar 6" width="150px" height="200px"></a>
                <center><a href="cerita6.php" style="font-family: 'Amatic SC', cursive; color: #03256c; font-size: 30px;">
                Always and Forever</a></center>
            </div>
            <div class="col-2">
                <a  href="cerita7.php"><img src="gambar7.jpg" alt="Gambar 7" width="150px" height="200px"></a>
                <center><a href="cerita7.php" style="font-family: 'Amatic SC', cursive; color: #03256c; font-size: 30px;">
                Alaluna</a></center>
            </div>
            <div class="col-2">
                <a  href="cerita8.php"><img src="gambar8.jpg" alt="Gambar 8" width="150px" height="200px"></a>
                <center><a href="cerita8.php" style="font-family: 'Amatic SC', cursive; color: #03256c; font-size: 30px;">
                AuraLaska</a></center>
            </div>
            <div class="col-2">
                <a  href="cerita9.php"><img src="gambar9.jpg" alt="Gambar 9" width="150px" height="200px"></a>
                <center><a href="cerita9.php" style="font-family: 'Amatic SC', cursive; color: #03256c; font-size: 30px;">
                Idol Ghost</a></center>
            </div>
        </div>
    </div>

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