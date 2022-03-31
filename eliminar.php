<?php
    include ("conexion.php");
    
    $id = $_GET['id'];


   $objeto = new Conexion;
   $conexion = $objeto->Conectar();

  $borrar = "DELETE FROM postulaciones WHERE id = '$id'";

   $resultado = $conexion->prepare($borrar);
   $resultado->execute();

   if($resultado){
    header("Location: index.php"); 
}else{
echo '<script>alert("Error al Eliminar");parent.location = "alimentos.php"</script>'; 
}
   
?>