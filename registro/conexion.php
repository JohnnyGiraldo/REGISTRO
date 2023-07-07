<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta db</title>
    <style type="text/css">
     
      table {
        border: solid 2px #7e7c7c;
        border-collapse: collapse;
                     
      }
     
      th, h1 {
        background-color: #edf797;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
      }


    </style>
</head>
<body>
    
</body>
</html>

<?php
//validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";

//conetamos a la base datos
$connection = mysqli_connect($host, $user, $pass,);

//hacemos llamado al imput de formuario
$modelo_1 = $_POST["Modelo"] ;
$serial_2 = $_POST["Serial"] ;
$estadoEquipo_3 = $_POST["estadoEquipo"] ;
$fechaFabricacion_4 = $_POST["fechaFabricacion"] ;
$valorPais_5 = $_POST["valorPais"] ;
$valorCiudad_6 = $_POST["valorCiudad"] ;
$valorInstitucion_7 = $_POST["valorInstitucion"] ;
$valorTelefono_8 = $_POST["valorTelefono"] ;
$valorDireccion_9 = $_POST["valorDireccion"] ;
$valorUbicacion_10 = $_POST["valorUbicacion"] ;
$valorPiso_11 = $_POST["valorPiso"] ;
$valorCuarto_12 = $_POST["valorCuarto"] ;
$tipoAsistencia_13 = $_POST["tipoAsistencia"] ;
$fechaInstalacion_14 = $_POST["fechaInstalacion"] ;
$tipoMantenimiento_15 = $_POST["tipoMantenimiento"] ;
$fechaMantenimiento_16 = $_POST["fechaMantenimiento"] ;
$tipoPieza_17 = $_POST["tipoPieza"] ;
$fechaCambio_piezas_18 = $_POST["fechaCambio_piezas"] ;
$numCiclos_19 = $_POST["numCiclos"] ;
$fechaDanio_20 = $_POST["fechaDanio"] ;
$Obs_21 = $_POST["Obs"] ;
$image_22 = $_POST["image"] ;

//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" .mysqli_error($conexion);
        }
  else
        {
            echo "<b><h3>Hemos conectado al servidor</h3></b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "alkamedica";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Tabla seleccionada:</h3>" ;
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO maceradoras (MODELO, SERIAL, PAIS, CIUDAD, INSTITUCION, TELEFONO, DIRECCION, UBICACIÓN, PISO, CUARTO, `TIPO DE ASISTENCIA`, `FECHA FABRICACION`, `FECHA INSTALACION`, `TIPO DE MANTENIMIENTO`, `FECHA DE MANTENIMIENTO`, `FECHA DEL CAMBIO DE LA PIEZA`, `TIPO DE PIEZA`, `NUMERO DE CICLOS`, `ESTADO DEL EQUIPO`, OBSERVACIONES, `FECHA DE DAÑO`, IMAGENES)
        VALUES ('$modelo_1', '$serial_2', '$estadoEquipo_3', '$fechaFabricacion_4', '$valorPais_5', '$valorCiudad_6', '$valorInstitucion_7', '$valorTelefono_8', '$valorDireccion_9', '$valorUbicacion_10', '$valorPiso_11', '$valorCuarto_12', '$tipoAsistencia_13', '$fechaInstalacion_14', '$tipoMantenimiento_15', '$fechaMantenimiento_16', '$fechaCambio_piezas_18', '$tipoPieza_17', '$numCiclos_19', '$fechaDanio_20', '$Obs_21', '$image_22')";
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM maceradoras";
        
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>"; 
echo "<tr>";
echo "<th><h1>Modelo</th></h1>"; //1
echo "<th><h1>Serial</th></h1>"; //2
echo "<th><h1>estado del Equipo</th></h1>"; //3
echo "<th><h1>fecha Fabricacion</th></h1>"; //4
echo "<th><h1>Pais</th></h1>"; //5
echo "<th><h1>Ciudad</th></h1>"; //6
echo "<th><h1>Institución</th></h1>"; //7
echo "<th><h1>Telefono</th></h1>"; //8
echo "<th><h1>Direccion</th></h1>"; //9
echo "<th><h1>Ubicación</th></h1>"; //10
echo "<th><h1>Piso</th></h1>"; //11
echo "<th><h1>Cuarto</th></h1>"; //12
echo "<th><h1>Tipo Asistencia</th></h1>"; //13
echo "<th><h1>Fecha Instalación</th></h1>"; //14
echo "<th><h1>Tipo de Mantenimiento</th></h1>"; //15
echo "<th><h1>Fecha Mantenimiento</th></h1>"; //16
echo "<th><h1>Tipo Pieza</th></h1>"; //17
echo "<th><h1>Fecha cambio Pieza</th></h1>"; //18
echo "<th><h1>Numero de ciclos</th></h1>"; //19
echo "<th><h1>Fecha Daño</th></h1>"; //20
echo "<th><h1>Observaciones</th></h1>"; //21
echo "<th><h1>Fotos</th></h1>"; //22   

echo "</tr>";

while ($colum = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td><h2>" . $modelo_1 . "</td></h2>";
    echo "<td><h2>" . $serial_2 . "</td></h2>";
    echo "<td><h2>" . $estadoEquipo_3 . "</td></h2>";
    echo "<td><h2>" . $fechaFabricacion_4 . "</td></h2>";
    echo "<td><h2>" . $valorPais_5 . "</td></h2>";
    echo "<td><h2>" . $valorCiudad_6 . "</td></h2>";
    echo "<td><h2>" . $valorInstitucion_7 . "</td></h2>";
    echo "<td><h2>" . $valorTelefono_8 . "</td></h2>";
    echo "<td><h2>" . $valorDireccion_9 . "</td></h2>";
    echo "<td><h2>" . $valorUbicacion_10 . "</td></h2>";
    echo "<td><h2>" . $valorPiso_11 . "</td></h2>";
    echo "<td><h2>" . $valorCuarto_12 . "</td></h2>";
    echo "<td><h2>" . $tipoAsistencia_13 . "</td></h2>";
    echo "<td><h2>" . $fechaInstalacion_14 . "</td></h2>";
    echo "<td><h2>" . $tipoMantenimiento_15 . "</td></h2>";
    echo "<td><h2>" . $fechaMantenimiento_16 . "</td></h2>";
    echo "<td><h2>" . $tipoPieza_17 . "</td></h2>";
    echo "<td><h2>" . $fechaCambio_piezas_18 . "</td></h2>";
    echo "<td><h2>" . $numCiclos_19 . "</td></h2>";
    echo "<td><h2>" . $fechaDanio_20 . "</td></h2>";
    echo "<td><h2>" . $Obs_21 . "</td></h2>";
    echo "<td><img style: width = '200px'  height = '70px'>" . $image_22 . "</td></img>";  //  <img src='$row[Image]'  width = '200px'  height = '70px'>
    echo "</tr>";
}
echo "</table>";

mysqli_close($connection);

//echo "Fuera " ;
echo '<a href="index.html"> Volver Atrás</a>';