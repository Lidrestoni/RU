<?php 
	include("connected.php");

	if(isset($_POST['fsub2'])){
		
		$banco = Conectar();

		if(isset($_POST['inputnome']) && isset($_POST['inputemail'])
		   && isset($_POST['inputfunc']) && isset($_POST['inputpass'])){
			$nome = $_POST['inputnome'];
			$mail = $_POST['inputemail'];
			$func = $_POST['inputfunc'];
			$pass = $_POST['inputpass'];

			if($func == 'f1') $func = "Estudante";
			else if($func == 'f2') $func = "Professor";
			else $func = "Servidor";

			$pass = md5($pass);
			$query = "insert into Bilhete (cod,valor) values (NULL, '0')";
			$result = mysqli_query($banco,$query);
			if($result){
				$query = "select MAX(cod) from Bilhete;
				$result = mysqli_query($banco,$query);
				$c= mysqli_fetch_row($result);
				$count = $c[0];
			

			}

		}


	}


?>