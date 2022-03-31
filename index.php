<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba_Practica</title>
    <link rel="stylesheet" href="estilos.css">
    <script src="JS/jquery-3.6.0.min.js"></script> 
    <script src="tab.js"></script>
</head>
<body>
    <header>
        <nav class="nav">
            <a class="logo nav-link" href="#"><img src="logo/logo.png" alt=""></a>
            <ul class="nav-menu">
                <li class="nav-menu-item"><a href="#postulacion" class="nav-menu-link nav-link">Bolsa de trabajo</a></li>
                <li class="nav-menu-item2"><a href="#postulantes" class="nav-menu-link nav-link">Postulantes</a></li>
            </ul>
        </nav>

<div class="formularios">
<form id="postulacion" action="agregar_postulacion.php" method="post" class="form" enctype="multipart/form-data">
<input type="text" id="nombre" name="nombre" class="input1" placeholder="Nombre completo">
<input type="text" id="correo" name="correo" class="input1" placeholder="E-mail">
<input type="number" id="telefono" name="telefono" class="input1" placeholder="Teléfono">
<input type="text" id="puesto_solicitado" name="puesto_solicitado" class="input1" placeholder="Puesto solicitado">
<input type="text" id="localidad" name="localidad" class="input2" placeholder="Localidad">
<textarea name="experiencia" id="experiencia" rows="10" placeholder="Habilidades y experiencia laborarl"></textarea>
<input type="file" id="cv" name="cv" class="input1">
<input type="submit" class="input1 btn" value="Eviar Aplicación">
</form>

<form id="postulantes" action="">
    <table>
<tr>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Telefono</th>
    <th>Puesto Solicitado</th>
    <th>Localidad</th>
    <th>Experiencia</th>
    <th>CV</th>
    <th></th>
</tr>
<?php 
            include ("conexion.php");
            $objeto = new Conexion;
            $conexion = $objeto->Conectar();

            $consulta = "SELECT id, nombre, correo, telefono, puesto_solicitado, localidad, experiencia, cv FROM postulaciones";
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            while($row = $resultado->fetch(PDO::FETCH_ASSOC)){    
?> 
<tr>
    <td><?php echo $row['nombre'];?></td>
    <td><?php echo $row['correo'];?></td>
    <td><?php echo $row['telefono'];?></td>
    <td><?php echo $row['puesto_solicitado'];?></td>
    <td><?php echo $row['localidad'];?></td>
    <td><?php echo $row['experiencia'];?></td>
    <td><a target="_blanck" href="<?php echo $row['cv'];?>">CV</a></td>
    <td><a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a></td>
</tr>
<?php } ?>
</tr>

    </table>
</form>
</div>
       
    </header>

    <footer></footer>  
<script src="validar_postulacion.js"></script>
</body>
</html>