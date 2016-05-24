<?php
	session_start();
	require 'connection.php'; 
	if((isset($_SESSION['op']) and $_SESSION['op'] == 1)? db_conecta() ? 1:0:0){		
		function formAddItem($val, $tabela){
			$rows = db_select(1,'select tipo from TipoPratos where id='.$val); 
			echo "<p>$rows[0]: <select name='TipPrat".$val."' id= 'TipPrat".$val."'>";   
			$rows = db_select(2,'select id, nome from '.$tabela.' where tipo='.$val.' order by nome asc'); 
			for($i=0; $i<sizeof($rows); $i++){ 
				echo "<option value =".$rows[$i++];
				echo "> ".$rows[$i]."</option>"; 
			}
			echo"</select></p>";		
		}
?>
		<!DOCTYPE html>
		<html  dir="ltr" lang="pt-br" xml:lang="pt-br">
			<head>
    			<link rel="stylesheet" type="text/css" href="tela.css" />
				<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
				<title>Cardápio Online Restaurante Universitário - Universidade Federal da Fronteira Sul</title>
				<meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
			    <meta name="author" content="Codrops" />
				<link rel="shortcut icon" href="../favicon.ico"> 
				<link rel="stylesheet" type="text/css" href="css/demo.css" />
				<link rel="stylesheet" type="text/css" href="css/style.css" />
				<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
				<link rel="stylesheet" href="css/datepicker.css">
				<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
				<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
				<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
				<meta name="description" content="">
				<meta name="author" content="">
				<link href="css/bootstrap.min.css" rel="stylesheet">
				<link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
				<script src="js/jquery.min.js"></script>
				<script src="js/fileinput.js" type="text/javascript"></script>
				<script src="js/fileinput_locale_fr.js" type="text/javascript"></script>
				<script src="js/fileinput_locale_es.js" type="text/javascript"></script>
				<script src="js/bootstrap.min.js" type="text/javascript"></script>
				<script src="js/bootstrap-datepicker.js"></script>
				<meta name="robots" content="noindex" />    <meta name="viewport" content="width=device-width, initial-scale=1.0">
				<div class="skiplinks">
					<header role="banner" class="navbar navbar-fixed-top navbar-inverse moodle-has-zindex" body style="background:#228B22">
						<div class="container-fluid">
							<img src="http://uffs.edu.br/images/identidadevisual/Chapeco/IdentidadeVisual_Campus_Chapec_Colorida_para_fundos_Escuros.png" width="100" height="120" alt="Logo UFFS" title="Logo Universidade Federal da Fronteira Sul" />
						</div>
					</header>
				</div>
    			<br/><br/><br/><br/><br/><br/>
			</head>
			<body  id="page-login-index">    
				<h2 align="center" id="cadCard">Manter Cardápio</h2>  
				<div class="container">
					<title>Calendário jQuery</title> 
					<form name="cadastro" method="post" action="cadastrar.php">   
						<table align='center' border="2" cellpadding="10">
							<th>
								<p>Data: 
								<input type="text" name = "calendario" id="calendario" value=
									"<?php 
										echo date('m/d/Y');
									?>"
								/>
								</p>
							</th>
							<th>
								<?php for($i=1; $i<=9; $i++)
									formAddItem($i, "Pratos");
								?> 
								</br></br>
								<input type="submit" name="Submit" value="Enviar" /> <br />
							</th>
						</table>
						<input type="hidden" name="Edit" id="Edit" value=0 />
					</form>
				</div>
        		<div class="footnote text-center"><div class="text_to_html"><p style="text-align:center;"></p></div>     
					<img id="comida" src="comida.jpg" width="400" height="120"  alt="Logo UFFS" title="Logo Universidade Federal da Fronteira Sul"/>
      
				</div>
			</body>
		</html>


		<script type="text/javascript">
			$(function() {
    			$( "#calendario" ).datepicker({
    			    showOn: "button",
    			    buttonImage: "calendario.png",
    			    buttonImageOnly: true,
					showButtonPanel:true,
					dateFormat: 'dd-mm-yy'
    			});
				
				function startD(){
					var dados = $("#calendario").serialize();alert(dados);
					jQuery.ajax({
						type: "POST",
						url: "editcardapio.php",
						data: dados,
						success: function( data ){
							$('head').append(data);
							document.getElementById('cadCard').innerHTML = (dadosR? "Editar":"Cadastrar") + " Cardápio";
							document.getElementById('Edit').value = (dadosR? 1 : 0);
							if(dadosR)
								for(var i=1; i<=9; i++)
									$("#TipPrat"+i).val(dadosR[i-1]);			
						}
					});
				}
				$(startD);
				$("#calendario").change(startD);	
			});
		</script>
		
 <?php
	}
	else {
  		header("Location:login.php"); 
	}
?>


