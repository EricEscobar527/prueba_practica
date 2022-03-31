<?php
include('conexion.php');

   $nombre = $_POST['nombre'];
   $correo = $_POST['correo'];
   $telefono = $_POST['telefono'];
   $puesto_solicitado = $_POST['puesto_solicitado'];
   $localidad = $_POST['localidad'];
   $experiencia = $_POST['experiencia'];

   if($_FILES["cv"]){
      $nombre_base = basename($_FILES["cv"]["name"]);
      $nombre_final = date("d-m-y"). "-". date("H-i-s"). "-" . $nombre_base;
      $ruta = "archivos/" . $nombre_final;
      $subirarchivo = move_uploaded_file($_FILES["cv"]["tmp_name"], $ruta);
      if($subirarchivo){

         $objeto = new Conexion;
         $conexion = $objeto->Conectar();
         
          $insertar = "INSERT INTO postulaciones(nombre, correo, telefono, puesto_solicitado, localidad, experiencia, cv) Values ('$nombre', '$correo', '$telefono', '$puesto_solicitado', '$localidad', '$experiencia', '$ruta')";
         
         $resultado = $conexion->prepare($insertar);
         $resultado->execute();
         
          $query = $resultado;
          if ($query){
             echo '<script>alert("Postulacion recibida");parent.location = "index.php"</script>'; 
             
          }else{
             echo '<script>alert("Error");parent.location = "index.php"</script>'; 
          }
      }
   }
        ?>