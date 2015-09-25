<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
    <p>Hola, inserta dos valores para poder usar la calculadora</p>
    
    <form action="respuesta.php" method="POST" name="forma">
        <label>Pirmer numero</label>
        <input type="number" name="primero" required><br>
        <label> Segundo Numero </label>
        <input type="number" name="segundo"><br><br>
        <select name="opcion">
            <option value="1">Suma</option>
            <option value="2">Resta</option>
            <option value="3">Multiplicacion</option>
            <option value="4">Division</option>
            
        </select><br>
        <input type="submit" value="Comenzar" name="envio">
        
          <?php
          
          if (isset ($_GET['resultado'])){
              echo'El resultado es '.$_GET['resultado'];
          }
   
        ?>
        
    </form>
    <body>
      
    </body>
</html>
