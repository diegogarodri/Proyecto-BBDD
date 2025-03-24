<?php
    //conexion con la base  de datos 
    include 'config.php'; //include del archivo con los datos de conexión
	$conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD); //Conecta con la base de datos
    $conexion->set_charset("utf8");
	
	
	
	//Desactiva errores
	$controlador = new mysqli_driver();
    $controlador->report_mode = MYSQLI_REPORT_OFF;

    $jesuita=$_POST["nombreJes"];
    $codigo=$_POST["codigo"];

//consulta select

    $sql="SELECT idJesuita FROM jesuita
        where nombre='".$jesuita."' AND codigo='". $codigo."';";
    //echo $sql;
   

   

    $resultado=$conexion->query($sql);
    if($conexion->affected_rows==0)     
    {
        header("Location:principal.php");
    }
   ?>



<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>visitas</title>
    <style>
        body{
            margin: 0 auto;
            width:1200px;
            background-color:#ADD8E6;
            
        }
        form{
            margin: auto;
            padding-left:20px;
            border:1px solid black;
            border-radius:100px;
			width:500px;
            height:250px;
			background-color:#FFFFE0 ;
            font-size:large;
            font-style:italic;
        }
        #boton{
            margin-top:100px;
        }
        input{
            margin-top:100px;
        }
        h1{
            text-align: center;
        }
        #bloqueo {
            display:none;
        }
    </style>
</head>
<body>
    <?php
        echo '<h1> Hola, '.$jesuita.' ¿Qué lugar desea visitar?</h1>';
		
    ?>
    <form action="guardarvisita.php" method="post">
		<input type="submit" value="Iniciar Sesión"><br>
        <select name="ip">
            <?php
                $sql="SELECT ip,ciudad FROM lugares;";
                $resultado=$conexion->query($sql);
                while($fila=$resultado->fetch_array())
                    echo '<option name="id" value="'.$fila['ip'].'">'.$fila['ciudad'].'</option>';
            ?>
        </select><br>
        
        <?php

        $sql="SELECT idJesuita FROM jesuita
        where nombre='".$jesuita."' AND codigo='".$codigo."';";
        
        $resultado=$conexion->query($sql);
        $fila=$resultado->fetch_array();
        echo '<input type="text" id="bloqueo" name="id" value="'.$fila["idJesuita"].'"/>';
        ?>
        
    </form>
</body>
</html>



<?php

    $conexion->close();
?>