<?php
  session_start();
   if(isset($_SESSION['op']) and $_SESSION['op'] == 1){
  //$conecta = mysql_connect("localhost", "root", "") or print (mysql_error());
  //mysql_select_db("RU", $conecta) or print(mysql_error());
?>

 <!DOCTYPE html>
<html  dir="ltr" lang="pt-br" xml:lang="pt-br">
<head>
       <link rel="stylesheet" type="text/css" href="tela.css" />
       <link rel="stylesheet" type="text/css" href="acesso.css" />
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Example of using CSS only for masonry / isotope style layout with Bootstrap panels." />
        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cardápio Online Restaurante Universitário - Universidade Federal da Fronteira Sul</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="robots" content="noindex" />    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body  id="page-login-index">
<div class="skiplinks">
<header role="banner" class="navbar navbar-fixed-top navbar-inverse moodle-has-zindex" body style="background:#228B22; padding: 2px">
        <div class="container-fluid">      
            <img src="http://uffs.edu.br/images/identidadevisual/Chapeco/IdentidadeVisual_Campus_Chapec_Colorida_para_fundos_Escuros.png" width="100" height="120" alt="Logo UFFS" title="Logo Universidade Federal da Fronteira Sul" /></a></header>
 
                                <ul class="nav pull-right"></header><header>
                                  <h4 style="text-align:right;"> Bem vindo

                                   <h2 style="text-align:center;">Cardápio Online Restaurante Universitário - Universidade Federal da Fronteira Sul  </h2> 
                                  <br>
                                  <div style="text-align: center;">
                                    <a href = "cadastrocardapio.php"><button class="grande verde">Cadastrar cardápio</button> <a href = "cadastrocardapio.php"><button class="grande verde">Alterar cardápio</button></br>
                                    <a href = "cadastroPratos.php"><button class="grande verde">Cadastrar pratos</button> <a href = "editprato.php"><button class="grande verde">Alterar prato</button></br>
                                    <a href = "cadastrocredito.php"><button class="grande verde">Cadastrar créditos</button><br>
			        <a href = "newppl.php"><button class="grande verde">Cadastrar usuário</button>
</div>

<br><br>
                        
                    <li></li>
                </ul>
            </div>
        </div>
</header>


        <div id="course-footer"></div>
    
        <div class="footnote text-center"><div class="text_to_html"><p style="text-align:center;"><b>
          <br><br>
          
          <br>
          
          <img id="comida" src="comida.jpg" width="400" height="120"  alt="Logo UFFS" title="Logo Universidade Federal da Fronteira Sul"/>

</style
</body>
</html>
<?php
}else {
  header("Location:login.php"); 
}
?>
