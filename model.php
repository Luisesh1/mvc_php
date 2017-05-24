<?php
	class Model{
		$conexion= "";
		$tabla = "";
		function execute(val){
			//conectar

			//desconectar
		}
		function Model(){

		}
		function select(){
			
		}
		function find($val){		  
		  execute(printf("select ". $tabla . " where id = %u ", val));
		}
		function where(){

		}
	}


?>