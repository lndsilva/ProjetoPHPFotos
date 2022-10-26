<?php

	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "dbSistemas";

	$conn = new mysqli($host,$username,$password) or die("Impossível Conectar");

	mysqli_select_db($conn, $db) or die("Impossível Conectar");

	$sql = "SELECT * FROM PESSOA";

	$result = mysql_query($conn, $sql) or die("Impossível executar a query");

	while($row = mysqli_fetch_array($result)) {
		
		echo "<img src='getImagem.php?PicNum=$row->PES_ID' \">";
	}

?>