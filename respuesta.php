<?php




include_once 'DAO.php';
include_once 'DTO.php';

$primero=$_POST['primero'];
$segundo=$_POST['segundo'];

$objDTO= new DTO($primero, $segundo);


$objDAO= new DAO();
$opcion= $_POST['opcion'];

if ( $opcion==1) {$resultado= $objDAO->suma($objDTO);
    
}else if ($opcion==2){ $resultado= $objDAO->resta($objDTO);
    
}else if ($opcion==3) { $resultado= $objDAO->Multiplicacion($objDTO);
    
} else { $resultado= $objDAO->division($objDTO);
    
}
header("location: index.php?resultado=".$resultado);
?>
