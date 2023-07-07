<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTRO DE MACERADORAS</title>
  <link rel="stylesheet" href="estilos.css">
  <!-- ICONS FONT AWESOME -->
  <script src="https://kit.fontawesome.com/73f851add2.js" crossorigin="anonymous"></script>
</head>
<body>
  <main>
    <div class="title"><h1>REGISTRO MACERADORAS</h1></div>
    <br><br><br>
    <!-- FORMULARIO -->
    <form action="conexion.php" class="formulario" id="formulario" method="POST">
        <!-- GRUPO DE INFORMACIÓN DEL EQUIPO -->
        <!-- TITULO  REGISTRO MACERADORAS -->
                
        <!--1. MODELO-->
        <div class="formulario__grupo" id="grupo__usuario">
            <label class="formulario__label" for="usuario">Modelo :</label>
            <div class="formulario__grupo-input">
                <select class="formulario__input" name="Modelo" id="usuario">
                    <option value="vortex">VORTEX +</option>
                    <option value="compact">COMPACT +</option>
                </select>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
        </div>
        
        <!--2 SERIAL-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Serial</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name= "Serial" id="nombre" placeholder="Inserte el Serial de la maceradora">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
        </div>

        <!--3 ESTADO DEL EQUIPO-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Estado del equipo</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="estadoEquipo" id="nombre" placeholder="Escriba el Estado del equipo">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
        </div>

        <!--4 FECHA DE FABRICACIÓN-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Fecha de Fabricación</label>
            <div class="formulario__grupo-input">
                <input type="date" class="formulario__input" name="fechaFabricacion" id="nombre" placeholder="Inserte la fecha de fabricación de la maceradora">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
        </div>
        <!-- UBICACIÓN DEL EQUIPO-->

        <!--5 PAIS-->
        <div class="formulario__grupo" id="grupo__usuario">
            <label class="formulario__label" for="usuario">Pais:</label>
            <div class="formulario__grupo-input">
                <select class="formulario__input" name="valorPais" id="usuario">
                    <option value="vortex">Colombia</option>
                    <option value="compact">Costarica</option>
                </select>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
        </div>

        <!--6 CIUDAD-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Ciudad</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="valorCiudad" id="nombre" placeholder="ciudad de del equipo">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
        </div>

        <!--7 INSTITUCION-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Institución</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="valorInstitucion" id="nombre" placeholder="Inserte que institucion tiene el equipo">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
        </div>

        <!--8 TELÉFONO-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Teléfono</label>
            <div class="formulario__grupo-input">
                <input type="tel" class="formulario__input" name="valorTelefono" id="nombre" placeholder="Numero de telefono">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
        </div>

        <!--9 DIRECCION-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Dirección</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="valorDireccion" id="nombre" placeholder="Ingrese la dirección">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
        </div>

        <!--10 UBICACIÓN-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Ubicación</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="valorUbicacion" id="nombre" placeholder="ubicación exácta el equipo">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
        </div>

        <!--11 PISO-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Piso</label>
            <div class="formulario__grupo-input">
                <input type="number" class="formulario__input" name="valorPiso" id="nombre" placeholder="Piso dónde está el equipo">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
        </div>

        <!--12 CUARTO-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Cuarto</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="valorCuarto" id="nombre" placeholder="Numero del cuarto está el equipo">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
        </div>

        <!--13 TIPO DE ASISTENCIA-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Tipo de Asistencia</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="tipoAsistencia" id="nombre" placeholder="Número del cuarto">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
        </div> 
        
        <!--14 FECHA DE INSTALACIÓN-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Fecha de Instalacion</label>
            <div class="formulario__grupo-input">
                <input type="date" class="formulario__input" name="fechaInstalacion" id="nombre" placeholder="Número del cuarto">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
        </div>

        <!--15 TIPO DE MANTENIMIENTO-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Tipo de Mantenimiento</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="tipoMantenimiento" id="nombre" placeholder="Número del cuarto">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
        </div>

        <!--16 FECHA DEL MANTENIMIENTO-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Fecha de mantenimiento</label>
            <div class="formulario__grupo-input">
                <input type="date" class="formulario__input" name="fechaMantenimiento" id="nombre" placeholder="Número del cuarto">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
        </div>

        <!--17 TIPO DE PIEZA-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Tipo de Pieza</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="tipoPieza" id="nombre" placeholder="Describa la pieza cambiada">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
        </div>

        <!--18 FECHA DEL CAMBIO DE PIEZA-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Fecha del Cambio de Piezas</label>
            <div class="formulario__grupo-input">
                <input type="date" class="formulario__input" name="fechaCambio_piezas" id="nombre" placeholder="Número del cuarto">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
        </div>

          <!--19 NÚMERO DE CICLOS-->
          <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Número de ciclos</label>
            <div class="formulario__grupo-input">
                <input type="number" class="formulario__input" name="numCiclos" id="nombre" placeholder="inserte el número de ciclos">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
        </div>

        <!--20 FECHA DEL DAÑO-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Fecha del daño</label>
            <div class="formulario__grupo-input">
                <input type="date" class="formulario__input" name="fechaDanio" id="fechaDanio" placeholder="inserte la fecha del daño">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
        </div>

          <!--21 OBSERVACIONES-->
          <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Observaciones</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Obs" id="obs" placeholder="Escriba acá sus observaciones">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
        </div>

           <!--22 IMAGENES-->
           <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Imagenes</label>
            <div class="formulario__grupo-input">
                <input type="file" class="formulario__input" name="image" id="image" placeholder="suba las fotos">
            </div>
        </div>

        <!-- GRUPO ENVIAR -->
        <div class="formulario__grupo formulario__grupo-btn-enviar">
            <input class="formulario__btn" type="submit" value="Enviar">
        </div>  
    </form>
  </main>

</body>
</html>