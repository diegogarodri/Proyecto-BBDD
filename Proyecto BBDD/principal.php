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
            width:500px;
            height:250px;
            margin: auto;
            padding-left:10px
            border:1px solid black;
            border-radius:100px;
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
		.e{
			
			margin-bottom:50px;
		}
		
    </style>
</head>
<body>
	<div>
		<a href="principal.php"><p>Español</p></a>
		<a href="principaling.php"><p>Inglés</p></a>
	</div>
    <h1>Viaje Jesuitas</h1>
    <form action="validaresp.php" method="post">
		<center>
        <label for="nombreJes" class="e">Nombre del jesuita</label><br/>
        <input type="text" name="nombreJes" class="e" placeholder="nombre jesuita"/><br/>
        <label for="codigo" >Codigo de jesuita</label><br/>
        <input type="password" name="codigo" class="e" placeholder="Código" maxlength="5"/><br/>
        <input type="submit" class="e" value="Iniciar Sesión">
		</center>
    </form>
</body>
</html>


<?php
   // cierre de conexion con la base de datos 
   $conexion->close();
?>