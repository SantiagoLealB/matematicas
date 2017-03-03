
<?php 

	class Inicio extends CI_Controller{

		 

		public function index(){
			//$this->session->sess_destroy();
			if($this->session->userdata('logueado')){ //si hay una sesion activa
				$this->load->view("usuarios"); 
			}
			else{
				//redirect(base_url());
				$this->load->view('inicio');   
			}

		}
    }

?>                                                                                                                                         