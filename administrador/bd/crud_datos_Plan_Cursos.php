<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
// Recepción de los datos enviados mediante POST desde el JS   
    
$idPlan = (isset($_POST['idPlan'])) ? $_POST['idPlan'] : '';
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$idCurso = (isset($_POST['idCurso'])) ? $_POST['idCurso'] : '';
$ciclo = (isset($_POST['ciclo'])) ? $_POST['ciclo'] : '';


switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO curso (idPlan, nombre, ciclo) VALUES('$idPlan', '$nombre', '$ciclo') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT idCurso, idPlan, nombre, ciclo FROM curso ORDER BY idCurso DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE curso SET idPlan='$idPlan', nombre='$nombre', ciclo='$ciclo' WHERE idCurso='$idCurso' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT idCurso, idPlan, nombre, ciclo FROM curso WHERE idCurso='$idCurso' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM curso WHERE idCurso='$idCurso' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
                                
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;