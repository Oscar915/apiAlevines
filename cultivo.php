<?php
include 'database.php';
$miArray = array();

//Obterner todos los datos 
if("GET"==$_SERVER['REQUEST_METHOD']){
    $sql = "SELECT * FROM `cultivo`";
     $result = $mysqli->query($sql);
     
     while($row = $result->fetch_assoc()) {
        $data['nombre']= $row["nombre"];
        $data['cantidad']= $row["cantidad"];
        $data['id']= $row["id"];
        $data['dia_inicial']= $row["dia_inicial"];
        $data['idespecie']= $row["idespecie"];
        $data['idusuario']= $row["idusuario"];

        array_push($miArray,$data);
      }

      echo json_encode($miArray);
} 

//Añadir nuevos datos
if("POST"==$_SERVER['REQUEST_METHOD']){
   $_POST=json_decode(file_get_contents('php://input'),true);
   $nombre=$_POST['nombre'];
   $cantidad=$_POST['cantidad'];
   $id=$_POST['id'];
   $dia_inicial=$_POST['dia_inicial'];
   $idespecie=$_POST['idespecie'];
   $idusuario=$_POST['idusuario'];
   $sql = "INSERT INTO `cultivo` (`nombre`, `cantidad`, `id`, `dia_inicial`, `idespecie`, `idusuario`) VALUES (NULL, '$nombre', '$cantidad', '$id', '$dia_inicial', '$idespecie', '$idusuario');";

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
  $nombre=$_POST['nombre'];
  $cantidad=$_POST['cantidad'];
  $id=$_POST['id'];
  $dia_inicial=$_POST['dia_inicial'];
  $idespecie=$_POST['idespecie'];
  $idusuario=$_POST['idusuario'];
  $sql ="UPDATE `cultivo` SET `nombre` = '$nombre', `cantidad` = '$cantidad', `dia_inicial` = '$dia_inicial' WHERE `cultivo`.`id` = $id;";

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
  $sql = "DELETE FROM `cultivo` WHERE id=".$_GET['id'];
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