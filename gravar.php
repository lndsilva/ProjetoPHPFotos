<?php

$imagem = $_FILES["imagem"];
$host = "localhost";
$username = "root";
$password = "";
$db = "dbSistemas";

	if($imagem != NULL) {
		
		$nomeFinal = time().'.jpg';
		
		if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
		
			$tamanhoImg = filesize($nomeFinal);

			$mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));

			$conn = new mysqli($host,$username,$password) or die("Impossível Conectar");

			mysqli_select_db($conn, $db) or die("Impossível Conectar");

			$sql = "INSERT INTO PESSOA (PES_IMG) VALUES ('$mysqlImg')";

			mysqli_query($conn, $sql) or die("O sistema não foi capaz de executar a query");

			unlink($nomeFinal);

			header("location:exibir.php");
		}
	}
	else {
	
		echo"Você não realizou o upload de forma satisfatória.";
	}

?>