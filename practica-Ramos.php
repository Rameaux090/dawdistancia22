<?php
    /**
    *@author Cristian Ramos Rodriguez.
    *@version 10/05/2022
    *@param variable nombre de entrada que almacenará los datos que reciba.    *
    */
	function saludo($nombre) {
		echo "Hola  $nombre, esto es un saludo de prueba \n";
	}
	//Invocamos la funcion saludo insertandole nuestro nombre.
	saludo('Cristian');
    
    /**
    * Función que calcula el resultado de la suma de dos números y lo muestra por pantalla.
    *@param variable nombre de entrada que almacenará los datos que reciba.
    *@return 37   
    */	
	function sumar($num1,$num2) {
		$resultado = $num1 +$num2;
		return $resultado;		
	}
	$resultado_suma = sumar(18,19);
	echo  "El resultado de la suma de 18 y 19 son $resultado_suma \n";
	
?>
