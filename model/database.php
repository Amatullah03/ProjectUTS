<?php

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "ProjectUTS_SM2";
	var $con;

	function __construct(){
		$this->con=mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		mysqli_select_db($this->con,$this->db);
	}
	function tampil_data(){
		$data = mysqli_query($this->con,"select * from bacaonline");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function input($nama, $email, $gender){
		mysqli_query($this->con,"insert into bacaonline values('', '$nama', '$email', '$gender')");
	}
	function hapus($id){
		mysqli_query($this->con,"delete from bacaonline where ID ='$id'");
	}
	function edit($id){
		$data = mysqli_query($this->con,"select * from bacaonline where ID ='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function update($id, $nama, $email, $gender){
		mysqli_query($this->con, "update bacaonline set Nama='$nama',Email='$email',
		Gender='$gender' where ID ='$id'");
	}
}