<?php

	class Consultas_model extends CI_Model{

		function __construct(){
			parent::__construct();
			//$this->load->database();

		}

		/*public function obtenerSuma(){

			$query = $this->db->get('ejercicios');
			if($query->num_rows() > 0){
				return $query;  //enviar las filas al controlador
			}
			else return false;
		}
*/

	}


?>