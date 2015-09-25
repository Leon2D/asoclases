<?php


/**
 * Description of DTO
 *
 * @author Leon
 */



class DTO {
 
 private $primero;
 private $segundo;
 
 function __construct($primero, $segundo) {
     $this->primero = $primero;
     $this->segundo = $segundo;
 }
 function getPrimero() {
     return $this->primero;
 }

 function getSegundo() {
     return $this->segundo;
 }

 function setPrimero($primero) {
     $this->primero = $primero;
 }

 function setSegundo($segundo) {
     $this->segundo = $segundo;
 }


 
 
    
}
