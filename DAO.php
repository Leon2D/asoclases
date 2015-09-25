<?php

/**
 * Description of DAO
 *
 * @author Leon
 */


class DAO {
    public function suma(DTO $obj) {
        $resultado=$obj->getPrimero()+$obj->getSegundo();
        return $resultado;
    }
    public function resta (DTO $obj){
        $resultado=$obj->getPrimero()-$obj->getSegundo();
        return $resultado;
            }
            
    public function Multiplicacion(DTO $obj) {
        
        $resultado=$obj->getPrimero()*$obj->getSegundo();
    return $resultado;
    
    }
                
    public function division(DTO $obj) {
    if ($obj->getSegundo()>1) {
        
        $resultado=$obj->getPrimero()/$obj->getSegundo();
        return $resultado;
                
} 
else {
     echo 'La operacion no es realizable';
}
    }                 
                 
    }        
            


