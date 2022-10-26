<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "dbSistemas";
	$PicNum = $_POST["PicNum"];

	$conn = new mysqli($host,$username,$password) or die("Impossível Conectar");

	mysqli_select_db($conn, $db) or die("Impossível Conectar");

	$sql = "SELECT * FROM PESSOA WHERE PES_ID=$PicNum";
	
	$result = mysqli_query($conn,$sql)  or 
	die("Impossível executar a query");

	mysqli_report($result);
	
	$row = mysqli_fetch_object($result);
	
	header("Content-type:image/gif");
	
	echo $row->PES_IMG;
?>