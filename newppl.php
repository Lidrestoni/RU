<?php
	session_start();
	require 'connection.php';
	if((isset($_SESSION['op']) and $_SESSION['op'] == 1)? db_conecta() ? 1:0:0){
?>
	<!DOCTYPE html>
	<html  lang="pt-br">
		<head>
			<meta http-equiv="Content-Language" content="pt-br">			
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="tela.css" />
			
			<title>Cardápio Online Restaurante Universitário - Universidade Federal da Fronteira Sul</title>
			<meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
			<meta name="author" content="pcmaster" />
			<link rel="shortcut icon" href="../favicon.ico">
			<link rel="stylesheet" type="text/css" href="css/demo.css" />
			<link rel="stylesheet" type="text/css" href="css/style.css" />
			
			<link rel="stylesheet" type="text/css" href="css/animate-custom.css" >
			
			<meta name="description" content="">
			<meta name="author" content="pcmaster" >
			<link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
			<script src="js/jquery.min.js"></script>
			<script src="js/fileinput.js" type="text/javascript"></script>
			<script src="js/bootstrap.min.js" type="text/javascript"></script>
			<link rel="stylesheet" type="text/css" href="css/bootstrap-combined.min.css" >
			
			<script src="js/StrongPass.js"></script>
    		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<script type="text/javascript">
				function getpos() {
					var div = document.getElementById('div3');
					div.style.top = '100px';
					//print("rwinreireionoineionenoinoinro3in")
				}
				function txtAge_onblur()
				{

					 var myForm = document.form1;
   					var txtAge = document.form1.inputmat;
   					if (isNaN(txtAge.value) == true)
   					{
      						//document.getElementById("inputmat").innerHTML = 'Apenas numeros';
						//document.write('<p>four</p>');
						$("#tes").css("color", "red").show();
      						txtAge.focus();
      						txtAge.select();
   					}
				}
	</script>

		

			
			<meta name="robots" content="noindex" />    <meta name="viewport" content="width=device-width, initial-scale=1.0">

			
			
		</head>
		<body  id="page-login-index" onload="getpos()">
			<div class="skiplinks">
				<header role="banner" class="navbar navbar-fixed-top navbar-inverse moodle-has-zindex" body style="background:#228B21;border:#228B21;padding:2px" >
					<div class="container-fluid" padding="2px">
						<a href="http://uffs.edu.br"><img src="http://uffs.edu.br/images/identidadevisual/Chapeco/IdentidadeVisual_Campus_Chapec_Colorida_para_fundos_Escuros.png" width="100" height="120" alt="Logo UFFS" title="Logo Universidade Federal da Fronteira Sul" />
					</div>
				</header>
			</div>
			<br><br><br><br><br><br><br><br>
			<div class="container">
				<section>
					<div id="container_demo" >
						<!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
						<a class="hiddenanchor" id="toregister"></a>
						<a class="hiddenanchor" id="tologin"></a>
						<div id="wrapper" style="color: #228B22">
							<div id="login"  class="animate form">
								<form id="form1" name="form1" action="newpplup.php" method="post" enctype="multipart/form-data">
									<header>
										<h1 style="color: #228B22" ><span>Cadastrar Pessoa</span></h1>
									</header>
									<p>
										<label for="inputnome" style="color: #228B22" data-icon="" >Nome</label>
										<input id="inputnome" name="inputnome" placeholder="" required="true"/>
									</p>
									<p>
										<label for="inputemail" style="color: #228B22" data-icon="" >Email</label>
										<input type="email" id="inputemail" name="inputemail" placeholder="" required="true"/></p>  <p>
										
									
										<label for="inputmat" style="color: #228B22" data-icon="" >Matrícula/Siape</label>
										<input id="inputmat" name="inputmat" placeholder="" required="true" onblur="txtAge_onblur()"/><div id="tes" name="tes" style="display:none"><p style="color: red">Apenas números</p></div>
									</p>

									<p>
										<label for="inputfunc" style="color: #228B22" data-icon="" >Função</label>
										<select id="inputfunc" name="inputfunc" placeholder="" style="color: #228B22">
											<option value="f1" style="color: #228B22" selected>Estudante</option>
											<option value="f2" style="color: #228B22">Professor</option>
											<option value="f3" style="color: #228B22">Servidor</option>
											<option value="f4" style="color: #228B22">Terceirizado</option>
										</select>
									</p>
									
									<p>
										<label for="inputpass" style="color: #228B22" data-icon="" >Criar senha</label>										
										<input type="password" id="password" name="password" placeholder="" required="true"/>
										 <div id="messages"></div>
									</p>


									
									<br><br>
									<p>
										<input class="btn btn-success" type="submit" value="Cadastrar" name="fsub2" id="fsub2" />
									</p>
								</form>
							</div>
						</div>
					</div>
				</section>
				</div> 
					<!-- /container -->
				</div>
				<div id="div1"><p style="text-align:center">
				<br><br><br><br>
				<img id="comida" src="comida.jpg" width="400" height="120" alt="Logo UFFS" title="Logo Universidade Federal da Fronteira Sul"/>
			</div>
		</body>
	</html>
<?php
}
else{
	header("Location:login.php"); 
}
?>
