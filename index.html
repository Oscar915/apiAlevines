<?php
include 'database.php';
$miArray = array();

//Obterner todos los datos 
if("GET"==$_SERVER['REQUEST_METHOD']){
    $sql = "SELECT * FROM `info_ph`";
     $result = $mysqli->query($sql);
     
     while($row = $result->fetch_assoc()) {
        $data['id']= $row["id"];
        $data['dato_ph']= $row["dato_ph"];
        $data['fecha']= $row["fecha"];
        $data['dia']= $row["dia"];
        $data['idcultivo']= $row["idcultivo"];
        array_push($miArray,$data);
      }

      echo json_encode($miArray);
} 

//Añadir nuevos datos
if("POST"==$_SERVER['REQUEST_METHOD']){
   $_POST=json_decode(file_get_contents('php://input'),true);
   $ph=$_POST['dato_ph'];
   $fecha=$_POST['fecha'];
   $dia=$_POST['dia'];
   $idcultivo=$_POST['idcultivo'];
   $sql = "INSERT INTO `info_ph` (`id`, `dato_ph`, `fecha`, `dia`, `idcultivo`) VALUES (NULL, '$ph', '$fecha', '$dia', '$idcultivo');";

    if ($mysqli->query($sql) === TRUE) {
      $estado['OK']=true;
      $estado['msg']="Datos añadido";
     echo json_encode($estado);
    } else {
      $estado['OK']=false;
      $estado['msg']="Error al añadir";
      echo json_encode($estado);
    }

    $mysqli->close();
}

//Actualizar datos
if("PUT"==$_SERVER['REQUEST_METHOD']){
  $_POST=json_decode(file_get_contents('php://input'),true);
  $id=$_POST['id'];
  $ph=$_POST['dato_ph'];
  $fecha=$_POST['fecha'];
  $dia=$_POST['dia'];
  $idcultivo=$_POST['idcultivo'];
  $sql ="UPDATE `info_ph` SET `dato_ph` = '$ph', `fecha` = '$fecha', `dia` = '$dia' WHERE `info_ph`.`id` = $id;";

   if ($mysqli->query($sql) === TRUE) {
     $estado['OK']=true;
     $estado['msg']="Datos actualizados";
    echo json_encode($estado);
   } else {
     $estado['OK']=false;
     $estado['msg']="Error al actualizar";
     echo json_encode($estado);
   }

   $mysqli->close();
}

//Eliminar datos
if("DELETE"==$_SERVER['REQUEST_METHOD']){
  $sql = "DELETE FROM `info_ph` WHERE id=".$_GET['id'];
  if ($mysqli->query($sql) === TRUE) {
    $estado['OK']=true;
    $estado['msg']="Datos eliminado";
   echo json_encode($estado);
  } else {
    $estado['OK']=false;
    $estado['msg']="Error al eliminar";
    echo json_encode($estado);
  }

  $mysqli->close();
  
}
