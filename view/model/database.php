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
		$data = mysqli_query($this->con,"select * from library");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function input($judul, $penulis, $keterangan){
		mysqli_query($this->con,"insert into library values('', '$judul', '$penulis', '$keterangan')");
	}
	function hapus($id){
		mysqli_query($this->con,"delete from library where ID ='$id'");
	}
	function edit($id){
		$data = mysqli_query($this->con,"select * from library where ID ='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function update($id, $judul, $penulis, $keterangan){
		mysqli_query($this->con, "update library set Judul='$judul',Penulis='$penulis',
		Keterangan='$keterangan' where ID ='$id'");
	}
}