<?php
    //conexion con la base  de datos 
    include 'config.php'; //include del archivo con los datos de conexión
	$conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD); //Conecta con la base de datos
    $conexion->set_charset("utf8"); //Usa juego caracteres UTF8
	//Desactiva errores
	$controlador = new mysqli_driver();
    $controlador->report_mode = MYSQLI_REPORT_OFF;
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Proyecto Jesuitas</title>
    <style>
        body{
            margin: 0 auto;
            background-color:#ADD8E6;
          
        }
        form{
            width:200px;
            height:200px;
            margin: auto;
            padding-left:20px;
            border:1px solid gray;
            border-radius:15px;
			background-color:#FFFFE0 ;
            font-size:large;
            font-style:italic;
        }
        #boton{
            margin-top:20px;
        }
        input{
            margin-top:10px;
        }
        h1{
            text-align: center;
        }
		a{
			float:right;
			 margin-right: 20px;
			 margin-top:5px;
		}
		div{
			height:50px;
			 
			 background-color:#ADD8E6;
			width:max;
		}
		#ing{
            margin-right: 45px;
        }
    </style>
</head>
<body>
	<div>
		<a href="principal.php"><p>Spanish </p></a>
		<a href="principaling.php"><p>English</p></a>
	</div>
    <h1>Sign in with said Jesuit</h1>
    <form action="validar.php" method="post">
        <label for="nombreJes">Name of the Jesuit</label><br/>
        <input type="text" name="nombreJes" placeholder="nombre jesuita"/><br/>
        <label for="codigo">Code of Jesuit</label><br/>
        <input type="password" name="codigo" placeholder="Código" maxlength="5"/><br/>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>