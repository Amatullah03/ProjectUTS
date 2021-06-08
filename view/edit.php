<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- CSS -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">

    <title>PMB PCR | Penerimaan Mahasiswa Baru Politeknik Caltex Riau</title>
</head>

<body style="margin-Right: 50px;margin-left: 50px;background-color: #faf1e6;margin-top: 20px">
<fieldset style="margin-Right: 300px; margin-left: 300px; background-color: #d99879; margin-top: 80px;
	border-radius : 10px;">
	<div class="container">
		<div class="col-md-12 col-sm-12">
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 navbar">
                        <a href="" class="logo navbar-brand offset-md-0" style="margin-top: 24px;"><img src="IkonWeb.png"
					    width="55px" height="50px" style="margin-bottom: 14px;" alt=""><a style="color: white;
					    font-family: 'Pattaya', sans-serif; font-size: 30px;">BacaYuk!</a></a>
                        </ul>
                    </div>
		        </div>
	        </div>
            <?php
            include '../ProjectUTS_Semester2/../model/database.php';
            $db = new database();
            ?>
    
            <form action="../ProjectUTS_Semester2/../controller/proses.php?aksi=update" method="post">
                <?php
                foreach($db->edit($_GET['id']) as $d){
                ?>
                <table>
                    <tr>
                        <a style="color: white" >ID Pendaftar</a>
                    </tr>
                    <tr>
                        <input type="text" name="id" value="<?php echo $d['ID'] ?>" class="form-control rounded mt-1">
                    </tr>
                        <a style="color: white">Nama</a>
                    </tr>
                    <tr>
                        <input type="text" name="nama" value="<?php echo $d['Nama'] ?>" class="form-control rounded mt-1">
                    </tr>
                    <tr>
                        <a style="color: white">Email</a>
                    </tr>
                    <tr>
                        <input type="text" name="email" value="<?php echo $d['Email'] ?>" class="form-control rounded mt-1">
                    </tr>
                    <tr>
                        <a style="color: white" >Gender Pendaftar</a>
                    </tr>
                    <tr>
                        <input type="text" name="gender" value="<?php echo $d['Gender'] ?>"
                            class="form-control rounded mt-1">
                    </tr>
                    <tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-success mt-3 n2" style="margin-bottom: 40px;">Simpan</td>
                    </tr>
                </table>
                <?php } ?>
            </form>
        </div>
    </div>
</fieldset>

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