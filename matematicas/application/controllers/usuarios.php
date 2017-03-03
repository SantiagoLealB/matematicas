
<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Usuarios extends CI_Controller{
         
	    public function index(){
		  //$this->session->sess_destroy();
		  
      if($this->session->userdata('logueado')){ //si hay una sesion activa
  				$this->load->view('usuarios'); 
  		}
  			else{
  			 //$this->load->helper('inicio/index'); 
        $this->load->view("inicio");
          //redirect( base_url('index'));
           //echo $this->session->userdata('logueado');
           //redirect('inicio', 'refresh');
  			}
	    }
		
		//$usuario_data = array();
		//--------------REGISTRAR USUARIO------------------
		public function registrar(){
     			$correo = $this->input->post('correo');
      			 
     			$datos = array(
    		         'nombre' => $this->input->post('nombre'),//capturo los datos que me envian desde la vista, por ajax
    		         'apellido' => $this->input->post('apellido'),
    		         'email' => $this->input->post('correo'),
    		         'password' => $this->input->post('pass'),
    		         'fechaNacimiento' => $this->input->post('fecha'),
    		  );
 			//comparar si correo ya existe
 			      $this->db->select('email');
            $this->db->from('usuarios');
            $this->db->where('email', $correo);
            $correos = $this->db->get();
           
            if($correos->num_rows() > 0){ //si es mayor a cero el correo ya esta registrado
				      echo json_encode(3);
            }
            else{//correo no esta registrado
            	$this->db->insert("usuarios", $datos);
            	
            	if($this->db->affected_rows() > 0){
            		echo json_encode(1);
            	}
            	else{
            		echo json_encode(2); //no se pudo crea la cuenta
            	}	
            }
        }//metodo

        //--------------------------ACCEDER--------------------------------
    public function acceder(){

        if($this->input->is_ajax_request()){
        	$correo = $this->input->post('correo');
        	$pass = $this->input->post('pass');
        	//$correo = 'aries-leal@hotmail.com';
        	
        	  $this->db->select('idUsuario, nombre, email, password');
            $this->db->from('usuarios');
            $this->db->where('email', $correo);
            $consulta = $this->db->get();
            
            $fila = $consulta->row();//pasamos a una fila para acceder
        	
        	//INICIO DE SESION
        	if($consulta->num_rows() > 0){
        		
        		if($fila->email == $correo){

        			if($fila->password == $pass){
	        			$usuario_data = array(
                  'idUsuario' => $fila->idUsuario,
	        				'usuario' => $fila->nombre,
	        				'email' => $correo,
	        				'logueado' => true
	        			);

	        			$this->session->set_userdata($usuario_data);
	         			//$this->load->view('usuarios');
                if($this->session->userdata('logueado')){
	         			 echo json_encode(1);
                }
	         		}
	         		else{
	         			echo json_encode(3); //significa que contraseña es incorrecta

	         		}
        		}
         	}
        	else{
        		 echo json_encode(2);
        	}
        }

    }//metodo acceder

        //----------SALIR DE SESSION-------------------
        public function salir(){
        	$usuario_data = array(
               'logueado' => false
      		);
      		$this->session->unset_userdata($usuario_data);
      		$this->session->sess_destroy();
      		//$this->load->view('inicio');
      		$this->eliminarCache(); 

        	echo json_encode($usuario_data['logueado']);
        }

        public function eliminarCache(){
		  $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
			$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
			$this->output->set_header('Pragma: no-cache');
	    }

	    public function obtenerDatos(){
	    	
        if($this->input->is_ajax_request()){
    	    	if($this->session->userdata('logueado')){
    	    		 echo json_encode($this->session->userdata('usuario'));
    	    	}
    	    	else{
    	    		echo json_encode(0);
    	    	}
        }
	    }

        //guardar calificaciones de los usuarios
     public function guardarCalificacion(){
           // echo 'sesion iniciada';
            if($this->session->userdata('logueado')){
                

                if($this->input->is_ajax_request()){
                    //obtener valores que recibirmos por ajax
                    $id = $this->session->userdata('idUsuario');
                    $tema = $this->input->post('idTema');
                    $nCorrectos = $this->input->post('nCorrectos');
                    $nIncorrectos = $this->input->post('nIncorrectos');
                    //$tema = 1;
                    //$nCorrectos = 5;
                    //$nIncorrectos = 5;

                    $nEjercicios = $nCorrectos+$nIncorrectos;
                    $fecha = date("Y-m-d");
                    
                    $data = array(
                        'idUsuario' => $id,
                        'idTema' => $tema,
                        'noEjercicios' => $nEjercicios,
                        'correctos' => $nCorrectos,
                        'incorrectos' => $nIncorrectos,
                        'fecha' => $fecha
                    );
                     $this->db->insert('calificaciones',$data);
                     echo json_encode(true);

                     //if(mysql_affected_rows() > 0){
                       // echo 'si';
                       //echo json_encode(true);
                     //}
                     //else{
                       // echo 'no';
                        
                     //}
                }
            }
            else{
                echo json_encode('sesion no iniciada');
            }
        }

        public function obtenerActividades(){
             
            if($this->session->userdata('logueado')){
 
                $id = $this->session->userdata('idUsuario');
            //echo 'sesion iniciada';
                $this->db->select('m.nombreMateria, t.nombreTema, c.noEjercicios,c.correctos, c.incorrectos, c.fecha');
                $this->db->from('calificaciones c');
                $this->db->join('temas t', 't.idTema = c.idTema');
                $this->db->join('materias m', 'm.idMateria = t.idMateria');
                $this->db->where('c.idUsuario', $id);
                $this->db->order_by("c.fecha", "desc"); 
                $consulta = $this->db->get();
                
                 echo json_encode($consulta->result());
            }
        }

        //ACTUALIZAR DATOS DE CONTACTO


        public function obtenerDatosUsuario(){

          if($this->session->userdata('logueado')){
               $id = $this->session->userdata('idUsuario');


               $this->db->select('nombre, apellido, fechaNacimiento ');
               $this->db->from('usuarios');
               $this->db->where('idUsuario', $id);
               $consulta = $this->db->get();
               $fila = $consulta->row();

               echo json_encode($fila);
          }
        }


          public function actualizarDatosUsuario(){

              if($this->input->is_ajax_request()){

                if($this->session->userdata('logueado')){
                    //obtener valores que recibirmos por ajax
                    $id = $this->session->userdata('idUsuario');
                   
                    $data = array(
                       'nombre' => $this->input->post('nombre'),
                       'apellido' => $this->input->post('apellido'),
                       'fechaNacimiento' => $this->input->post('fecha')
                     );

                    $this->db->where('idUsuario', $id);
                    $this->db->update('usuarios', $data); 
                    echo json_encode(1);
                }      
              }
          }

          public function cambiarPassword(){

              if($this->input->is_ajax_request()){

                if($this->session->userdata('logueado')){
                    //obtener valores que recibirmos por ajax
                  $pass1 = $this->input->post('pass1');
                  $pass2 = $this->input->post('pass2');

                  if($pass1 == $pass2 && strlen($pass1) >= 6){
                      $id = $this->session->userdata('idUsuario');
                   
                      $data = array(
                         'password' => $pass1
                       );

                      $this->db->where('idUsuario', $id);
                      $this->db->update('usuarios', $data); 
                      echo json_encode(1);
                  }
                }      
              }
          }




	}//clase
?>