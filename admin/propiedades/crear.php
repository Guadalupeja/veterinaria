<?php 
//base de datos
require "../../includes/config/database.php";
$db = conectarDB();

//consultar para obtener los usuarios
$consulta = "SELECT * FROM usuarios";
$resultado = mysqli_query($db, $consulta);


//arreglo para detectar errores en el formulario
$errores = [];


$fecha= "";
$hora = "";
$usuariosId = "";

if($_SERVER ["REQUEST_METHOD"]=== "POST"){

     // echo "<pre>";
     // var_dump($errores);
     // echo "</pre>";
 
    $fecha= mysqli_real_escape_string($db,  $_POST["fecha"] );
    $hora = mysqli_real_escape_string ($db, $_POST["hora"]) ;
    $usuariosId = mysqli_real_escape_string ($db, $_POST["usuariosId"]);


    if(!$fecha){
        $errores [] = "Debes añadir una fecha";
    }

    if(!$hora){
        $errores [] = "La hora es obligatoria";
    }
    if(!$usuariosId){
        $errores [] = "Debes añadir un usuario";
    }


    //revisar que el arreglo de errores esté vacío
    if(empty($errores)){



        //insertar en la base de datos

    $query = "INSERT INTO citas (fecha, hora, usuariosId) VALUES ('$fecha', '$hora', '$usuariosId')";

    // echo $query; para mostrar el comando de mysql y probarlo
    $resultado = mysqli_query($db, $query);
    if ($resultado){
       //redireccionar al usuario
       header('Location: /admin?resultado=1');
    }

    }




    

}





require "../../includes/funciones.php";

incluirTemplate("header");
 ?>

    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/admin" class="boton boton-verde">Volver</a>
   
        <?php foreach($errores as $error): ?>
            <div class="alerta error">
            <?php echo $error; ?>   
            </div>

            <?php endforeach; ?>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
            <fieldset>
                <legend>Información General</legend>

                <label for="fecha">Fecha</label>
                <input type="date" id="fecha" name="fecha" placeholder="fecha cita" value="<?php echo $fecha; ?>">

                <label for="hora">Hora</label>
                <input type="time" id="hora" name="hora" placeholder="hora cita" value="<?php echo $hora; ?>">

                
                <select name="usuariosId" value="<?php echo $usuariosId; ?>">
                <option value="">--Seleccione--</option>
                <?php while ($usuarios = mysqli_fetch_assoc($resultado)) : ?>
                        <option  <?php echo $usuariosId === $usuarios ['id'] ? 'selected' : ''; ?> value="<?php echo $usuarios ['id']; ?>"> <?php echo  $usuarios ['nombre']. " ". $usuarios ['apellido']; ?> </option>
                   
                    <?php endwhile; ?>
                </select>

               
                

            </fieldset>
            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>
    <?php 
    incluirTemplate("footer");
 ?>