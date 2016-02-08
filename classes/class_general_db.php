<?php

/////Clase para Manejo de BD MySQL desde PHP By Luis Ruben Perez Gil 
class conexionBD{
   ////funcion Constructora
   function conexionBD (){
    $Maquina 	= "5.56.59.117"; 		///regularmente es localhost
    $Usuario 	= "elforodeltenis"; 			//tu usuario
	  $Pass 		= "marc2659"; 				 // tu pass
    $BD 		= "elforodeltenis"; 		// la BD que vas a manipular
	
   global $conectado;
      $this->conexion = mysql_connect($Maquina,$Usuario,$Pass);
      mysql_select_db($BD);
      if($this->conexion){
         $conectado = true;
      }else{
         $conectado = false;
      }
   }
   
   
////Metodo para hacer el query lleva como parametro tu sentencia SQL
   function doQuery($sqlString){
         $this->doQueryS = mysql_query ($sqlString);
         if($this->doQueryS){
            return true;
         }else{
            $this->errorNo = mysql_error($this->conexion);
            echo "Error en la sentencia SQL del metodo <b>doQuery</b> <br>Mensaje Del Error:<font color='#FF0000'>".$this->errorNo."</font>";
         }
   }
///---END ------------------------------------------------------------------------------------------------   
////Funcion que nos dice el numero de Campos de la Tabla
   function getNumFields (){
       return $this->NumFields = mysql_num_fields($this->doQueryS);
   }
///---END ------------------------------------------------------------------------------------------------      
   ///Funcion que nos dice el nombre de un campo en especifico pasando un numero de campo como parametro
   function getNameField($iterador){
      echo $this->fieldNamesArray[$iterador] = mysql_field_name($this->doQueryS,$iterador);
   }
///---END ------------------------------------------------------------------------------------------------   
   ///Funcion que nos dice el nombre de todos los campos separados por coma
   function getNameFieldsAll(){
      $this->NumFields = mysql_num_fields($this->doQueryS);
      for($iterador=0;$iterador<$this->NumFields;$iterador++){
         echo $this->fieldNamesArray[$iterador] = mysql_field_name($this->doQueryS,$iterador).",";
      }
   }
///---END ------------------------------------------------------------------------------------------------   
   ///Funcion que nos Devuelve el identificador generado en la última llamada a INSERT 
   function getInsertID(){
       return $this->getLastID = mysql_insert_id();
   }
///---END ------------------------------------------------------------------------------------------------   
   
   ///Funcion que nos dice el numero de Registros que se afectaron el la consulta
   function getNumRows(){
       return $this->affectedRows = mysql_num_rows($this->doQueryS);
   }
///---END ------------------------------------------------------------------------------------------------   
   
   ///Funcion que nos dice el numero de Registros que se afectaron el la consulta
   function getAffectedRows(){
       return $this->affectedRows = mysql_affected_rows($this->conexion);
   }
///---END ------------------------------------------------------------------------------------------------   
   /////retorna el dataprovider en un array
   function setWhile(){
      $this->setDataProvider = mysql_fetch_array($this->doQueryS);
      return $this->setDataProvider;
   }
///---END ------------------------------------------------------------------------------------------------   
   ////Funcion que devuelve los registros de un campo en especifico
   function getDataSQL($campoName){
      return $this->setDataProvider[$campoName];
   }
///---END ------------------------------------------------------------------------------------------------   
   ///funcion que libera la memoria
   function setFreeResult(){
      mysql_free_result($this->doQueryS);
   }
///---END ------------------------------------------------------------------------------------------------   
   /////funcion que cierra la conexion con la BD
   function setClose(){
      mysql_close($this->conexion);
   }
///---END ------------------------------------------------------------------------------------------------   
}
///Instancia de la clase conexionBD;

?>