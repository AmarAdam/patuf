<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	class DeconnexionCtrl extends CI_Controller{
		
		public function accueil($page = 'PageAccueil'){
		
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

			$this->load->database();

			$data['title'] = ucfirst($page);
			
			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');

		}
  

  			public function deconnexion(){
  			
  			$this->load->helper('cookie');
        	$this->load->model('My_admin');
			
			delete_cookie('login');
       	 	$this->load->view('pages/PageConnexion');
		}	
		

		
	}
