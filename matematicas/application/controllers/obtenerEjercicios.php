<?php
	
	class ObtenerEjercicios extends CI_Controller{
		
		

		public function obtenerEjerciciosSuma(){

			//$queryEjercicios = $this->db->get('ejercicios'); 
			//$queryEjercicios = $this->db->query('select * from ejercicios where idTema=3');
			$this->db->select('e.ejercicio, e.solucion');
            $this->db->from('ejercicios e');
            $this->db->where('e.idTema=',3);
            //$this->db->limit(5);
            $queryEjercicios = $this->db->get();

            //$sql = "select * from ejercicios where idEjercicio= ? or idEjercicio = ? or idEjercicio = ? and idTema = ? "; 
			//$queryEjercicios =  $this->db->query($sql, array(4,100,300, 3 ));


			if($queryEjercicios->num_rows() > 0){
				$header = false; 
				
				$problema = array();
				$resp = array();
				$datos = array();

				foreach ($queryEjercicios->result() as $fila){
					$problema[] = $fila->ejercicio;
					$resp[] = $fila->solucion;
				}

				for ($i=1; $i < 6; $i++) { 
					$n = rand(1, sizeof($problema) );
					$datos[0][] = $problema[$n];
					$datos[1][] = $resp[$n];
				}					

 			}
			else{
				$problema = 'No hay :(';
			}
			
			echo json_encode($datos);
		}
	//------------------------------------------------------------
		public function obtenerEjerciciosResta(){ 
			$this->db->select('e.ejercicio, e.solucion');
            $this->db->from('ejercicios e');
            $this->db->where('e.idTema=',4);
            //$this->db->limit(5);
            $queryEjercicios = $this->db->get(); 

			if($queryEjercicios->num_rows() > 0){
				$header = false; 
				
				$problema = array();
				$resp = array();
				$datos = array();

				foreach ($queryEjercicios->result() as $fila){
					$problema[] = $fila->ejercicio;
					$resp[] = $fila->solucion;
				}

				for ($i=1; $i < 6; $i++) { 
					$n = rand(1, sizeof($problema) );
					$datos[0][] = $problema[$n];
					$datos[1][] = $resp[$n];
				}					

 			}
			else{
				$problema = 'No hay :(';
			}
			
			echo json_encode($datos);
		}

		//------------------------------------------------------------
		public function obtenerEjerciciosMult(){ 
			$this->db->select('e.ejercicio, e.solucion');
            $this->db->from('ejercicios e');
            $this->db->where('e.idTema=',5);
            //$this->db->limit(5);
            $queryEjercicios = $this->db->get(); 

			if($queryEjercicios->num_rows() > 0){
				$header = false; 
				
				$problema = array();
				$resp = array();
				$datos = array();

				foreach ($queryEjercicios->result() as $fila){
					$problema[] = $fila->ejercicio;
					$resp[] = $fila->solucion;
				}

				for ($i=1; $i < 6; $i++) { 
					$n = rand(1, sizeof($problema) );
					$datos[0][] = $problema[$n];
					$datos[1][] = $resp[$n];
				}					

 			}
			else{
				$problema = 'No hay :(';
			}
			
			echo json_encode($datos);
		}
		//------------------------------------------------------------
		public function obtenerEjerciciosDivision(){ 
			$this->db->select('e.ejercicio, e.solucion');
            $this->db->from('ejercicios e');
            $this->db->where('e.idTema=',6);
            //$this->db->limit(5);
            $queryEjercicios = $this->db->get(); 

			if($queryEjercicios->num_rows() > 0){
				$header = false; 
				
				$problema = array();
				$resp = array();
				$datos = array();

				foreach ($queryEjercicios->result() as $fila){
					$problema[] = $fila->ejercicio;
					$resp[] = $fila->solucion;
				}

				for ($i=1; $i < 6; $i++) { 
					$n = rand(1, sizeof($problema) );
					$datos[0][] = $problema[$n];
					$datos[1][] = $resp[$n];
				}					

 			}
			else{
				$problema = 'No hay :(';
			}
			
			echo json_encode($datos);
		}

	}
		

?>