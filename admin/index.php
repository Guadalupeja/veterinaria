<?php 
//importar la conexion
require "../includes/config/database.php";
$db = conectarDB();


//escribir el query
$query = "SELECT * FROM citas";






//consultar la base de datos
$resultadoConsulta = mysqli_query($db, $query);







  //muestra msj condicional
$resultado = $_GET['resultado'] ?? null;
  //incluye un template
require "../includes/funciones.php";

incluirTemplate("header");
 ?>

    <main class="contenedor seccion">
        <h1>Administrador de citas</h1>
          <?php if (intval ($resultado)  === 1) :  ?>
              <p class="alerta exito">Cita creada correctamente</p>
              <?php endif;  ?>
          


        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Cita</a>
            <table class="propiedades">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Cliente</th>
                        <th>Acciones</th>

                        <tbody>
                        <?php while ($cita = mysqli_fetch_assoc($resultadoConsulta)) :  ?>
                            <tr>
                                <td> <?php echo $cita['id']; ?></td>
                                <td> <?php echo $cita['fecha']; ?> </td>
                                <td> <?php echo $cita['hora']; ?> </td>

                                <td>
                                    <?php echo  $cita['usuariosId']   ; ?>
                                 
                                </td>
                                        <td>
                               
                                    <a href="#" class="boton-verde-block">Aceptar</a>
                                    <a href="admin/propiedades/actualizar.php?id=<?php echo $cita['id']; ?>" class="boton-amarillo-block">Actualizar</a>
                                    <a href="#" class="boton-rojo-block">Eliminar</a>
                                </td>
                            </tr>
                            <?php endwhile;  ?>
                        </tbody>
                    </tr>
                </thead>
            </table>





    </main>
    <?php 
    incluirTemplate("footer");
 ?>